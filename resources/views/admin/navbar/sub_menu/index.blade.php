@extends('layouts.admin')
@section('content')
@if (session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif
<div class="col-12">
    <div class="white-box">
        <div class="col-4">
            <a href="{{route('menu.index',$menu->navbar_id)}}" class="btn btn-primary"><i class="fa fa-chevron-left"></i></a>
            <a href="{{route('sub_menu.create',$menu)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a>

        </div>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Menu</th>
                    <th scope="col">Url</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $sub_menu)
                <tr>
                    <td>{{$sub_menu->nama}}</td>
                    <td>{{$sub_menu->url}}</td>

                    <td>
                        <a href="{{route('sub_menu.edit',[$sub_menu, $menu])}}" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                        <a href="{{route('sub_menu.destroy',[$sub_menu, $menu])}}" class="btn btn-danger"><i class="fa fa-trash" style="color: white;"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection