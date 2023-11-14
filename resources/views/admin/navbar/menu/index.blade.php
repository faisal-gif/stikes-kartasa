@extends('layouts.admin')
@section('content')
@if (session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif
<div class="col-12">
    <div class="white-box">
        <div class="col-4">
        <a href="{{route('navbar.index')}}" class="btn btn-primary"><i class="fa fa-chevron-left"></i></a>
            <a href="{{route('menu.create',$navbar)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
           
        </div>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Menu</th>
                    <th scope="col">Tipe</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $menu)
                <tr>
                    <td>{{$menu->nama}}</td>
                    <td>{{$menu->type}}</td>

                    <td>
                        <a href="{{route('menu.edit',[$menu,$navbar])}}" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                        @if($menu->type === "sub_menu")
                        <a href="{{route('sub_menu.index',$menu)}}" class="btn btn-warning"><i class="fa fa-plus"></i></a>
                        @else
                        <a href="{{route('menu.url',[$menu,$navbar])}}" class="btn btn-warning"><i class="fa fa-plus"></i></a>
                        @endif
                        <a href="{{route('menu.destroy',[$menu,$navbar])}}" class="btn btn-danger"><i class="fa fa-trash" style="color: white;"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection