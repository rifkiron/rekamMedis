@extends('admin.layouts.master')

@section('title')
    Dashboard | Admin
@endsection

@section('header')
    Edit Pasien
@endsection 

@section('content')
<div class="section-body">
    <div class="card">
    <div class="card-body">
    <form action="{{ route('pasien.store')}}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('POST')
      <div class="row">
        <div class="col-md-12"> 
          <input type="hidden" name="id" value="" id="id_update">
          <div class="form-group">
            <label>ID Rekam Medis 
              @error('kode_rekam_medis') <b @error('kode_rekam_medis') class="text-danger" @enderror> {{ "(".$message.")" }} </b> @enderror
            </label>
            <input type="text" name="kode_rekam_medis" value="" class="form-control" disabled>
          </div>
          <div class="form-group">
            <label>Nama Pasien 
              @error('nama') <b @error('nama') class="text-danger" @enderror> {{ "(".$message.")" }} </b> @enderror
            </label>
            <input type="text" name="nama" value="" class="form-control">
          </div> 
          <div class="form-group">
            <label>Jenis Kelamin
                @error('jkl') <b @error('jkl') class="text-danger" @enderror> {{ "(".$message.")" }} </b> @enderror
              </label>
            <select name="jkl" class="form-control">
                <option value="" hidden>Pilih Jenis Kelamin Pasien !</option>
                <option name="jkl" value="Laki-Laki">Laki-Laki</option>
                <option name="jkl" value="Perempuan">Perempuan</option>
            </select>
          </div>
          <div class="form-group">
            <label>Email 
              @error('email') <b @error('email') class="text-danger" @enderror> {{ "(".$message.")" }} </b> @enderror
            </label>
            <input type="text" name="email" value="" class="form-control">
          </div>  
          <div class="form-group">
              <label>No. Handphone 
                @error('no_hp') <b @error('no_hp') class="text-danger" @enderror> {{ "(".$message.")" }} </b> @enderror
              </label>
              <input type="number" name="no_hp" value="" class="form-control">
          </div> 
          <div class="form-group">
            <label>Alamat 
              @error('alamat') <b @error('alamat') class="text-danger" @enderror> {{ "(".$message.")" }} </b> @enderror
            </label>
            <input type="text" name="alamat" value="" class="form-control">
          </div>
            <button type="button" class="btn btn-warning"><a class="text-white" style="text-decoration: none" href="{{ route('pasien.index')}}">Kembali</a></button>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
@endsection

@push('after-scripts')
    <script>
        $(document).ready(function() {
        
        });
    </script>
@endpush



