<?php

namespace App\Http\Controllers;

use App\Mail\ContactSubmissionReceived;
use App\Models\ContactSubmission;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index()
    {
        $page = Page::where('slug', 'home')->first();
        return view('home', compact('page'));
    }

    public function contact(Request $request)
    {
        $validated = $request->validate([
            'your-name'            => 'required|string|max:400',
            'your-email'           => 'required|email|max:400',
            'your-subject'         => 'nullable|string|max:400',
            'your-message'         => 'nullable|string|max:2000',
            'g-recaptcha-response' => 'required',
        ], [
            'g-recaptcha-response.required' => 'Please verify that you are not a robot.',
        ]);

        // Verify reCAPTCHA with Google
        $recaptchaSecret = config('services.recaptcha.secret');
        if ($recaptchaSecret) {
            $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
                'secret'   => $recaptchaSecret,
                'response' => $request->input('g-recaptcha-response'),
                'remoteip' => $request->ip(),
            ]);

            if (! ($response->json('success') ?? false)) {
                return back()->withErrors(['g-recaptcha-response' => 'reCAPTCHA verification failed. Please try again.'])->withInput();
            }
        }

        $submission = ContactSubmission::create([
            'name'    => $validated['your-name'],
            'email'   => $validated['your-email'],
            'subject' => $validated['your-subject'] ?? 'General Inquiry',
            'message' => $validated['your-message'] ?? '',
        ]);

        Mail::to('support@herenowhelp.com')->send(new ContactSubmissionReceived($submission));

        return back()->with('success', 'Thank you! We will be in touch soon.');
    }
}
