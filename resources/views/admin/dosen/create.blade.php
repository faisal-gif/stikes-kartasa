@extends('layouts.admin')
@section('css')
<style>
    #foto {
        width: 260px;
        height: 265px;
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
        <h3 class="box-title">Form Dosen</h3>
        <form method="post" action="{{route('dosen.store')}}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <div class="preview">
                    <img id="foto" src="{{asset('template-admin/plugins/images/img-sample/foto-dosen.png')}}" >
                </div>
            </div>
            <div class="form-group">
                <label>Foto*</label>
                <input type="file" class="form-control" name="img" required="required" accept="image/*" onchange="showPreview(event);">
            </div>
            <div class="form-group">
                <label>NIP*</label>
                <input type="text" class="form-control" name="nip" required="required">
            </div>
            <div class="form-group">
                <label>Nama*</label>
                <input type="text" class="form-control" name="nama" required="required">
            </div>
            <div class="form-group">
                <label>Pendidikan*</label>
               <select name="pendidikan" id="" class="form-control">
                <option value="s2">S2</option>
                <option value="tenaga_pendidik">Tenaga Pendidik</option>
               </select>
            </div>
            <div class="form-group">
                <label>Pendidikan*</label>
               <select name="jurusan" id="" class="form-control">
                <option value="farmasi" >Farmasi</option>
                <option value="tlm" >Teknologi Laboratorium Medis</option>
               </select>
            </div>
            <div class="form-group">
                <label>Linkedln</label>
                <input type="text" class="form-control" name="linkedln" >
            </div>
            <div class="form-group">
                <label>Facebook</label>
                <input type="text" class="form-control" name="facebook" >
            </div>
            <div class="form-group">
                <label>Twitter</label>
                <input type="text" class="form-control" name="twiter" >
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
            var preview = document.getElementById("foto");
            preview.src = src;
            preview.style.display = "block";
        }
    }
</script>

@endsection