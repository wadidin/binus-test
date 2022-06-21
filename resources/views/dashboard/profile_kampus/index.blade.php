@extends('dashboard.layouts.master')
 
@section('content')
 
<div class="row">
    <div class="col-md-12">
        <h4>{{ $title }}</h4>
        <div class="box box-warning">
            <div class="box-header">
                <p>
                    <button class="btn btn-sm btn-flat btn-warning btn-refresh"><i class="fa fa-refresh"></i> Refresh</button>
                </p>
            </div>
            <div class="box-body">
               
                <form role="form" method="post" action="{{ url('profile-kampus') }}" enctype="multipart/form-data">
                    @csrf
                    {{ method_field('PUT') }}
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nama Kampus</label>
                      <input type="text" name="nama" class="form-control" id="exampleInputEmail1" placeholder="Nama Kampus" value="{{ $dt->nama }}">
                    </div>
 
                    <div class="form-group">
                      <label for="exampleInputPassword1">No Telp</label>
                      <input type="text" name="no_telp" class="form-control" id="exampleInputPassword1" placeholder="No Telp" value="{{ $dt->no_telp }}">
                    </div>
 
                    <div class="form-group">
                      <label for="exampleInputPassword1">Alamat</label>
                      <textarea class="form-control" name="alamat" rows="5">{{ $dt->alamat }}</textarea>
                    </div>
 
                    <div class="form-group">
                      <label for="exampleInputFile">Logo Kampus</label>
                      <input type="file" name="photo" id="exampleInputFile">
     
                      <p class="help-block">Example block-level help text here.</p>
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