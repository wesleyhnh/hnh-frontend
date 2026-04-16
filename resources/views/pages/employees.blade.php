@extends('layouts.app')
@section('title', $page->title)
@section('description', $page->meta_description)

@section('content')

{{-- ══════════════════════════════════════════════════════════════════════
     HERO
══════════════════════════════════════════════════════════════════════ --}}
@if($page->show_hero)
<section id="hero-10">
  <div class="container">
    <div class="row align-items-center">

      {{-- Left: text + badges --}}
      <div class="col-md-5">
        <div class="hero-txt">
          <h2>{{ $page->hero_title }}</h2>
          <p>{{ $page->hero_subtitle }}</p>
          <p style="color:#ee9f36;font-family:'Nunito',sans-serif;font-weight:700;font-size:1.1rem;margin-bottom:1.2rem;">86% Improve Happiness and Productivity</p>

          <div class="hero-badge mt-3">
            <a href="https://app.drata.com/security-report/4f420f38-b5d7-45f6-80c7-7f918eed280d/bbd6ae71-4b61-43ed-a2e4-ff901c895a00"
               target="_blank" rel="noopener">
              <img src="{{ asset('images/hipaa-badge.png') }}" alt="HIPAA SOC-2 ISO-27001">
            </a>
          </div>

          <p style="margin-top:14px;">
            <a href="https://app.drata.com/security-report/4f420f38-b5d7-45f6-80c7-7f918eed280d/bbd6ae71-4b61-43ed-a2e4-ff901c895a00"
               target="_blank" rel="noopener" class="view-report">
              View daily compliance report
            </a>
          </p>
        </div>
      </div>

      <div class="col-md-1 d-none d-md-block"></div>

      {{-- Right: video --}}
      <div class="col-md-6 hero-device mt-4 mt-md-0">
        <div class="embed-responsive embed-responsive-16by9" style="border-radius:12px;overflow:hidden;box-shadow:0 12px 32px rgba(0,0,0,.22);">
          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ysweTz-9oZs" style="border: 20px solid white;" allowfullscreen></iframe>
        </div>
      </div>

    </div>
  </div>
</section>
@endif

{{-- ══════════════════════════════════════════════════════════════════════
     FEATURES WITH PHONE MOCKUPS
══════════════════════════════════════════════════════════════════════ --}}
<section style="background:#1e2d38;padding:80px 0;">
  <div class="container">
    <div class="row text-center">
      @php $features = [
        ['img'=>'phone-meditation.png','title'=>'Meditations','body'=>'Meditations to reduce stress and anxiety, improve focus, develop mindfulness and even improve sleep.'],
        ['img'=>'phone-health.png','title'=>'Track Workforce Health','body'=>'Assessments for stress, anxiety, depression, etc. Daily mood check-ins. View workforce trends. Satisfaction surveys.'],
        ['img'=>'phone-peer.png','title'=>'Peer Appreciation','body'=>'Message Boards to find support, connections, inspiration and to provide peer appreciation.'],
        ['img'=>'phone-engage.png','title'=>'Engage Employees','body'=>'Connect with HR & Management via Talk, Text & Video. Calendars. Reminders. Automated Reviews.'],
      ]; @endphp
      @foreach($features as $f)
      <div class="col-md-3 mb-4">
        <div style="margin-bottom:1.5rem;">
          <img src="{{ asset('images/'.$f['img']) }}" alt="{{ $f['title'] }}" style="max-height:280px;filter:drop-shadow(0 8px 24px rgba(0,0,0,.3));">
        </div>
        <h5 style="color:#fff;font-family:'Nunito',sans-serif;font-weight:700;font-size:1.1rem;margin-bottom:.75rem;">{{ $f['title'] }}</h5>
        <p style="color:rgba(255,255,255,.75);font-size:.9rem;line-height:1.6;">{{ $f['body'] }}</p>
      </div>
      @endforeach
    </div>
  </div>
</section>

{{-- ══════════════════════════════════════════════════════════════════════
     FULLY CUSTOMIZABLE
══════════════════════════════════════════════════════════════════════ --}}
<section style="background:#f8f9fb;padding:80px 0;">
  <div class="container">
    <h3 style="text-align:center;color:#3e97b5;font-family:'Nunito',sans-serif;font-weight:800;font-size:2rem;margin-bottom:3rem;">Fully Customizable</h3>

    <div class="row align-items-center">
      {{-- Your Look & Feel --}}
      <div class="col-md-6 mb-5 mb-md-0">
        <div class="row align-items-center">
          <div class="col-sm-6">
            <h4 style="color:#024f7c;font-family:'Nunito',sans-serif;font-weight:700;font-size:1.4rem;margin-bottom:1.25rem;">Your Look &amp; Feel</h4>
            <ul style="list-style:none;padding:0;margin:0;color:#555;font-size:.95rem;line-height:2.2;">
              <li><i class="fas fa-check" style="color:#3e97b5;margin-right:8px;"></i> Use Your Logo</li>
              <li><i class="fas fa-check" style="color:#3e97b5;margin-right:8px;"></i> Your Color Scheme</li>
              <li><i class="fas fa-check" style="color:#3e97b5;margin-right:8px;"></i> Upload Quotes</li>
              <li><i class="fas fa-check" style="color:#3e97b5;margin-right:8px;"></i> Hide/Show Features</li>
              <li><i class="fas fa-check" style="color:#3e97b5;margin-right:8px;"></i> Reorder Features</li>
            </ul>
          </div>
          <div class="col-sm-6 text-center">
            <img src="{{ asset('images/phone-customize.png') }}" alt="Your Look & Feel" style="max-height:300px;filter:drop-shadow(0 8px 24px rgba(0,0,0,.15));">
          </div>
        </div>
      </div>

      {{-- Your Content --}}
      <div class="col-md-6">
        <div class="row align-items-center">
          <div class="col-sm-6">
            <h4 style="color:#024f7c;font-family:'Nunito',sans-serif;font-weight:700;font-size:1.4rem;margin-bottom:1.25rem;">Your Content</h4>
            <ul style="list-style:none;padding:0;margin:0 0 1.5rem 0;color:#555;font-size:.95rem;line-height:2.2;">
              <li><i class="fas fa-check" style="color:#3e97b5;margin-right:8px;"></i> Upload Content</li>
              <li><i class="fas fa-check" style="color:#3e97b5;margin-right:8px;"></i> Videos (Youtube, etc.)</li>
              <li><i class="fas fa-check" style="color:#3e97b5;margin-right:8px;"></i> Audio, Articles, etc.</li>
              <li><i class="fas fa-check" style="color:#3e97b5;margin-right:8px;"></i> Manage Your Library</li>
              <li><i class="fas fa-check" style="color:#3e97b5;margin-right:8px;"></i> Add Support Resources</li>
            </ul>
            <a href="{{ route('home') }}#Contact" class="btn-send d-inline-block" style="text-decoration:none;font-size:.9rem;padding:10px 28px;">SCHEDULE DEMO</a>
          </div>
          <div class="col-sm-6 text-center">
            <img src="{{ asset('images/phone-peer.png') }}" alt="Your Content" style="max-height:300px;filter:drop-shadow(0 8px 24px rgba(0,0,0,.15));">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- ══════════════════════════════════════════════════════════════════════
     ADMIN DASHBOARD (Partial)
══════════════════════════════════════════════════════════════════════ --}}
@include('partials.admin-dashboard')

{{-- ══════════════════════════════════════════════════════════════════════
     SCHEDULE A DEMO (Partial)
══════════════════════════════════════════════════════════════════════ --}}
@include('partials.contact-form')

@endsection
