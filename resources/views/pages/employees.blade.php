@extends('layouts.app')
@section('title', 'Employees – HereNOW Help')
@section('description', 'Employee Wellness Platform. Engage and empower employees to understand, track and improve their mental wellbeing.')

@section('content')
<section class="page-hero" style="background:linear-gradient(135deg,#4a8daa 0%,#87bcc6 50%,#3e97b5 100%),url('{{ asset('images/banner-1.jpg') }}') center/cover no-repeat fixed;min-height:55vh;display:flex;align-items:center;padding-top:90px;">
  <div class="container text-center">
    <h1 style="color:#fff;font-family:'Nunito',sans-serif;font-weight:800;font-size:2.8rem;">Employee Wellness Platform</h1>
    <p style="color:rgba(255,255,255,.9);font-size:1.15rem;max-width:640px;margin:1rem auto;">Engage and empower employees to understand, track and improve their mental wellbeing.</p>
    <p style="color:#ee9f36;font-family:'Nunito',sans-serif;font-weight:700;font-size:1.1rem;">86% Improve Happiness and Productivity</p>
    <a href="{{ route('home') }}#Contact" class="btn-send d-inline-block mt-3" style="text-decoration:none;">Schedule A Demo</a>
  </div>
</section>

<section style="background:#1e2d38;padding:80px 0;">
  <div class="container">
    <div class="row">
      @php $features = [
        ['icon'=>'fa-spa','title'=>'Stress & Anxiety Reduction','body'=>'Meditations to reduce stress and anxiety, improve focus, develop mindfulness and even improve sleep.'],
        ['icon'=>'fa-chart-line','title'=>'Track Workforce Health','body'=>'Assessments for stress, anxiety, depression, etc. Daily mood check-ins. View workforce trends. Satisfaction surveys.'],
        ['icon'=>'fa-comments','title'=>'Peer Support Community','body'=>'Message Boards to find support, connections, inspiration and to provide peer appreciation.'],
        ['icon'=>'fa-headset','title'=>'Connect with HR & Management','body'=>'Connect via Talk, Text & Video. Calendars. Reminders. Automated Reviews. Seamless HR integration.'],
        ['icon'=>'fa-trophy','title'=>'Rewards & Engagement','body'=>'Gamified rewards system that keeps employees engaged and motivated on their wellness journey.'],
        ['icon'=>'fa-shield-halved','title'=>'HIPAA Compliant','body'=>'No third-party data sharing. HIPAA, SOC-2, and ISO-27001 compliant to protect employee privacy.'],
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
    <h2 style="color:#3e97b5;font-family:'Nunito',sans-serif;font-weight:800;font-size:2rem;margin-bottom:1rem;">Improve Workplace Mental Health</h2>
    <p style="color:#444;max-width:680px;margin:0 auto 2rem;">86% of users report improvement in Happiness and Productivity. Give your team the tools they need to thrive.</p>
    <a href="{{ route('home') }}#Contact" class="btn-send d-inline-block" style="text-decoration:none;">Schedule A Demo</a>
  </div>
</section>
@endsection
