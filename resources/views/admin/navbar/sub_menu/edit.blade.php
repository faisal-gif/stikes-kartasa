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
        <h3 class="box-title">Edit Berita</h3>
        <form method="post" action="{{route('sub_menu.update',[$sub_menu,$menu])}}" enctype="multipart/form-data">
            {{ csrf_field() }}
    

            <div class="form-group">
                <table id="dynamicAddRemove">
                    <tr>
                        <th>Nama Menu</th>
                        <th>Url</th>
                    </tr>
                    <tr>
                        <td style="width: 300px">
                            <input type="text" name="nama" placeholder="Nama" value="{{$sub_menu->nama}}" class="form-control" require />
                        </td>
                        <td style="width: 200px;">
                            <input type="text" name="url" placeholder="URL" value="{{$sub_menu->url}}" class="form-control" require/>
                        </td>
                    </tr>
                </table>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</div>
@endsection