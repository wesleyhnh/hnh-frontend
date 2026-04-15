@extends('layouts.app')
@section('title', 'Support – HereNOW Help')
@section('description', "We're here to help. Any time. Any place. No waiting days or weeks for help.")

@section('content')
<section class="page-hero" style="background:linear-gradient(135deg,#4a8daa 0%,#87bcc6 50%,#3e97b5 100%),url('{{ asset('images/banner-1.jpg') }}') center/cover no-repeat fixed;min-height:45vh;display:flex;align-items:center;padding-top:90px;padding-bottom:60px;">
  <div class="container text-center">
    <h1 style="color:#fff;font-family:'Nunito',sans-serif;font-weight:800;font-size:2.6rem;">Customer Support</h1>
    <p style="color:rgba(255,255,255,.9);font-size:1.1rem;max-width:640px;margin:1rem auto;">We're here to help. Any time. Any place. No waiting days or weeks for help.</p>
  </div>
</section>

<section style="background:#fff;padding:80px 0;">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-9" style="color:#444;line-height:1.85;font-size:1rem;">
        <p>HereNOW Help provides 24/7/365 support for both providers and clients. Whether you need technical assistance, implementation guidance, or help with your account, our team is ready.</p><div style="background:#f8f9fb;border-radius:12px;padding:30px;margin-top:2rem;"><h4 style="color:#347595;font-family:Nunito,sans-serif;font-weight:700;">Contact Support</h4><p style="color:#444;">For technical support or account questions, please use the contact form below or email our support team directly.</p><a href="{{ route('home') }}#Contact" class="btn-send d-inline-block mt-2" style="text-decoration:none;">Open a Support Request</a></div>
      </div>
    </div>
  </div>
</section>

<section style="background:#f8f9fb;padding:60px 0;">
  <div class="container text-center">
    <h3 style="color:#3e97b5;font-family:'Nunito',sans-serif;font-weight:700;margin-bottom:1rem;">Ready to Learn More?</h3>
    <a href="{{ route('home') }}#Contact" class="btn-send d-inline-block" style="text-decoration:none;">Schedule A Demo</a>
  </div>
</section>
@endsection
