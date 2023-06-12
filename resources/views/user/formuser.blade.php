@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Data User</h1>
    <form class="form-horizontal" action="adduser" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="name" value="">
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="email" value="">
            </div>
        </div>
        <div class="form-group row">
            <label for="role" class="col-sm-2 col-form-label">Role</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="role" value="">
            </div>
        </div>
        <div class="form-group row">
            <label for="password" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="password" value="">
            </div>
        </div>
        <div class="mb-3">
                      <label for="formFile" class="form-label">Image</label>
                      <input class="form-control" type="file" name="foto" id="formFile">
                    </div>
	{{ csrf_field() }}
        <button type="submit" class="btn btn-primary">Tambah</button>
        <button type="cancel" class="btn btn-primary">Batal</button>
    </form>
</div>
@endsection

