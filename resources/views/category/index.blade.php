@extends('layouts.forum')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <label>Category Title</label>
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <ul class="list-group">
                    <li class="list-group-item">
                        <a href="{{url('/')}}/category/1/view">Music</a>
                    </li>
                    <li class="list-group-item">
                        <a href="#">Movie</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection