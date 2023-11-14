@extends('layouts.admin')
@section('content')
@if (session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif
<div class="col-12">
    <div class="white-box">
        <div class="col-4">
            <a href="{{route('navbar.create')}}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
        </div>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Navbar</th>
                    <th scope="col">Tipe</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $navbar)
                <tr>
                    <td>{{$navbar->nama}}</td>
                    <td>{{$navbar->type}}</td>

                    <td>
                        <a href="{{route('navbar.edit',$navbar)}}" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                        @if($navbar->type === "menu")
                        <a href="{{route('menu.index',$navbar)}}" class="btn btn-warning"><i class="fa fa-plus"></i></a>
                        @else
                        <a href="{{route('navbar.url',$navbar)}}" class="btn btn-warning"><i class="fa fa-plus"></i></a>
                        @endif
                        
                        <a href="{{route('navbar.delete',$navbar)}}" class="btn btn-danger"><i class="fa fa-trash" style="color: white;"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection