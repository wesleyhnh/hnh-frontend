@extends('layouts.app')
@section('title', 'Veterans – HereNOW Help')
@section('description', 'Veteran Mental Wellness Platform. Engage and empower Veterans to understand, track and improve their mental well-being.')

@section('content')
<section class="page-hero" style="background:linear-gradient(135deg,#4a8daa 0%,#87bcc6 50%,#3e97b5 100%),url('{{ asset('images/banner-1.jpg') }}') center/cover no-repeat fixed;min-height:55vh;display:flex;align-items:center;padding-top:90px;">
  <div class="container text-center">
    <h1 style="color:#fff;font-family:'Nunito',sans-serif;font-weight:800;font-size:2.8rem;">Veteran Mental Wellness Platform</h1>
    <p style="color:rgba(255,255,255,.9);font-size:1.15rem;max-width:640px;margin:1rem auto;">Engage and empower Veterans to understand, track and improve their mental well-being.</p>
    <p style="color:#ee9f36;font-family:'Nunito',sans-serif;font-weight:700;font-size:1.1rem;">86% Improve Happiness and Well-being</p>
    <a href="{{ route('home') }}#Contact" class="btn-send d-inline-block mt-3" style="text-decoration:none;">Schedule A Demo</a>
  </div>
</section>

<section style="background:#1e2d38;padding:80px 0;">
  <div class="container">
    <div class="row">
      @php $features = [
        ['icon'=>'fa-heart','title'=>'Daily Wellness Check-Ins','body'=>'Tools to empower Veterans to manage their own mental well-being with daily meditations and journaling.'],
        ['icon'=>'fa-users','title'=>'Peer Community Support','body'=>'Tools to help Veterans support each other through peer coaching, chat rooms, and message boards.'],
        ['icon'=>'fa-user-md','title'=>'VA Staff & Clinician Tools','body'=>'Tools to help VA staff and clinicians engage and support Veterans in crisis. EMR integration included.'],
        ['icon'=>'fa-map-pin','title'=>'High Risk Area Alerts','body'=>'Clients set high risk areas to avoid (using geolocation). Red flag alerts sent to family & friends.'],
        ['icon'=>'fa-clipboard-check','title'=>'Customized Assessments','body'=>'Customized surveys to assess transition from military to civilian life and self-manage PTSD and anxiety.'],
        ['icon'=>'fa-moon','title'=>'Sleep & Wellness','body'=>'Tools to improve sleep, reduce anxiety, and build daily routines for long-term mental wellbeing.'],
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

<section style="background:#f8f9fb;padding:80px 0;">
  <div class="container text-center">
    <h2 style="color:#3e97b5;font-family:'Nunito',sans-serif;font-weight:800;font-size:2rem;margin-bottom:1rem;">Connect with care teams, VAMCs &amp; VSOs</h2>
    <p style="color:#444;max-width:680px;margin:0 auto 2rem;">HereNOW Help connects Veterans with their care teams, VA Medical Centers, and Veteran Service Organizations through a single holistic platform built specifically for Veteran mental health.</p>
    <a href="{{ route('home') }}#Contact" class="btn-send d-inline-block" style="text-decoration:none;">Schedule A Demo</a>
  </div>
</section>
@endsection
