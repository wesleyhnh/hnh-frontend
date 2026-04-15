@extends('layouts.app')
@section('title', 'PeerNOW Academy – HereNOW Help')
@section('description', 'Become a Certified Peer Coach. Peer counseling is a scientifically-proven approach to mental health support.')

@section('content')
<section class="page-hero" style="background:linear-gradient(135deg,#4a8daa 0%,#87bcc6 50%,#3e97b5 100%),url('{{ asset('images/banner-1.jpg') }}') center/cover no-repeat fixed;min-height:55vh;display:flex;align-items:center;padding-top:90px;">
  <div class="container text-center">
    <h1 style="color:#fff;font-family:'Nunito',sans-serif;font-weight:800;font-size:2.8rem;">Become a Certified Peer Coach</h1>
    <p style="color:rgba(255,255,255,.9);font-size:1.15rem;max-width:680px;margin:1rem auto;">Peer counseling is a scientifically-proven approach to mental health support. Turn your life experiences into a career helping others.</p>
    <a href="{{ route('home') }}#Contact" class="btn-send d-inline-block mt-3" style="text-decoration:none;">Get Started</a>
  </div>
</section>

<section style="background:#fff;padding:80px 0;">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-7">
        <h2 style="color:#3e97b5;font-family:'Nunito',sans-serif;font-weight:800;font-size:2rem;margin-bottom:1rem;">About the Program</h2>
        <p style="color:#444;line-height:1.75;">Peer counseling is a scientifically-proven approach to mental health support for those in need. Models such as Alcoholics Anonymous (AA) and Narcotics Anonymous (NA) have decades of proven success. These models demonstrate that individuals who have experienced adverse life events can help those who are struggling with similar issues — by lending an empathetic ear, sharing their life experiences, and creating a space where hope and strength can grow.</p>
      </div>
      <div class="col-md-5">
        <div style="background:#f8f9fb;border-radius:12px;padding:30px;">
          <h4 style="color:#347595;font-family:'Nunito',sans-serif;font-weight:700;margin-bottom:1rem;">Program Highlights</h4>
          <ul style="color:#444;line-height:2;padding-left:1.2rem;">
            <li>Developed by mental health &amp; education specialists</li>
            <li>Online, interactive, self-paced 8-hour program</li>
            <li>Turns life experiences into peer coaching practices</li>
            <li>Aligns with state certification requirements</li>
            <li>Customizable for each organization</li>
            <li>Creates well-paying jobs for peer coaches</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<section style="background:#1e2d38;padding:80px 0;">
  <div class="container">
    <h3 style="color:#fff;font-family:'Nunito',sans-serif;text-align:center;margin-bottom:2.5rem;font-size:1.7rem;">PeerNOW Academy + HereNOW Suite of Apps</h3>
    <div class="row">
      @php $features = [
        ['icon'=>'fa-certificate','title'=>'State-Aligned Certification','body'=>'Certification aligns with state requirements for Peer Coach, Peer Counselor, and Peer Support Specialist titles.'],
        ['icon'=>'fa-laptop','title'=>'Online & Self-Paced','body'=>'Complete the 8-hour interactive program at your own pace, from anywhere, on any device.'],
        ['icon'=>'fa-briefcase','title'=>'Create Well-Paying Jobs','body'=>'The program creates sustainable, well-paying careers for peer coaches in their communities.'],
        ['icon'=>'fa-building','title'=>'Customizable for Organizations','body'=>'Tailor the program content to fit your organization\'s specific population, goals, and branding.'],
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
@endsection
