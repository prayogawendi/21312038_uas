@extends('layout.master')

@section('judul')
edit BIodata
@endsection

@section('content')
<form  method="post" action="/biodata/{{ $biodata->id }}">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label>Nama</label>
        <input type="text" name="nama" value="{{ $biodata->nama }}" class="form-control">
    </div>
    @error('nama')
        <div class="alert alert-danger">{{$message }}</div>
    @enderror

    <div class="form-group">
        <label>Umur</label>
        <input type="number" name="umur" value="{{ $biodata->umur }}" class="form-control">
    </div>
    @error('umur')
        <div class="alert alert-danger">{{$message }}</div>
    @enderror

    <div class="form-group">
        <label>Bio</label>
        <textarea class="form-control" name="bio">{{ $biodata->bio }}</textarea>
    </div>
    @error('bio')
        <div class="alert alert-danger">{{$message }}</div>
    @enderror

    <button type="submit" class="btn btn-primary">ubah</button>
    
</form>
@endsection
