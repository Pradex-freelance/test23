@extends('layouts.app')
@section('content')
<!-- Page Header -->
<header class="masthead" style="background-image: url('img/home-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <h1>Clean Blog</h1>
                    <span class="subheading">A Blog Theme by Start Bootstrap</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            @foreach($articles as $article)
                <div class="post-preview">
                    <a href="/news/{{$article->id}}">
                        <h2 class="post-title">
                            {{$article->title}}
                        </h2>
                    </a>
                    <p class="post-meta">Posted
                        on {{$article->date->format('d M Y')}}</p>
                </div>
                <hr>
            @endforeach
             <!-- Pager -->
            <div class="clearfix">
                {{ $articles->links() }}
            </div>
        </div>
    </div>
</div>

<hr>

@endsection