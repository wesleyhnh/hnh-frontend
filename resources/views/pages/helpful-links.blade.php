@extends('layouts.app')
@section('title', $page->title)
@section('description', $page->meta_description)

@section('content')

@if($page->show_hero)
<section id="breadcrumbs-hero" style="background:linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)),url('{{ asset('images/bg-graph-2.jpg') }}') center/cover no-repeat fixed;min-height:50vh;display:flex;align-items:center;padding-top:20px;padding-bottom:40px;margin-top:60px;">
  <div class="container text-center">
    <h2 style="color:#fff;font-family:'Nunito',sans-serif;font-weight:600;font-size:2.4rem;margin-bottom:1rem;">{{ $page->hero_title }}</h2>
    <p style="color:rgba(255,255,255,.85);font-size:1.1rem;max-width:640px;margin:1rem auto;">{{ $page->hero_subtitle }}</p>
  </div>
</section>
@endif

@if($page->show_body && $page->body)
<section style="background:#fff;padding:60px 0 20px;">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-9" style="color:#444;line-height:1.85;font-size:1rem;">
        {!! $page->body !!}
      </div>
    </div>
  </div>
</section>
@endif

@if($links->isNotEmpty())
<section style="background:#fff;padding:40px 0 80px;">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-9">
        <ul style="list-style:none;padding:0;line-height:2.5;">
          @foreach($links as $link)
          <li>
            <a href="{{ $link->url }}" target="_blank" rel="noopener" style="color:#3e97b5;font-weight:600;">
              {{ $link->label }}
            </a>
            @if($link->description)
            <span style="color:#888;font-size:.9rem;"> — {{ $link->description }}</span>
            @endif
          </li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
</section>
@endif

@if($page->show_cta)
@include('partials.contact-form', ['title' => $page->cta_text ?? 'Schedule A Demo', 'subtitle' => $page->cta_subtext ?? 'Increase Intakes, Engagement, Reimbursement...and More!'])
@endif

@endsection
