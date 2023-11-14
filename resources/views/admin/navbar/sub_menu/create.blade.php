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

        <form method="post" action="{{route('sub_menu.store',$menu)}}" enctype="multipart/form-data">

            {{ csrf_field() }}
            <div class="form-group">
                <table id="dynamicAddRemove">
                    <tr>
                        <th>Nama Menu</th>
                        <th>Url</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        <td style="width: 300px">
                            <input type="text" name="nama[0]" placeholder="Nama" class="form-control" required/>
                        </td>
                        <td style="width: 200px;">
                            <input type="text" name="url[0]" placeholder="URL" class="form-control" required/>
                        </td>
                        <td>
                            <button type="button" name="add" id="dynamic-ar" class="btn btn-primary "><i class="fa fa-plus"></i></button>
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
@section('script')
<script type="text/javascript">
    var i = 0;
    $("#dynamic-ar").click(function() {
        ++i;
        $("#dynamicAddRemove").append(`<tr>
                                            <td>
                                            <input type="text" name="nama[` + i + `]" placeholder="Nama" class="form-control" require/>
                                            </td>
                                            <td>
                                            <input type="text" name="url[` + i + `]" placeholder="URL" class="form-control" require/>
                                            </td> 
                                            <td>
                                            <button type="button" class="btn btn-danger remove-input-field"><i class="fa fa-minus"></i></button>
                                            </td>
                                            </tr>`);



    });
    $(document).on('click', '.remove-input-field', function() {
        $(this).parents('tr').remove();
    });
</script>

@endsection