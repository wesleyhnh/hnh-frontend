@extends('layouts.app')
@section('title', 'Our Vision – HereNOW Help')
@section('description', 'A world where mental health support is available to everyone, everywhere, at any time.')

@section('content')
<section class="page-hero" style="background:linear-gradient(135deg,#4a8daa 0%,#87bcc6 50%,#3e97b5 100%),url('{{ asset('images/banner-1.jpg') }}') center/cover no-repeat fixed;min-height:45vh;display:flex;align-items:center;padding-top:90px;padding-bottom:60px;">
  <div class="container text-center">
    <h1 style="color:#fff;font-family:'Nunito',sans-serif;font-weight:800;font-size:2.6rem;">Our Vision</h1>
    <p style="color:rgba(255,255,255,.9);font-size:1.1rem;max-width:640px;margin:1rem auto;">A world where mental health support is available to everyone, everywhere, at any time.</p>
  </div>
</section>

<section style="background:#fff;padding:80px 0;">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-9" style="color:#444;line-height:1.85;font-size:1rem;">
        <p>Our vision is simple: <strong>Help When and Where You Need It.</strong></p><p>We envision a world where the barriers to mental health care — cost, location, stigma, and availability — are eliminated through intelligent technology and compassionate communities.</p><p>HereNOW Help is building the infrastructure for that future: an AI-powered, fully customizable platform that adapts to every user&apos;s unique needs, available 24/7/365, meeting people exactly where they are.</p>
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
