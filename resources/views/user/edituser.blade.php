@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Form User</h1>
    <form class="form-horizontal" action="/updateuser" method="post"enctype="multipart/form-data">
        <div class="form-group row">
            <label for="inputName" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="Input Name" name="name" value="{{$user->name}}">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="Input Email" name="email" value="{{$user->email}}">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputRole" class="col-sm-2 col-form-label">Role</label>
            <div class="col-sm-10">
            <input type="radio" name="role" value="admin">  admin<br>
            <input type="radio" name="role" value="user"> user<br>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPasssword" class="col-sm-2 col-form-label">Passsword</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" placeholder="Input Password" name="password">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPasssword" class="col-sm-2 col-form-label">foto</label>
            <input type="hidden" name="id" value="{{$user->id}}">
            <div class="col-sm-10">
            <input type="file" class="form-control"  name="foto">
            </div>
        </div>
        </div>
       
        {{ csrf_field() }}
	<input type="hidden" name="id" value="{{$user->id}}">
        <button type="submit" class="btn btn-primary">Edit</button>
        <button type="cancel" class="btn btn-primary">Batal</button>
    </form>
</div>
@endsection