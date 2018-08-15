<!-- Home Page Template -->

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')

    <div class="home-carousel">
      <div>your content</div>
      <div>your content</div>
      <div>your content</div>
    </div>

    @include('partials.content-page')
  @endwhile
@endsection
