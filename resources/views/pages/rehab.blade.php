@extends('layouts.app')
@section('title', 'Healthcare – HereNOW Help')
@section('description', 'The most holistic & personalized platform for total mental health treatment. Medical Centers. Rehab Centers. VAMCs.')

@section('content')
<section class="page-hero" style="background:linear-gradient(135deg,#4a8daa 0%,#87bcc6 50%,#3e97b5 100%),url('{{ asset('images/banner-1.jpg') }}') center/cover no-repeat fixed;min-height:55vh;display:flex;align-items:center;padding-top:90px;">
  <div class="container text-center">
    <h1 style="color:#fff;font-family:'Nunito',sans-serif;font-weight:800;font-size:2.8rem;">The Most Holistic &amp; Personalized Platform for Total Mental Health Treatment</h1>
    <p style="color:rgba(255,255,255,.9);font-size:1.15rem;max-width:680px;margin:1rem auto;"><strong>Medical Centers. Rehab Centers. VAMCs.</strong></p>
    <a href="{{ route('home') }}#Contact" class="btn-send d-inline-block mt-3" style="text-decoration:none;">Schedule A Demo</a>
  </div>
</section>

<section style="background:#1e2d38;padding:80px 0;">
  <div class="container">
    <div class="row">
      @php $features = [
        ['icon'=>'fa-comments','title'=>'Community & Communication','body'=>'Build community with message boards. Connect via talk, text & video. Send surveys. Announce events...and more.'],
        ['icon'=>'fa-clipboard-list','title'=>'Treatment Plans & Outcomes','body'=>'Do assessments, create treatment plans, set goals and track progress. Explore & export all user data.'],
        ['icon'=>'fa-heart','title'=>'Family & Friends Engagement','body'=>'Engage family and friends with tools to connect, track progress, share stories and invite others in need.'],
        ['icon'=>'fa-calendar','title'=>'Scheduling & Reminders','body'=>'Talk, Text & Video. Calendars. Reminders. EMR Integration. Satisfaction Reviews.'],
        ['icon'=>'fa-brain','title'=>'Clinical Tools','body'=>'Assessments. Treatment Plans. Guided Meditations. Surveys. Track Progress. Smart Alerts.'],
        ['icon'=>'fa-map-pin','title'=>'Safety & Risk Management','body'=>'Set Risk areas. Share progress. Message Boards. Self-Assessments. Guided Meditations. Library.'],
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
    <h2 style="color:#3e97b5;font-family:'Nunito',sans-serif;font-weight:800;font-size:2rem;margin-bottom:1rem;">Stay Engaged After Discharge</h2>
    <p style="color:#444;max-width:680px;margin:0 auto 2rem;">Tools for intake, assessments, treatment plans and outcome measurements. Stay engaged after discharge, build community, reduce claims and increase referrals.</p>
    <a href="{{ route('home') }}#Contact" class="btn-send d-inline-block" style="text-decoration:none;">Schedule A Demo</a>
  </div>
</section>
@endsection
