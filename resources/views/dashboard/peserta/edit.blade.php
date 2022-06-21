@extends('dashboard.layouts.master')
 
@section('content')
 
<div class="row">
    <div class="col-md-12">
        <h4>{{ $title }}</h4>
        <div class="box box-warning">
            <div class="box-header">
                <p>
                    <button class="btn btn-sm btn-flat btn-warning btn-refresh"><i class="fa fa-refresh"></i> Refresh</button>
 
                    <a href="{{ url('peserta') }}" class="btn btn-sm btn-flat btn-primary"><i class="fa fa-refresh"></i> Kembali</a>
                </p>
            </div>
            <div class="box-body">
               
                <form role="form" method="post" action="{{ url('peserta/'.$dt->id) }}" enctype="multipart/form-data">
                    @csrf
                    {{ method_field('PUT') }}
                  <div class="row">
                      <div class="col-md-6">
                          <div class="box-body">
                            <div class="form-group">
                              <label for="exampleInputEmail1">No Hp</label>
                              <input type="text" name="no_hp" class="form-control" id="exampleInputEmail1" placeholder="No Hp" value="{{ $dt->biodata_r->no_hp }}">
                            </div>
 
                            <div class="form-group">
                              <label for="exampleInputPassword1">Alamat</label>
                              <textarea class="form-control" name="alamat" rows="5">{{ $dt->biodata_r->alamat }}</textarea>
                            </div>
 
                            <div class="form-group">
                              <label for="exampleInputEmail1">Tempat Lahir</label>
                              <input type="text" name="tempat_lahir" class="form-control" id="exampleInputEmail1" placeholder="Tempat Lahir" value="{{ $dt->biodata_r->tempat_lahir }}">
                            </div>
 
                            <div class="form-group">
                              <label for="exampleInputEmail1">Tanggal Lahir</label>
                              <input type="text" name="tanggal_lahir" class="form-control datepicker" id="exampleInputEmail1" placeholder="Tanggal Lahir" autocomplete="off" value="{{ date('Y-m-d',strtotime($dt->biodata_r->tanggal_lahir)) }}">
                            </div>
 
                            <div class="form-group">
                              <label for="exampleInputFile">Upload Ijazah</label>
                              <input type="file" name="ijazah" id="exampleInputFile">
                            </div>
 
                            <div class="form-group">
                              <label for="exampleInputFile">Upload Ktp</label>
                              <input type="file" name="ktp" id="exampleInputFile">
                            </div>
 
                           
                          </div>
                      </div>
 
                      <div class="col-md-6">
                          <div class="box-body">
                            <div class="form-group">
                              <label for="exampleInputEmail1">Email address</label>
                              <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="{{ $dt->email }}">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1">Name</label>
                              <input type="text" name="name" class="form-control" id="exampleInputPassword1" placeholder="Name" value="{{ $dt->name }}">
                            </div>
 
                            <div class="form-group">
                              <label for="exampleInputPassword1">Nisn</label>
                              <input type="text" name="nisn" class="form-control" id="exampleInputPassword1" placeholder="Nisn" value="{{ $dt->nisn }}">
                            </div>
 
                            <div class="form-group">
                              <label for="exampleInputFile">File input</label>
                              <input type="file" name="photo" id="exampleInputFile">
             
                              <p class="help-block">Example block-level help text here.</p>
                            </div>
                           
                          </div>
                      </div>
                  </div>
                  <!-- /.box-body -->
     
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                  </div>
                </form>
 
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