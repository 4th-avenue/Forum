@extends('layouts.forum')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <label>Category Title</label>
                <form method="POST" action="/category/store">
                    @csrf
                    <input type="text" class="form-control" name="title">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3">
                        <button class="btn btn-primary" type="submit">Create</button>
                    </div>
                </form>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-12">
                <ul class="list-group">
                    @foreach ($categories as $category)
                    <li class="list-group-item">
                        <a href="{{url('/')}}/category/{{$category->id}}/view">
                            {{$category->title}}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection