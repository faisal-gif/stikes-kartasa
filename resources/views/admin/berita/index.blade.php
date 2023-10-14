@extends('layouts.admin')
@section('content')
@if (session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif
<div class="col-12">
    <div class="white-box">
        <div class="col-4">
            <a href="{{route('news.create')}}" class="btn btn-primary">Tambah</a>
        </div>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Judul</th>
                    <th scope="col">Detail</th>
                    <th scope="col">Tanggal Posting</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $news)
                <tr>
                    <td>{{$news->judul}}</td>
                    <td> <a href="{{route('news.show',$news)}}" class="btn btn-primary">Detail</a>

                    </td>
                    <td>{{date('d-m-Y', strtotime($news->created_at))}}</td>

                    <td>
                        <form action="{{route('news.destroy',$news)}}" method="post">
                            <a href="{{route('news.edit',$news)}}" class="btn btn-warning">Edit</a>
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