@extends('layouts.forum')

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-12">
                <h4>Music</h4>
                <ul class="list-group">
                    <li class="list-group-item list-group-item-action">
                        <a href="{{url('/')}}/1/view">Three Days of the Condor</a>
                        <span class="badge rounded-pill bg-info"><i class="fa fa-comment" aria-hidden="true"></i> 3</span>
                        <span class="badge rounded-pill bg-danger"><i class="fa fa-heart" aria-hidden="true"></i> 3</span>
                        <br>
                        <small>2023-01-16 | by mystee</small>
                    </li>
                    <li class="list-group-item list-group-item-action">
                        Three Days of the Condor
                        <span class="badge rounded-pill bg-info"><i class="fa fa-comment" aria-hidden="true"></i> 3</span>
                        <span class="badge rounded-pill bg-danger"><i class="fa fa-heart" aria-hidden="true"></i> 3</span>
                        <br>
                        <small>2023-01-16 | by mystee</small>
                    </li>
                    <li class="list-group-item list-group-item-action">
                        Three Days of the Condor
                        <span class="badge rounded-pill bg-info"><i class="fa fa-comment" aria-hidden="true"></i> 3</span>
                        <span class="badge rounded-pill bg-danger"><i class="fa fa-heart" aria-hidden="true"></i> 3</span>
                        <br>
                        <small>2023-01-16 | by mystee</small>
                    </li>
                </ul>
            </div>
            <div class="col-12 my-3">
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button type="button" class="btn btn-dark">All Posts of Movie Category</button>
                </div>
            </div>
        </div>
        <hr>
        <div class="row mt-5">
            <div class="col-12">
                <h4>Movie</h4>
                <ul class="list-group">
                    <li class="list-group-item list-group-item-action">
                        Three Days of the Condor
                        <span class="badge rounded-pill bg-info"><i class="fa fa-comment" aria-hidden="true"></i> 3</span>
                        <span class="badge rounded-pill bg-danger"><i class="fa fa-heart" aria-hidden="true"></i> 3</span>
                        <br>
                        <small>2023-01-16 | by mystee</small>
                    </li>
                    <li class="list-group-item list-group-item-action">
                        Three Days of the Condor
                        <span class="badge rounded-pill bg-info"><i class="fa fa-comment" aria-hidden="true"></i> 3</span>
                        <span class="badge rounded-pill bg-danger"><i class="fa fa-heart" aria-hidden="true"></i> 3</span>
                        <br>
                        <small>2023-01-16 | by mystee</small>
                    </li>
                    <li class="list-group-item list-group-item-action">
                        Three Days of the Condor
                        <span class="badge rounded-pill bg-info"><i class="fa fa-comment" aria-hidden="true"></i> 3</span>
                        <span class="badge rounded-pill bg-danger"><i class="fa fa-heart" aria-hidden="true"></i> 3</span>
                        <br>
                        <small>2023-01-16 | by mystee</small>
                    </li>
                </ul>
            </div>
            <div class="col-12 my-3">
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button type="button" class="btn btn-dark">All Posts of Movie Category</button>
                </div>
            </div>
        </div>
    </div>
@endsection