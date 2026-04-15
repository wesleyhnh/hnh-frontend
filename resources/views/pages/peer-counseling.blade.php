@extends('layouts.app')
@section('title', 'Peer Counseling – HereNOW Help')
@section('description', 'Scientifically-proven peer support for mental health and addiction recovery.')

@section('content')
<section class="page-hero" style="background:linear-gradient(135deg,#4a8daa 0%,#87bcc6 50%,#3e97b5 100%),url('{{ asset('images/banner-1.jpg') }}') center/cover no-repeat fixed;min-height:45vh;display:flex;align-items:center;padding-top:90px;padding-bottom:60px;">
  <div class="container text-center">
    <h1 style="color:#fff;font-family:'Nunito',sans-serif;font-weight:800;font-size:2.6rem;">Peer Counseling</h1>
    <p style="color:rgba(255,255,255,.9);font-size:1.1rem;max-width:640px;margin:1rem auto;">Scientifically-proven peer support for mental health and addiction recovery.</p>
  </div>
</section>

<section style="background:#fff;padding:80px 0;">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-9" style="color:#444;line-height:1.85;font-size:1rem;">
        <p>Peer counseling is a scientifically-proven approach where individuals who have lived through similar experiences provide support to those who are struggling. Models like AA and NA have demonstrated decades of success.</p><p>HereNOW Help integrates peer counseling into every aspect of our platform — connecting users with trained peer coaches who can provide empathetic, experienced support around the clock.</p><p>Learn more about our <a href="{{ route('peernow') }}" style="color:#3e97b5;font-weight:600;">PeerNOW Academy certification program</a>.</p>
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
