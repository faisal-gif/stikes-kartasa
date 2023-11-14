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
        <h3 class="box-title">Edit Menu {{$navbar->nama}}</h3>
        <form method="post" action="{{route('navbar.update',$navbar)}}" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <div class="form-group">
                <table id="dynamicAddRemove">
                    <tr>
                        <th>Nama Navbar</th>
                        <th>Tipe</th>
                    </tr>
                    <tr>
                        <td style="width: 300px">
                            <input type="text" name="nama" placeholder="Nama" class="form-control" value="{{$navbar->nama}}" require/>
                        </td>
                        <td style="width: 200px;">
                            <select class="form-select" name="tipe">
                                <option value="url" {{ $navbar->type == "url" ? 'selected' : '' }}>URL</option>
                                <option value="menu" {{ $navbar->type == "menu" ? 'selected' : '' }}>Menu</option>
                            </select>
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