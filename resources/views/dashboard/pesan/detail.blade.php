@extends('dashboard.layouts.master')
 
@section('content')
 
<div class="row">
    <div class="col-md-12">
        <h4>{{ $title }}</h4>
        <div class="box box-warning">
            <div class="box-header">
                <p>
                    <button class="btn btn-sm btn-flat btn-warning btn-refresh"><i class="fa fa-refresh"></i> Refresh</button>
 
                    <a href="{{ url('pesan') }}" class="btn btn-sm btn-flat btn-primary"><i class="fa fa-refresh"></i> Kembali</a>
                </p>
            </div>
            <div class="box-body">
               <table class="table table-hover">
                   <tbody>
                       <tr>
                           <th>Judul</th>
                           <td>:</td>
                           <td>{{ $dt->judul }}</td>
 
                           <th>Users</th>
                           <td>:</td>
                           <td>{{ $dt->users_r->name }}</td>
 
                           <th>Tanggal</th>
                           <td>:</td>
                           <td>{{ date('d M Y H:i:s',strtotime($dt->created_at)) }}</td>
                       </tr>
 
                       <tr>
                           <th>Isi Pesan</th>
                           <td>:</td>
                           <td>{!! $dt->keterangan !!}</td>
                       </tr>
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