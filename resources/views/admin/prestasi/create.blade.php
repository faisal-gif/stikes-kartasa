@extends('layouts.admin')
@section('css')
<style>
    #lampiran {
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
        <form method="post" action="{{route('prestasi.store')}}" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div class="form-group">
                <label>Nama Prestasi*</label>
                <input type="text" class="form-control" name="nama" required="required">
            </div>
            <div class="form-group">
                <label>Keteranagan</label>
                <textarea rows="10" class="form-control" name="keterangan"></textarea>
            </div>
            <div class="form-group">
                <label>Lampiran</label>
                <input type="file" class="form-control" name="lampiran" accept="image/*" onchange="showPreview(event);">
            </div>
            <div class="form-group">
                <div class="preview">
                    <img id="lampiran">
                </div>
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
            var preview = document.getElementById("lampiran");
            preview.src = src;
            preview.style.display = "block";
        }
    }
</script>

@endsection