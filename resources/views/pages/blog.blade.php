
@extends('layouts.posts')
@section('content')
        
{{--  <!--Card-->
<div class="card">

    <!--Card image-->
    <div class="view overlay">
        <img src="pages/img/lake2.jpg" class="img-fluid" alt="">
       
        <a href="#">
            <div class="mask rgba-white-slight"></div>
        </a>
    </div>  --}}
{{--  
    <!--Jumbotron-->
    <div class="row mb-5">
        <div class="col-md-12">
            <div class="card mdb-color lighten-2">
                <div class="text-white text-center  py-5 px-4">
                    <div class="py-5">
    
                        <!--Content-->
                            <h6 class="orange-text font-bold"><i class="fa fa-camera-retro"></i> Travel Blog</h6>
                            <h2 class="card-title pt-3 mb-5 font-bold">Jumbotron with image overlay</h2>
                            <p class="px-5 pb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat
                                fugiat, laboriosam, voluptatem, optio vero odio nam sit officia
                                accusamus minus error nisi architecto nulla ipsum dignissimos.
                                Odit sed qui, dolorum!</p>
                            
                        <!--Content-->
    
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Jumbotron-->  --}}

 
    {{--  <!-- Main Content -->
    <div class="container mt-4">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          @foreach($posts as $post)
          <div class="post-preview">
            <a style="color:orange" href="{{route('singlePost', $post->id)}}">
              <h2 class="#">
                {{$post->title}}
              </h2>
            </a>
            <p class="post-meta">Posted by
            <a  style="color:orange" href="#">{{$post->user->name}}</a>
              on {{date_format($post->created_at,'F d, Y')}}
              <i class="fa fa-comment" aria-hidden="true"></i>
              {{$post->comments->count()}}
            </p>
            
          </div>
          <hr>
          @endforeach
          {{$posts->links()}}
          {{--  <!-- Pager -->
          <div class="clearfix">
            <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
          </div>  --}}
        {{--  </div>
      </div>
    {{--  </div>  --}}  

    <main role="main" class="container mt-3">
      <div class="row">
        <div class="col-md-8 blog-main">
          @foreach($posts as $post)
          <div class="blog-post">
                <h2  style="color:orange" class="blog-post-title">{{$post->title}}</h2>
                <p class="blog-post-meta">on {{date_format($post->created_at,'F d, Y')}} by <a href="#">{{$post->user->name}}</a></p>
                <p>{{$post->excerpt}}</p>
                
                <a href="{{route('singlePost', $post->id)}}">Read more</a>
              </div><!-- /.blog-post -->
              @endforeach
              {{$posts->links()}}
            </div><!-- /.row -->

          </main><!-- /.container -->
@endsection