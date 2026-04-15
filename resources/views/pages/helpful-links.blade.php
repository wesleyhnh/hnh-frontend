@extends('layouts.app')
@section('title', 'Helpful Links – HereNOW Help')
@section('description', 'Resources and links to support your mental health journey.')

@section('content')
<section class="page-hero" style="background:linear-gradient(135deg,#4a8daa 0%,#87bcc6 50%,#3e97b5 100%),url('{{ asset('images/banner-1.jpg') }}') center/cover no-repeat fixed;min-height:45vh;display:flex;align-items:center;padding-top:90px;padding-bottom:60px;">
  <div class="container text-center">
    <h1 style="color:#fff;font-family:'Nunito',sans-serif;font-weight:800;font-size:2.6rem;">Helpful Links</h1>
    <p style="color:rgba(255,255,255,.9);font-size:1.1rem;max-width:640px;margin:1rem auto;">Resources and links to support your mental health journey.</p>
  </div>
</section>

<section style="background:#fff;padding:80px 0;">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-9" style="color:#444;line-height:1.85;font-size:1rem;">
        <ul style="list-style:none;padding:0;line-height:2.5;"><li><a href="https://www.samhsa.gov/" target="_blank" rel="noopener" style="color:#3e97b5;font-weight:600;">SAMHSA – Substance Abuse and Mental Health Services Administration</a></li><li><a href="https://www.nami.org/" target="_blank" rel="noopener" style="color:#3e97b5;font-weight:600;">NAMI – National Alliance on Mental Illness</a></li><li><a href="https://www.mentalhealth.gov/" target="_blank" rel="noopener" style="color:#3e97b5;font-weight:600;">MentalHealth.gov</a></li><li><a href="https://www.va.gov/health-care/health-needs-conditions/mental-health/" target="_blank" rel="noopener" style="color:#3e97b5;font-weight:600;">VA Mental Health Services</a></li><li><a href="https://988lifeline.org/" target="_blank" rel="noopener" style="color:#3e97b5;font-weight:600;">988 Suicide &amp; Crisis Lifeline</a></li><li><a href="https://www.cdc.gov/mentalhealth/" target="_blank" rel="noopener" style="color:#3e97b5;font-weight:600;">CDC Mental Health</a></li></ul>
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
