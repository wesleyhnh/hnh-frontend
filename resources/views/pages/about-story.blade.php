@extends('layouts.app')
@section('title', 'Our Story – HereNOW Help')
@section('description', 'HereNOW Help was founded with one mission: to make mental health support available to anyone, anywhere, at any time.')

@section('content')
<section class="page-hero" style="background:linear-gradient(135deg,#4a8daa 0%,#87bcc6 50%,#3e97b5 100%),url('{{ asset('images/banner-1.jpg') }}') center/cover no-repeat fixed;min-height:45vh;display:flex;align-items:center;padding-top:90px;padding-bottom:60px;">
  <div class="container text-center">
    <h1 style="color:#fff;font-family:'Nunito',sans-serif;font-weight:800;font-size:2.6rem;">Our Story</h1>
    <p style="color:rgba(255,255,255,.9);font-size:1.1rem;max-width:640px;margin:1rem auto;">HereNOW Help was founded with one mission: to make mental health support available to anyone, anywhere, at any time.</p>
  </div>
</section>

<section style="background:#fff;padding:80px 0;">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-9" style="color:#444;line-height:1.85;font-size:1rem;">
        <p>HereNOW Help was built by a passionate team of mental health professionals, technology experts, and advocates who believe that everyone deserves access to quality mental health support — regardless of where they live or what they can afford.</p><p>Our platform brings together the best of technology and human connection to create a holistic, personalized mental health experience for healthcare providers, Veterans, students, employers, and government agencies.</p><p>We believe that with the right tools and community, anyone can manage and improve their mental wellbeing.</p>
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
