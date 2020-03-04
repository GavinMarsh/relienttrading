@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="Contact {{ $page->siteName }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="Get in touch with {{ $page->siteName }}" />
@endpush

@section('body')

<section>
    <h1>Want to Work Together?</h1>
    <form name="contact" netlify>
        <p>
            <label>Name <input type="text" name="name" /></label>
        </p>
        <p>
            <label>Email <input type="email" name="email" /></label>
        </p>
        <p>
            <button type="submit">Send</button>
        </p>
    </form>

    <p class="text-xl">How can I help you? I’d love to start up a conversation
    to get to know each other better.
    </p>
    <p class="text-3xl">
      <a href="mailto:gm@gavinmarsh.io">
        &#8594; Shoot me an email.
      </a>
    </p>
  </section>

@stop
