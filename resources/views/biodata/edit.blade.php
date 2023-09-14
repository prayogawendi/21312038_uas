@extends('layout.master')

@section('judul')
edit BIodata
@endsection

@section('content')
<form  method="post" action="/biodata/{{ $biodata->id }}">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label>Npm</label>
        <input type="text" name="npm" value="{{ $biodata->npm }}" class="form-control">
    </div>
    @error('npm')
        <div class="alert alert-danger">{{$message }}</div>
    @enderror

    <div class="form-group">
        <label>Nama</label>
        <input type="text" name="nama" value="{{ $biodata->nama }}" class="form-control">
    </div>
    @error('nama')
        <div class="alert alert-danger">{{$message }}</div>
    @enderror

    <div class="form-group">
        <label>Alamat</label>
        <input type="text" name="alamat" value="{{ $biodata->alamat }}" class="form-control">
    </div>
    @error('alamat')
        <div class="alert alert-danger">{{$message }}</div>
    @enderror

    <button type="submit" class="btn btn-primary">ubah</button>
    
</form>
@endsection
