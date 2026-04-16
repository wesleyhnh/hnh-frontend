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

      {{-- Left: text & button --}}
      <div class="col-md-5">
        <div class="hero-txt text-center" style="text-align: center;">
          <img src="{{ asset('images/HereNOW-Logo-AppIcon.png') }}" alt="PeerNOW Academy" width="125" height="125" style="margin-bottom: 1rem;">
          <h2 style="color:#024f7c;font-family:'Nunito',sans-serif;font-weight:400;font-size:1.3rem;margin-bottom:1rem;">PeerNOW Academy</h2>
          <p style="color:#626881;font-size:1.25rem;font-weight:400;margin-bottom:.9rem;">{{ $page->hero_title }}</p>
          <p style="color:#3e97b5;font-size:1.25rem;font-weight:300;">{{ $page->hero_subtitle }}</p>
          <a href="{{ route('home') }}#Contact" class="btn-send d-inline-block mt-3" style="text-decoration:none;">REQUEST MORE INFO</a>
        </div>
      </div>

      <div class="col-md-1 d-none d-md-block"></div>

      {{-- Right: video --}}
      <div class="col-md-6 hero-device mt-4 mt-md-0">
        <div style="border-radius:12px;overflow:hidden;box-shadow:0 12px 32px rgba(0,0,0,.22);">
          <video width="100%" height="auto" style="display:block;" controls>
            <source src="{{ asset('images/peernow-promo.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
          </video>
        </div>
      </div>

    </div>
  </div>
</section>
@endif

{{-- ══════════════════════════════════════════════════════════════════════
     OUR PHILOSOPHY & OUR PROGRAM
══════════════════════════════════════════════════════════════════════ --}}
<section style="background:linear-gradient(rgba(30,40,50,.7), rgba(30,40,50,.7)),url('{{ asset('images/banner-1.jpg') }}') center/cover no-repeat fixed;padding:80px 0;">
  <div class="container">
    <div class="row">
      {{-- Our Philosophy --}}
      <div class="col-md-6 text-center mb-5 mb-md-0">
        <h4 style="color:#feb75f;font-family:'Nunito',sans-serif;font-weight:700;font-size:1.5rem;margin-bottom:1.5rem;">Our Philosophy</h4>
        <p style="color:#fff;font-size:.95rem;line-height:1.8;">Peer counseling is a scientifically-proven approach to mental health support for those in need. Other models such as Alcoholics Anonymous (AA) and Narcotics Anonymous (NA), have decades of proven success. These models demonstrate that individuals who have experienced adverse life events can help those who are struggling with similar issues. They do this by lending an empathetic ear, sharing their life experiences, and creating a space where hope and strength can grow.</p>
      </div>

      {{-- Our Program --}}
      <div class="col-md-6 text-center">
        <h4 style="color:#feb75f;font-family:'Nunito',sans-serif;font-weight:700;font-size:1.5rem;margin-bottom:1.5rem;">Our Program</h4>
        <ul style="list-style:none;padding:0;margin:0;color:#fff;font-size:.95rem;line-height:2;">
          <li>Developed by a team of mental health and education specialists</li>
          <li>Online, interactive, self-paced 8-hour program</li>
          <li>Turning life experiences into sound peer coaching practices</li>
          <li>Aligns with state certification requirements</li>
          <li>Customizable for each organization</li>
          <li>Create well-paying jobs for peer coaches</li>
        </ul>
        <p style="color:#feb75f;font-size:.85rem;margin-top:1rem;">(Titles Include: Peer Coach, Peer Counselor, Peer Support Specialists)</p>
      </div>
    </div>
  </div>
</section>

{{-- ══════════════════════════════════════════════════════════════════════
     PEERNOW ACADEMY + HERENOW SUITE OF APPS
══════════════════════════════════════════════════════════════════════ --}}
<section style="background:linear-gradient(rgba(30,40,50,.45), rgba(30,40,50,.45)),url('{{ asset('images/bg-graph.jpg') }}') center/cover no-repeat fixed;padding:80px 0;">
  <div class="container">
    <h3 style="color:#fff;font-family:'Nunito',sans-serif;text-align:center;margin-bottom:1rem;font-size:1.7rem;">PeerNOW Academy + HereNOW Suite of Apps</h3>
    <p style="color:#feb75f;text-align:center;margin-bottom:2.5rem;font-size:.95rem;max-width:600px;margin-left:auto;margin-right:auto;">Use our full suite of apps to better engage and serve your clients.</p>
    <div class="row">
      @php $features = [
        ['icon'=>'fa-certificate','title'=>'State-Aligned Certification','body'=>'Certification aligns with state requirements for Peer Coach, Peer Counselor, and Peer Support Specialist titles.'],
        ['icon'=>'fa-laptop','title'=>'Online & Self-Paced','body'=>'Complete the 8-hour interactive program at your own pace, from anywhere, on any device.'],
        ['icon'=>'fa-briefcase','title'=>'Create Well-Paying Jobs','body'=>'The program creates sustainable, well-paying careers for peer coaches in their communities.'],
        ['icon'=>'fa-building','title'=>'Customizable for Organizations','body'=>"Tailor the program content to fit your organization's specific population, goals, and branding."],
      ]; @endphp
      @foreach($features as $f)
      <div class="col-md-3 mb-4">
        <div class="feat-item flex-column text-center" style="align-items:center;">
          <div class="feat-icon mb-2"><i class="fas {{ $f['icon'] }}"></i></div>
          <div class="feat-text"><h5>{{ $f['title'] }}</h5><p>{{ $f['body'] }}</p></div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

{{-- ══════════════════════════════════════════════════════════════════════
     U.S. GROWTH - MENTAL HEALTH COUNSELING
══════════════════════════════════════════════════════════════════════ --}}
<section style="background:linear-gradient(rgba(30,40,50,.65), rgba(30,40,50,.65)),url('{{ asset('images/bg-graph.jpg') }}') bottom center/cover no-repeat fixed;padding:80px 0;">
  <div class="container">
    <h3 style="color:#fff;font-family:'Nunito',sans-serif;text-align:center;margin-bottom:3rem;font-size:2rem;">U.S. Growth - Mental Health Counseling</h3>
    
    <p style="color:#fff;font-size:1rem;text-align:center;max-width:700px;margin:0 auto 3rem;line-height:1.8;"><strong>Need for Mental Health and Substance Abuse Support is Skyrocketing</strong><br>Demand far exceeds existing pool of peer counselors and licensed professionals<br>Peer support benefits both parties – the provider and the client both grow and learn as a result of the peer coaching relationship</p>

    <div class="row text-center">
      {{-- 2012 --}}
      <div class="col-md-4 mb-4">
        <div style="background:rgba(255,255,255,.1);border-radius:12px;padding:40px;backdrop-filter:blur(10px);">
          <h2 style="color:#feb75f;font-family:'Nunito',sans-serif;font-weight:800;font-size:3rem;margin-bottom:.5rem;">20%</h2>
          <p style="color:#fff;font-size:1.2rem;">2012</p>
        </div>
      </div>

      {{-- 2019 --}}
      <div class="col-md-4 mb-4">
        <div style="background:rgba(255,255,255,.1);border-radius:12px;padding:40px;backdrop-filter:blur(10px);">
          <h2 style="color:#feb75f;font-family:'Nunito',sans-serif;font-weight:800;font-size:3rem;margin-bottom:.5rem;">25%</h2>
          <p style="color:#fff;font-size:1.2rem;">2019</p>
        </div>
      </div>

      {{-- 2023 --}}
      <div class="col-md-4 mb-4">
        <div style="background:rgba(255,255,255,.1);border-radius:12px;padding:40px;backdrop-filter:blur(10px);">
          <h2 style="color:#feb75f;font-family:'Nunito',sans-serif;font-weight:800;font-size:3rem;margin-bottom:.5rem;">32%</h2>
          <p style="color:#fff;font-size:1.2rem;">2023</p>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- ══════════════════════════════════════════════════════════════════════
     REQUEST MORE INFO (Contact Form)
══════════════════════════════════════════════════════════════════════ --}}
@include('partials.contact-form', ['title' => 'Request More Info', 'subtitle' => 'Complete your certification on-location or virtually.'])

@endsection
