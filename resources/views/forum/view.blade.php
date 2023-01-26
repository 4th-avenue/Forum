@extends('layouts.forum')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 border border-1 mt-5">
                <h3 class="bg-light border border-1 py-3 px-3 my-3">{{$post->title}}</h3>
                {!!$post->content!!}

                @auth    
                @if($post->user_id == auth()->user()->id)
                <hr class="my-3">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
                    <a href="{{url('/')}}/{{$post->id}}/edit" class="btn btn-outline-secondary me-md-2">Update</a>
                    <form method="POST" action="/{{$post->id}}/delete">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-outline-danger" type="submit">Delete</button>
                    </form>
                </div>
                @endif
                @endauth
            </div>
        </div>
        <div class="row my-3">
            <div class="col-12">
                <form method="POST" action="/heart">
                    @csrf
                    <input type="hidden" name="post_id" value="{{$post->id}}">
                    <div class="d-grid gap-2 col-3 mx-auto">
                        <button type="submit" class="btn btn-outline-danger rounded-pill fs-4"><i class="fa fa-heart"></i> {{App\models\Heart::where('post_id', $post->id)->count();}}</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row my-3">
            <div class="col-12">
                <ul class="list-group">
                    @php
                        $replies = App\Models\Reply::where('post_id', $post->id)->orderby('id', 'asc')->get();
                    @endphp
                    @if(count($replies)>0)
                    @foreach ($replies as $reply)    
                        <li class="list-group-item list-group-item-action">{{$reply->reply}}<br>
                            <small>{{$reply->created_at}}・by
                                @php
                                    $user = App\Models\User::find($reply->user_id);
                                @endphp
                                {{$user->name}}
                            </small>
                        </li>
                    @endforeach
                    @endif
                </ul>
            </div>
        </div>
        @auth    
        <hr>
        <form method="POST" action="/reply/store">
            @csrf
            <div class="row my-3">
                <div class="col-12">
                    <input type="text" class="form-control" name="reply">
                    <input type="hidden" name="post_id" value="{{$post->id}}">
                </div>
            </div>
            <div class="row my-3">
                <div class="col-12">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button class="btn btn-outline-primary" type="submit">Submit</button>
                    </div>
                </div>
            </div>
        </form>
        @endauth
    </div>
@endsection