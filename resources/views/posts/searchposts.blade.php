@extends('layouts.app')
<style type="text/css">
     .avatar{
        border-radius:50%;
        max-width:100px;
        border: 4px solid;
     }

</style>
@section('content')
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        @if(count($errors) > 0)
            @foreach($errors->all() as $error)
                <div class="alert alert-danger">{{ $error }}</div>
            @endforeach

            @endif

            @if(session('response'))

            <div class="alert alert-sucess" style="background-color:green; color:black;">{{ session('response')}}</div>

            @endif
            <div class="card">
                <div class="card-header d-flex ">
                    <div class="col-md-4">
                      Feeds
                      <img src="{{'images/feed.png'}}" alt=""style="height:2rem; width:2rem;">
                    </div>

                    <div class="col lg-8 ">
                      <div class="input-group ml-auto">
                        <form method="POST" action="{{ url('/search')}}">
                          @csrf
                          <input type="text" name="search" value="" class="form-control" placeholder="Search for">
                        <span class="input-group-btn">   <button type="submit" name="button" class="btn btn-primary"><span><i class="fa fa-search"></i> </span> </button></span>
                        </form>
                      </div>
                    </div>
                  </div>


                <div class="card-body">


        <!-- Profile  image -->
                    <div class="card-body d-flex" >
                     <div class="col-md-4">
                            @if(!empty($profile))
                                <img src="{{ $profile->profile_pic}}" class="avatar">
                            @else
                                <img src="{{ url('images/images.png') }}" class="avatar">
                            @endif

                            @if(!empty($profile))
                            <p class="lead">{{ $profile->name }}</p>
                            @else
                                <p></p>
                            @endif

                            @if(!empty($profile))
                                <p >{{ $profile->designation }}</p>
                            @else
                                <p></p>
                            @endif

                            </div>
                         <div class="card col-md-8" style="border:transparent">
                            @if(count($posts) > 0)

                            @foreach($posts->all() as $post)
                                <h4 class="card-title card-text-center">{{ $post->post_title}}</h4>
                                <img src="{{ $post->post_image}}" alt="" style="height:14rem;">
                                <p>{{ substr($post->post_body,0,150) }}</p>

                                <ul class="nav nav-pils " style="float:right;">
                                    <li role="presentation">
                                       <a href='{{url("/view/{$post->id}")}}' class="p-2">
                                            <span class="fas fa-eye">ReadMore</span>
                                       </a>
                                    </li>
                                    @if(Auth::id() ==1)
                                    <li role="presentation">
                                    <a href='{{url("/edit/{$post->id}")}}' class="p-2">
                                            <span class="fa fa-pen-square">Edit</span>
                                       </a>
                                    </li>

                                    <li role="presentation">
                                    <a href='{{url("/delete/{$post->id}")}}' class="p-2">
                                            <span class="fa fa-trash">Delete </span>
                                       </a>
                                    </li>
                                </ul>
                                </ul>
                                @endif
                                <cite >Posted on: {{date('M,j,Y H:i', strtotime($post->updated_at))}}</cite>
                                <hr>

                            @endforeach

                            @else
                                <p>You dont have any Post</p>
                            @endif


                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
