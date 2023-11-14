@extends('layouts.admin')
@section('css')
<style>
    tr,
    td {
        padding-bottom: 8px;
        padding-left: 5px;
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
        <h3 class="box-title">Tambah Menu</h3>
        <form method="post" action="{{route('menu.url.store',[$menu,$navbar])}}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <table id="dynamicAddRemove">
                    <tr>
                        <th>Nama</th>
                        <th>URL</th>
                    </tr>
                    <tr>
                        <td style="width: 300px">{{$menu->nama}}</td>
                        <td style="width: 200px">
                            <input type="text" name="url" placeholder="Url" value="{{$menu->url}}" class="form-control" require/>
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