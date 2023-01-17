@extends('layouts.forum')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 border border-1 mt-5">
                <h3>Lorem ipsum dolor sit amet.</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Esse ad numquam illo ut fugit, sequi repellat eligendi fuga aut nobis laboriosam doloribus aspernatur ipsam magnam quaerat voluptas voluptatibus earum sapiente dignissimos rerum odit. Repellendus accusantium incidunt facere fugit quae harum iusto, temporibus praesentium non quibusdam sint nostrum commodi impedit? Impedit.</p>
                <hr>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
                    <button class="btn btn-secondary me-md-2" type="button">Update</button>
                    <button class="btn btn-danger" type="button">Delete</button>
                </div>
            </div>
        </div>
        <div class="row my-3">
            <div class="col-12">
                <div class="d-grid gap-2 col-3 mx-auto">
                    <button class="btn btn-outline-danger rounded-pill fs-4"><i class="fa fa-heart" aria-hidden="true"></i> 3</button>
                </div>
            </div>
        </div>
        <div class="row my-3">
            <div class="col-12">
                <ul class="list-group">
                    <li class="list-group-item list-group-item-action">A second item</li>
                    <li class="list-group-item list-group-item-action">A third item</li>
                    <li class="list-group-item list-group-item-action">A fourth item</li>
                    <li class="list-group-item list-group-item-action">And a fifth one</li>
                </ul>
            </div>
        </div>
        <hr>
        <div class="row my-3">
            <div class="col-12">
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="row my-3">
            <div class="col-12">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button class="btn btn-primary" type="button">Submit</button>
                </div>
            </div>
        </div>
    </div>
@endsection