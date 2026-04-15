@extends('layouts.app')
@section('title', 'Mental Health News – HereNOW Help')
@section('description', 'Stay up to date with the latest in mental health research, trends, and best practices.')

@section('content')
<section class="page-hero" style="background:linear-gradient(135deg,#4a8daa 0%,#87bcc6 50%,#3e97b5 100%),url('{{ asset('images/banner-1.jpg') }}') center/cover no-repeat fixed;min-height:45vh;display:flex;align-items:center;padding-top:90px;padding-bottom:60px;">
  <div class="container text-center">
    <h1 style="color:#fff;font-family:'Nunito',sans-serif;font-weight:800;font-size:2.6rem;">Mental Health News</h1>
    <p style="color:rgba(255,255,255,.9);font-size:1.1rem;max-width:640px;margin:1rem auto;">Stay up to date with the latest in mental health research, trends, and best practices.</p>
  </div>
</section>

<section style="background:#fff;padding:80px 0;">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-9" style="color:#444;line-height:1.85;font-size:1rem;">
        <p>The HereNOW Help blog covers the latest developments in mental health treatment, peer support, workplace wellness, Veteran mental health, and student wellbeing.</p><p>Our team of mental health professionals and advocates curates content to help providers, organizations, and individuals stay informed about evidence-based practices and emerging trends.</p><p><a href="{{ route('home') }}#Contact" class="btn-send d-inline-block mt-3" style="text-decoration:none;">Contact Us</a></p>
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
