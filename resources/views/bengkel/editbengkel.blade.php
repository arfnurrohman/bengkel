@extends('layouts.app')

@section('content')
<div class="container">
    <h1>EDIT BARANG</h1>
    <form class="form-horizontal" action="/updatebengkel" method="post"enctype="multipart/form-data">
        <div class="form-group row">
            <label for="inputName" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="Input Name" name="nama" value="{{$bengkel->nama}}">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="Input Email" name="jenis" value="{{$bengkel->jenis}}">
            </div>
        </div>
       
        <div class="form-group row">
            <label for="inputName" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="Input Name" name="harga" value="{{$bengkel->harga}}">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="Input Email" name="keterangan" value="{{$bengkel->keterangan}}">
            </div>
        </div>
       
        <div class="form-group row">
            <label for="inputPasssword" class="col-sm-2 col-form-label">foto</label>
            <input type="hidden" name="id" value="{{$bengkel->id}}">
            <div class="col-sm-10">
                <input type="file" class="form-control"  name="foto">
            </div>
        </div>
        {{ csrf_field() }}
	<input type="hidden" name="id" value="{{$bengkel->id}}">
        <button type="submit" class="btn btn-primary">Edit</button>
        <button type="cancel" class="btn btn-primary">Batal</button>
    </form>
</div>
@endsection