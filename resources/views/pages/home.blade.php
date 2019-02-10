@extends('layouts.app')

@section('content')
    
    
<!-- Jumbotron -->
<div class="jumbotron text-center">
        <!-- Title -->
        <h2 class="card-title h4 pb-2"><strong>JUST SHARE IT</strong></h2>
        <!-- Card image -->
        <div class="view overlay mb-4">
          <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(70).jpg" class="img-fluid" alt="">
          <a href="#">
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>
      
        <h3 class="indigo-text h5 mb-2">A Place To Share Everything</h3>
        <p class="card-text">Start Sharing your thoughts, feelings and memes to the World</p>      
      </div>
      <!-- Jumbotron -->
    @if (count($posts)>0)
        @foreach ($posts as $post)
                
                <div class="card p-3 mb-2 mt-2">  {{--padding by 3 and margin-buttom by 2--}}
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <img style="width:100%" src="/storage/cover_image/{{$post->cover_image}}" alt="post image">
                        </div>
                        <div class="col-md-8 col-sm-8">
                            <h3><a href="{{route('posts.show', $post->id)}}">{{$post->title}}</a></h3>
                            <p>{!!$post->body!!} </p>
                            <small>posted on {{$post->created_at}} by {{$post->user->name}}</small>
                        </div>
                    </div>
                </div>
        @endforeach
        {{$posts->links()}}
    @else
        <h3>No Post Found</h3>
    @endif
@endsection