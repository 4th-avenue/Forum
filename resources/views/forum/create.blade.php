@extends('layouts.forum')

@section('inside_head_tag')
<script src="https://cdn.ckeditor.com/ckeditor5/35.4.0/classic/ckeditor.js"></script>
@endsection

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-12">
                <label>Title</label>
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="row my-3">
            <div class="col-12">
                <label>Category</label>
                <select class="form-select">
                    <option value="music">music</option>
                    <option value="movie">movie</option>
                </select>
            </div>
        </div>
        <div class="row my-3">
            <div class="col-12">
                <div id="editor"></div>
            </div>
        </div>
        <div class="row my-3">
            <div class="col-12">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3">
                    <button class="btn btn-success" type="button">Submit</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('before_body_end_tag')
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
@endsection