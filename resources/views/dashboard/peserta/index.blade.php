@extends('dashboard.layouts.master')
 
@section('content')
 
<div class="row">
    <div class="col-md-12">
        <h4>{{ $title }}</h4>
        <div class="box box-warning">
            <div class="box-header">
                <p>
                    <button class="btn btn-sm btn-flat btn-warning btn-refresh"><i class="fa fa-refresh"></i> Refresh</button>
 
                    <a href="{{ url('peserta') }}" class="btn btn-sm btn-flat btn-primary"><i class="fa fa-refresh"></i> All Peserta</a>
 
                    <a href="{{ url('peserta/verifikasi') }}" class="btn btn-sm btn-flat btn-success"><i class="fa fa-refresh"></i> Di verfifikasi</a>
 
                    <a href="{{ url('peserta/belum-verifikasi') }}" class="btn btn-sm btn-flat btn-danger"><i class="fa fa-refresh"></i> Belum Di verfifikasi</a>
                </p>
            </div>
            <div class="box-body">
               
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>action</th>
                                <th>photo</th>
                                <th>name</th>
                                <th>nisn</th>
                                <th>email</th>
                                <th>id registrasi</th>
                                <th>no hp</th>
                                <th>alamat</th>
                                <th>is melengkapi??</th>
                                <th>is verifikasi??</th>
                                <th>Download</th>
                                <th>is lulus?</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $e=>$dt)
                            <tr>
                                <td>{{ $e+1 }}</td>
                                <td>
                                        <div style="width:60px">
                                            <a href="{{ url('peserta/'.$dt->id) }}" class="btn btn-warning btn-xs btn-edit" id="edit"><i class="fa fa-pencil-square-o"></i></a>
 
                                            <button href="{{ url('peserta/'.$dt->id) }}" class="btn btn-danger btn-xs btn-hapus" id="delete"><i class="fa fa-trash-o"></i></button>
                                        </div>
                                </td>
                                <td>
                                    <img src="{{ asset($dt->photo) }}" style="width: 100px;">
                                </td>
                                <td>{{ $dt->name }}</td>
                                <td>{{ $dt->nisn }}</td>
                                <td>{{ $dt->email }}</td>
                                <td>{{ $dt->id_registrasi }}</td>
                                <td>{{ $dt->biodata_r->no_hp }}</td>
                                <td>{{ $dt->biodata_r->alamat }}</td>
                                @if($dt->biodata_r_count > 0)
                                <td>
                                    <label class="label label-success">Sudah Melengkapi</label>
                                </td>
                                @else
                                <td>
                                    <label class="label label-danger">Belum Melengkapi</label>
                                </td>
                                @endif
 
                                @if($dt->is_verifikasi == 1)
                                <td>
                                    <label class="label label-success">Sudah Diverifikasi</label>
                                </td>
                                @else
                                <td>
                                    <label class="label label-danger">Belum Diverifikasi</label>
                                </td>
                                @endif
 
                                <td>
                                    <p>
                                        <a href="{{ asset($dt->biodata_r->ijazah) }}" class="btn btn-xs btn-success" download="">Download Ijazah</a>
 
                                        <a href="{{ asset($dt->biodata_r->ktp) }}" class="btn btn-xs btn-warning" download="">Download KTP</a>
                                    </p>
                                </td>
 
                                <td>
                                    @if($dt->is_lulus == null)
                                    <a href="{{ url('peserta/'.$dt->id.'/lulus') }}" class="btn btn-xs btn-primary">Luluskan</a>
                                    @else
                                    <label class="label label-info">Sudah Lulus</label>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
 
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