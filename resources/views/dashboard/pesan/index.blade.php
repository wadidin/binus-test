@extends('dashboard.layouts.master')
 
@section('content')
 
<div class="row">
    <div class="col-md-12">
        <h4>{{ $title }}</h4>
        <div class="box box-warning">
            <div class="box-header">
                <p>
                    <button class="btn btn-sm btn-flat btn-warning btn-refresh"><i class="fa fa-refresh"></i> Refresh</button>
 
                    <a href="{{ url('pesan/add') }}" class="btn btn-sm btn-flat btn-primary"><i class="fa fa-refresh"></i> Kirim Pesan</a>
                </p>
            </div>
            <div class="box-body">
               
                <table class="table table-hover myTable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>judul</th>
                            <th>users</th>
                            <th>status</th>
                            <th>created at</th>
                            <th>view detail</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $e=>$dt)
                        <tr>
                            <td>{{ $e+1 }}</td>
                            <td>{{ $dt->judul }}</td>
                            <td>{{ $dt->users_r->name }}</td>
                            <td>
                                @if($dt->status == null)
                                <label class="label label-warning">Belum Dibaca</label>
                                @else
                                <label class="label label-success">Sudah Dibaca</label>
                                @endif
                            </td>
                            <td>{{ date('d F Y H:i:s',strtotime($dt->created_at)) }}</td>
                            <td>
                                <a href="{{ url('pesan/'.$dt->id) }}" class="btn btn-primary btn-xs btn-flat">Detail Pesan</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
 
            </div>
        </div>
    </div>
</div>
 
@endsection
 
@section('scripts')
 
<script type="text/javascript">
    $(document).ready(function(){
 
        // btn refresh
        $('.btn-refresh').click(function(e){
            e.preventDefault();
            $('.preloader').fadeIn();
            location.reload();
        })
 
    })
</script>
 
@endsection