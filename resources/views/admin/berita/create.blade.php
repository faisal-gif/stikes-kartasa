@extends('layouts.admin')
@section('css')
<style>
    #cover {
        width: 750px;
        height: 500px;
        object-fit: cover;
    }
</style>
@endsection
@section('content')
<div class="col-12">
    <div class="white-box">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <h3 class="box-title">Form Berita</h3>
        <form method="post" action="{{route('news.store')}}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <div class="preview">
                    <img id="cover" src="{{asset('template-admin/plugins/images/img-sample/cover-berita.jpg')}}" >
                </div>
            </div>
            <div class="form-group">
                <label>Cover Berita</label>
                <input type="file" class="form-control" name="cover" required="required" accept="image/*" onchange="showPreview(event);">
            </div>
            <div class="form-group">
                <label>Judul Berita</label>
                <input type="text" class="form-control" name="judul" required="required">
            </div>
            <div class="form-group">
                <label>Isi Berita</label>
                <textarea id="summernote" rows="10" name="isi" required="required"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</div>
@endsection
@section('script')
<script>
    function showPreview(event) {
        if (event.target.files.length > 0) {
            var src = URL.createObjectURL(event.target.files[0]);
            var preview = document.getElementById("cover");
            preview.src = src;
            preview.style.display = "block";
        }
    }
</script>
<script>
    $(document).ready(function() {
        $('#summernote').summernote({
            tabsize: 2,
            height: 200,
            toolbar: [
                // [groupName, [list of button]]
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']]
            ]
        });
    });
</script>
<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

@endsection