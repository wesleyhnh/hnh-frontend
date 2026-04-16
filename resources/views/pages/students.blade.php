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
        <div style="border-radius:12px;overflow:hidden;box-shadow:0 12px 32px rgba(0,0,0,.22);">
          <video width="100%" height="auto" style="display:block;" controls>
            <source src="{{ $page->video_url ?? asset('images/students-overview.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
          </video>
        </div>
      </div>

    </div>
  </div>
</section>
@endif

{{-- ══════════════════════════════════════════════════════════════════════
     CARE TYPES (Self-Care, Peer-Care, Clinical-Care)
══════════════════════════════════════════════════════════════════════ --}}
@include('partials.care-types', ['context' => 'students'])

<section style="background:#1e2d38;padding:80px 0;">
  <div class="container">
    <div class="row">
      @php $features = [
        ['icon'=>'fa-brain','title'=>'Self-Management Tools','body'=>'Tools to empower students to manage their own mental wellbeing via journal, meditations, self-assessments, and more.'],
        ['icon'=>'fa-users','title'=>'Peer Community','body'=>'Build community via message boards and chat rooms. Train students to be support coaches to their peers.'],
        ['icon'=>'fa-video','title'=>'24/7 Professional Access','body'=>'Access licensed professionals 24/7/365 via talk, text, and video — before, during, and after a crisis.'],
        ['icon'=>'fa-bell','title'=>'Early Intervention Alerts','body'=>'Alert system to identify high-risk students and enable early intervention by counselors and administrators.'],
        ['icon'=>'fa-headphones','title'=>'10,000+ Meditations','body'=>'Meditations (10,000+ Video & Audio) to reduce stress, anxiety, and improve focus for K-12, college, and university students.'],
        ['icon'=>'fa-chart-bar','title'=>'Wellness Tracking','body'=>'Self-assessments to learn top needs. Daily mood check-ins. Track progress and share results with advisors.'],
      ]; @endphp
      @foreach($features as $f)
      <div class="col-md-4 mb-4">
        <div class="feat-item">
          <div class="feat-icon"><i class="fas {{ $f['icon'] }}"></i></div>
          <div class="feat-text"><h5>{{ $f['title'] }}</h5><p>{{ $f['body'] }}</p></div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

{{-- ══════════════════════════════════════════════════════════════════════
     STUDENT APP SECTION
══════════════════════════════════════════════════════════════════════ --}}
<section style="background:#f5f5f5;padding:50px 0;">
  <div class="container">
    <h3 style="color:#3e97b5;font-family:'Nunito',sans-serif;font-weight:700;font-size:1.4rem;text-align:center;margin-bottom:2.5rem;text-transform:uppercase;letter-spacing:1px;">STUDENT APP</h3>

    <div class="row align-items-center">
      {{-- All-in-1 Platform Text --}}
      <div class="col-md-3 mb-4 mb-md-0">
        <h4 style="color:#3e97b5;font-family:'Nunito',sans-serif;font-weight:700;font-size:1.3rem;margin-bottom:1rem;">All-in-1 Platform</h4>
        <ul style="list-style:disc;padding-left:20px;margin:0;color:#666;font-size:.95rem;line-height:2;">
          <li>Meditations (10,000+ Video & Audio)</li>
          <li>Self-assessments to learn top needs</li>
          <li>Community message boards</li>
          <li>Set goals, journal and track progress</li>
          <li>AI driven smart alerts for early intervention</li>
          <li>Fitness – tools & education for a healthy lifestyle</li>
        </ul>
      </div>
      
      {{-- All-in-1 Platform Image --}}
      <div class="col-md-3 text-center mb-4 mb-md-0">
        <img src="{{ asset('images/phone-home-gray.png') }}" alt="All-in-1 Platform" style="max-height:300px;">
      </div>
      
      {{-- 24/7/365 Counseling Text --}}
      <div class="col-md-3 mb-4 mb-md-0">
        <h4 style="color:#3e97b5;font-family:'Nunito',sans-serif;font-weight:700;font-size:1.3rem;margin-bottom:1rem;">24/7/365 Counseling</h4>
        <ul style="list-style:disc;padding-left:20px;margin:0;color:#666;font-size:.95rem;line-height:2;">
          <li>83,000 Licensed Professionals</li>
          <li>Meet virtually – talk, text or video</li>
          <li>Access for those studying abroad</li>
          <li>Hot links for emergency access</li>
          <li>Use your staff during school hours and ours during off hours</li>
        </ul>
      </div>
      
      {{-- 24/7/365 Counseling Image --}}
      <div class="col-md-3 text-center mb-4 mb-md-0">
        <img src="{{ asset('images/phone-messages-gray.png') }}" alt="24/7/365 Counseling" style="max-height:300px;">
      </div>
    </div>
  </div>
</section>

{{-- ══════════════════════════════════════════════════════════════════════
     STAFF APP SECTION
══════════════════════════════════════════════════════════════════════ --}}
<section style="background:#fff;padding:50px 0;">
  <div class="container">
    <h3 style="color:#3e97b5;font-family:'Nunito',sans-serif;font-weight:700;font-size:1.4rem;text-align:center;margin-bottom:2.5rem;text-transform:uppercase;letter-spacing:1px;">STAFF APP</h3>

    <div class="row align-items-center">
      {{-- Student Support Text --}}
      <div class="col-md-3 mb-4 mb-md-0">
        <h4 style="color:#3e97b5;font-family:'Nunito',sans-serif;font-weight:700;font-size:1.3rem;margin-bottom:1rem;">Student Support</h4>
        <ul style="list-style:disc;padding-left:20px;margin:0;color:#666;font-size:.95rem;line-height:2;">
          <li>Manage student calendars</li>
          <li>Meet via talk, text or video</li>
          <li>Create and send surveys</li>
          <li>Get alerts for high-risk students</li>
          <li>Get data for reimbursement</li>
        </ul>
      </div>
      
      {{-- Student Support Image --}}
      <div class="col-md-3 text-center mb-4 mb-md-0">
        <img src="{{ asset('images/phone-one-on-one-gray.png') }}" alt="Student Support" style="max-height:300px;">
      </div>
      
      {{-- Peer Certification Text --}}
      <div class="col-md-3 mb-4 mb-md-0">
        <h4 style="color:#3e97b5;font-family:'Nunito',sans-serif;font-weight:700;font-size:1.3rem;margin-bottom:1rem;">Peer Certification</h4>
        <ul style="list-style:disc;padding-left:20px;margin:0;color:#666;font-size:.95rem;line-height:2;">
          <li>PeerNOW Academy for Students & Staff</li>
          <li>On-line or in-person group training to become a certified PeerNOW Coach</li>
          <li>Provide Support via Talk, Text or Video</li>
          <li>Manage calendars</li>
        </ul>
      </div>
      
      {{-- Peer Certification Image --}}
      <div class="col-md-3 text-center mb-4 mb-md-0">
        <img src="{{ asset('images/phone-counselor-gray.png') }}" alt="Peer Certification" style="max-height:300px;">
      </div>
    </div>
  </div>
</section>

{{-- ══════════════════════════════════════════════════════════════════════
     FAMILY & FRIENDS APP SECTION
══════════════════════════════════════════════════════════════════════ --}}
<section style="background:#f5f5f5;padding:50px 0;">
  <div class="container">
    <h3 style="color:#3e97b5;font-family:'Nunito',sans-serif;font-weight:700;font-size:1.4rem;text-align:center;margin-bottom:2.5rem;text-transform:uppercase;letter-spacing:1px;">FAMILY &amp; FRIENDS APP</h3>

    <div class="row align-items-center">
      {{-- Community Chat Text --}}
      <div class="col-md-3 mb-4 mb-md-0">
        <h4 style="color:#3e97b5;font-family:'Nunito',sans-serif;font-weight:700;font-size:1.3rem;margin-bottom:1rem;">Community Chat</h4>
        <ul style="list-style:disc;padding-left:20px;margin:0;color:#666;font-size:.95rem;line-height:2;">
          <li>Stay connected with loved ones in recovery</li>
          <li>Connect via text, talk or video</li>
          <li>Community Message Board</li>
          <li>Daily Meditations</li>
          <li>Support Resources Library</li>
        </ul>
      </div>
      
      {{-- Community Chat Image --}}
      <div class="col-md-3 text-center mb-4 mb-md-0">
        <img src="{{ asset('images/phone-virtual-meeting-gray.png') }}" alt="Community Chat" style="max-height:300px;">
      </div>
      
      {{-- Track Progress Text --}}
      <div class="col-md-3 mb-4 mb-md-0">
        <h4 style="color:#3e97b5;font-family:'Nunito',sans-serif;font-weight:700;font-size:1.3rem;margin-bottom:1rem;">Track Progress</h4>
        <ul style="list-style:disc;padding-left:20px;margin:0;color:#666;font-size:.95rem;line-height:2;">
          <li>Get progress updates</li>
          <li>Alerts for high risk areas</li>
          <li>Alerts for low engagement</li>
          <li>Alerts based on surveys</li>
          <li>Connect with their providers</li>
        </ul>
      </div>
      
      {{-- Track Progress Image --}}
      <div class="col-md-3 text-center mb-4 mb-md-0">
        <img src="{{ asset('images/phone-milestones-gray.png') }}" alt="Track Progress" style="max-height:300px;">
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
@include('partials.contact-form', ['title' => 'Schedule A Demo', 'subtitle' => 'Want to learn more? Schedule a demo today!'])

@if($page->show_cta)
<section style="background:#f8f9fb;padding:80px 0;">
  <div class="container text-center">
    @if($page->cta_subtext)
    <h2 style="color:#3e97b5;font-family:'Nunito',sans-serif;font-weight:800;font-size:2rem;margin-bottom:1rem;">{{ $page->cta_subtext }}</h2>
    @endif
    @if($page->cta_description)
    <p style="color:#666;font-size:.95rem;max-width:600px;margin:0 auto 1.5rem;">{{ $page->cta_description }}</p>
    @endif
    @if($page->show_body && $page->body)
    <p style="color:#444;max-width:680px;margin:0 auto 2rem;">{!! $page->body !!}</p>
    @endif
    @if($page->cta_text && $page->cta_url)
    <a href="{{ $page->cta_url }}" class="btn-send d-inline-block" style="text-decoration:none;">{{ $page->cta_text }}</a>
    @endif
  </div>
</section>
@endif

@endsection
