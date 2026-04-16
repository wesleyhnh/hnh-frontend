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
          <p style="color:#ee9f36;font-family:'Nunito',sans-serif;font-weight:700;font-size:1.1rem;margin-bottom:1.2rem;">86% Improve Happiness and Well-being</p>

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
          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/MGHF5T7W6io" style="border: 10px solid white;" allowfullscreen></iframe>
        </div>
      </div>

    </div>
  </div>
</section>
@endif

{{-- ══════════════════════════════════════════════════════════════════════
     CARE TYPES (Self-Care, Peer-Care, Clinical-Care)
══════════════════════════════════════════════════════════════════════ --}}
@include('partials.care-types', ['context' => 'veterans'])

{{-- ══════════════════════════════════════════════════════════════════════
     VETERAN APP SECTION
══════════════════════════════════════════════════════════════════════ --}}
<section style="background:#f5f5f5;padding:50px 0;">
  <div class="container">
    <h3 style="color:#3e97b5;font-family:'Nunito',sans-serif;font-weight:700;font-size:1.4rem;text-align:center;margin-bottom:2.5rem;text-transform:uppercase;letter-spacing:1px;">VETERAN APP</h3>

    <div class="row align-items-center">
      {{-- Self-Care Text --}}
      <div class="col-md-3 mb-4 mb-md-0">
        <h4 style="color:#3e97b5;font-family:'Nunito',sans-serif;font-weight:700;font-size:1.3rem;margin-bottom:1rem;">Self-Care</h4>
        <ul style="list-style:disc;padding-left:20px;margin:0;color:#666;font-size:.95rem;line-height:2;">
          <li>Daily meditations and journaling</li>
          <li>Daily Wellness Check-Ins</li>
          <li>Customized surveys to assess transition from military to civilian life</li>
          <li>Red flag alerts to Family & Friends for high-risk areas and behavior</li>
        </ul>
      </div>
      
      {{-- Self-Care Image --}}
      <div class="col-md-3 text-center mb-4 mb-md-0">
        <img src="{{ asset('images/phone-peer.png') }}" alt="Self-Care" style="max-height:300px;">
      </div>
      
      {{-- Suicide Prevention Text --}}
      <div class="col-md-3 mb-4 mb-md-0">
        <h4 style="color:#3e97b5;font-family:'Nunito',sans-serif;font-weight:700;font-size:1.3rem;margin-bottom:1rem;">Suicide Prevention</h4>
        <ul style="list-style:disc;padding-left:20px;margin:0;color:#666;font-size:.95rem;line-height:2;">
          <li>Smart Alerts for early intervention</li>
          <li>Learn positive coping skills</li>
          <li>24/7/365 access to peer coaches and/or licensed mental health professionals</li>
          <li>Hot links to national crisis management resources</li>
        </ul>
      </div>
      
      {{-- Suicide Prevention Image --}}
      <div class="col-md-3 text-center mb-4 mb-md-0">
        <img src="{{ asset('images/phone-suicide-prevention.png') }}" alt="Suicide Prevention" style="max-height:300px;">
      </div>
    </div>
  </div>
</section>

{{-- ══════════════════════════════════════════════════════════════════════
     PROVIDER APP SECTION
══════════════════════════════════════════════════════════════════════ --}}
<section style="background:url('{{ asset('images/bg-graph-2-white.jpg') }}') center/cover no-repeat; background-color:#fff; padding:50px 0;">
  <div class="container">
    <h3 style="color:#3e97b5;font-family:'Nunito',sans-serif;font-weight:700;font-size:1.4rem;text-align:center;margin-bottom:2.5rem;text-transform:uppercase;letter-spacing:1px;">PROVIDER APP</h3>

    <div class="row align-items-center">
      {{-- Vet Support Tools Text --}}
      <div class="col-md-3 mb-4 mb-md-0">
        <h4 style="color:#3e97b5;font-family:'Nunito',sans-serif;font-weight:700;font-size:1.3rem;margin-bottom:1rem;">Vet Support Tools</h4>
        <ul style="list-style:disc;padding-left:20px;margin:0;color:#666;font-size:.95rem;line-height:2;">
          <li>Manage your calendar</li>
          <li>Meet virtually (Text, talk or video)</li>
          <li>Create and send surveys</li>
          <li>Get alerts for high-risk clients</li>
          <li>Get data for reimbursement</li>
        </ul>
      </div>
      
      {{-- Vet Support Tools Image --}}
      <div class="col-md-3 text-center mb-4 mb-md-0">
        <img src="{{ asset('images/phone-engage.png') }}" alt="Vet Support Tools" style="max-height:300px;">
      </div>
      
      {{-- Peer Certification Text --}}
      <div class="col-md-3 mb-4 mb-md-0">
        <h4 style="color:#3e97b5;font-family:'Nunito',sans-serif;font-weight:700;font-size:1.3rem;margin-bottom:1rem;">Peer Certification</h4>
        <ul style="list-style:disc;padding-left:20px;margin:0;color:#666;font-size:.95rem;line-height:2;">
          <li>PeerNOW Academy for Veterans</li>
          <li>On-line or in-person group training to become a certified PeerNOW Coach</li>
          <li>Get paid to help fellow veterans</li>
          <li>Set your own hours</li>
          <li>Aligns with state certification programs</li>
        </ul>
      </div>
      
      {{-- Peer Certification Image --}}
      <div class="col-md-3 text-center mb-4 mb-md-0">
        <img src="{{ asset('images/phone-counselor.png') }}" alt="Peer Certification" style="max-height:300px;">
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
        <img src="{{ asset('images/phone-virtual-meeting.png') }}" alt="Community Chat" style="max-height:300px;">
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
        <img src="{{ asset('images/phone-milestones.png') }}" alt="Track Progress" style="max-height:300px;">
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

@endsection

@section('scripts')
@if(config('services.recaptcha.site_key'))
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
@endif
@endsection
