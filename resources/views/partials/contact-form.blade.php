{{-- ══════════════════════════════════════════════════════════════════════
     CONTACT / SCHEDULE A DEMO PARTIAL
     Usage: @include('partials.contact-form', ['title' => 'Schedule A Demo', 'subtitle' => 'Want to learn more?'])
══════════════════════════════════════════════════════════════════════ --}}
<section class="contact-section" id="Contact">
  <div class="container">

    <h3 class="section-head">{{ $title ?? 'Schedule A Demo' }}</h3>
    <p class="section-sub">{{ $subtitle ?? 'Increase Intakes, Engagement, Reimbursement...and More!' }}</p>

    <div class="contact-form-wrap">

      @if(session('success'))
        <div class="alert-success-box">{{ session('success') }}</div>
      @endif

      <form action="{{ route('contact') }}" method="POST" class="contact-form">
        @csrf

        <div class="row">
          <div class="col-lg-6">
            <input type="text" name="your-name" class="form-control"
                   placeholder="Your Name" value="{{ old('your-name') }}" required maxlength="400">
            @error('your-name')
              <div class="text-danger small mb-2">{{ $message }}</div>
            @enderror
          </div>
          <div class="col-lg-6">
            <input type="email" name="your-email" class="form-control"
                   placeholder="Email Address" value="{{ old('your-email') }}" required maxlength="400">
            @error('your-email')
              <div class="text-danger small mb-2">{{ $message }}</div>
            @enderror
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <select name="your-subject" class="form-control {{ old('your-subject') ? 'filled' : '' }}">
              <option value="" disabled {{ old('your-subject') ? '' : 'selected' }}>I'm Interested As...</option>
              <option value="Rehab Center/s" {{ old('your-subject')=='Rehab Center/s' ? 'selected' : '' }}>Rehab Center/s</option>
              <option value="State & Local Government" {{ old('your-subject')=='State & Local Government' ? 'selected' : '' }}>State &amp; Local Government</option>
              <option value="Hospital" {{ old('your-subject')=='Hospital' ? 'selected' : '' }}>Hospital</option>
              <option value="Employer" {{ old('your-subject')=='Employer' ? 'selected' : '' }}>Employer</option>
              <option value="VA / Veterans Organization" {{ old('your-subject')=='VA / Veterans Organization' ? 'selected' : '' }}>VA / Veterans Organization</option>
              <option value="Insurance Provider" {{ old('your-subject')=='Insurance Provider' ? 'selected' : '' }}>Insurance Provider</option>
              <option value="Potential Partner" {{ old('your-subject')=='Potential Partner' ? 'selected' : '' }}>Potential Partner</option>
              <option value="Press" {{ old('your-subject')=='Press' ? 'selected' : '' }}>Press</option>
              <option value="Other" {{ old('your-subject')=='Other' ? 'selected' : '' }}>Other</option>
            </select>
          </div>
        </div>

        <div class="row mt-1">
          <div class="col-12">
            <textarea name="your-message" class="form-control"
                      placeholder="Your Message" maxlength="2000">{{ old('your-message') }}</textarea>
          </div>
        </div>

        @if(config('services.recaptcha.site_key'))
        <div class="row mt-2">
          <div class="col-12">
            <div class="g-recaptcha" data-sitekey="{{ config('services.recaptcha.site_key') }}"></div>
            @error('g-recaptcha-response')
              <div class="text-danger small mt-1">{{ $message }}</div>
            @enderror
          </div>
        </div>
        @endif

        <div class="row mt-2">
          <div class="col-12">
            <button type="submit" class="btn-send">SEND MESSAGE</button>
          </div>
        </div>
      </form>

    </div>
  </div>
</section>
