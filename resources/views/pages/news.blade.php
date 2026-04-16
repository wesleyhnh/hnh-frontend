@extends('layouts.app')
@section('title', $page->title)
@section('description', $page->meta_description)

@section('content')

@if($page->show_hero)
<section class="page-hero" style="background:linear-gradient(135deg,#4a8daa 0%,#87bcc6 50%,#3e97b5 100%),url('{{ asset('images/banner-1.jpg') }}') center/cover no-repeat fixed;min-height:45vh;display:flex;align-items:center;padding-top:90px;padding-bottom:60px;">
  <div class="container text-center">
    <h1 style="color:#fff;font-family:'Nunito',sans-serif;font-weight:800;font-size:2.6rem;">{{ $page->hero_title }}</h1>
    <p style="color:rgba(255,255,255,.9);font-size:1.1rem;max-width:640px;margin:1rem auto;">{{ $page->hero_subtitle }}</p>
  </div>
</section>
@endif

@if($page->show_body)
<section style="background:#fff;padding:80px 0;">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-9" style="color:#444;line-height:1.85;font-size:1rem;">
        {!! $page->body !!}
      </div>
    </div>
  </div>
</section>
@endif

@if($page->show_cta)
<section style="background:#f8f9fb;padding:60px 0;">
  <div class="container text-center">
    @if($page->cta_subtext)
    <h3 style="color:#3e97b5;font-family:'Nunito',sans-serif;font-weight:700;margin-bottom:1rem;">{{ $page->cta_subtext }}</h3>
    @endif
    @if($page->cta_description)
    <p style="color:#666;font-size:.95rem;max-width:600px;margin:0 auto 1.5rem;">{{ $page->cta_description }}</p>
    @endif
    @if($page->cta_text && $page->cta_url)
    <a href="{{ $page->cta_url }}" class="btn-send d-inline-block" style="text-decoration:none;">{{ $page->cta_text }}</a>
    @endif
  </div>
</section>
@endif

@endsection
