@extends('layouts.forum')

@section('content')
    <div class="container">
        @auth    
        <div class="row my-3">
            <div class="col-12">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="{{url('/')}}/create" class="btn btn-success">New Post</a>
                </div>
            </div>
        </div>
        <hr>
        @endauth

        @php
            $categories = App\Models\Category::orderby('title', 'asc')->get();
        @endphp
        @if(count($categories)>0)
            @foreach ($categories as $category)
                @php
                    $posts = App\Models\Post::where('category_id', $category->id)->orderby('id', 'desc')->limit(3)->get();
                @endphp
                @if(count($posts)>0)
                    <div class="row mt-3">
                        <div class="col-12">
                            <h4>{{$category->title}}</h4>
                            <ul class="list-group">
                                @foreach ($posts as $post)
                                <li class="list-group-item list-group-item-action">
                                    <a href="{{url('/')}}/{{$post->id}}/view" style="text-decoration: none">{{$post->title}}</a>
                                    <span class="badge rounded-pill bg-info"><i class="fa fa-comment"></i>
                                    {{App\Models\Reply::where('post_id', $post->id)->count()}}
                                    </span>
                                    <span class="badge rounded-pill bg-danger"><i class="fa fa-heart"></i> {{App\Models\Heart::where('post_id', $post->id)->count()}}</span>
                                    <br>
                                    <small>{{$post->created_at}}・by
                                    @php
                                        $user = App\Models\User::find($post->user_id);
                                    @endphp
                                    {{$user->name}}
                                    </small>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="col-12 my-3">
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <a href="{{url('/')}}/{{$category->id}}/category" class="btn btn-dark">All Posts of {{$category->title}} Category</a>
                            </div>
                        </div>
                    </div>
                    <hr>
                @endif
            @endforeach
        @endif
    </div>
@endsection