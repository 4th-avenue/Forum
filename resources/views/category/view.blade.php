@extends('layouts.forum')

@section('content')
    <div class="container">
        <div class="row my-3">
            <div class="col-12">
                <input type="text" class="form-control" value="{{$category->title}}">
            </div>
        </div>
        <hr>
        <div class="row my-3">
            <div class="col-12">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
                    <button class="btn btn-secondary me-md-2" type="button">Update</button>
                    <form method="POST" action="/category/{{$category->id}}/delete">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection