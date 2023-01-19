@extends('layouts.forum')

@section('inside_head_tag')
<script src="https://cdn.ckeditor.com/ckeditor5/35.4.0/classic/ckeditor.js"></script>
@endsection

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-12">
                <label>Title</label>
                <input type="text" class="form-control" id="title">
            </div>
        </div>
        <div class="row my-3">
            <div class="col-12">
                <label>Category</label>
                <select class="form-select" id="category_id">
                    @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->title}}</option>
                    @endforeach
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
                    <button class="btn btn-success" type="button" id="submit">Submit</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('before_body_end_tag')
<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

<script>
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

    $( document ).ready(function() {
        $('#submit').click(function() {
            var title = $('#title').val();
            var category_id = $('#category_id').val();
            var content = $('.ck-content').html();
            
            $.ajax({
                type: "POST",
                url: "/store",
                data: {
                    _token: CSRF_TOKEN,
                    title: title,
                    category_id: category_id,
                    content: content,
                },
                dataType: 'JSON',
                success: function success(data) {
                    console.log(data.result);
                    window.location.href = '/';
                },
                error: function (response) {
                    console.log(response);
                }
            });
        });
    });
</script>
@endsection