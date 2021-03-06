@extends('layouts.app')
@section('content')
<!-- Page Header -->
<header class="masthead" style="background-image: url('/img/post-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="post-heading">
                    <h1>{{$article->title}}</h1>
                    <span class="meta">Posted by
                on {{$article->date->format('d M Y')}}</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Post Content -->
<article>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                {!! $article->content !!}
            </div>
        </div>
    </div>
</article>

<hr>
@endsection