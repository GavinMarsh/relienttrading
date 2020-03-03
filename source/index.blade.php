@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="{{ $page->siteName }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="{{ $page->blogDescription }}" />
@endpush

@section('body')

<section class="flex-col justify-center items-center text-center mb-20">

    <img src="/assets/img/rez.jpg"
        alt="Dan Ramirez"
        class="inline-flex rounded-full h-32 w-32 bg-contain mx-auto">

  

</section>

    @include('_components.newsletter-signup')

   

