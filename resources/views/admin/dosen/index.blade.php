@extends('layouts.admin')
@section('content')
@if (session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif
<div class="col-12">
    <div class="white-box">
        <div class="col-4">
            <a href="{{route('dosen.create')}}" class="btn btn-primary">Tambah</a>
        </div>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">NIP</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Tanggal Upload</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $dosen)
                <tr>
                    <td>{{$dosen->nip}}</td>
                    <td>{{$dosen->nama}}</td>
                    <td>{{date('d-m-Y', strtotime($dosen->created_at))}}</td>

                    <td>
                        <form action="{{route('dosen.destroy',$dosen)}}" method="post">
                            <a href="{{route('dosen.edit',$dosen)}}" class="btn btn-warning">Edit</a>
                            |
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="DELETE" />
                            <button type="submit" class="btn btn-danger" style="color: white;">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection