@extends('layouts.app')
@section('content')

<div class="container">
    <style>
        body {
          padding: 25px;
          background-color: white;
          color: black;
          font-size: 25px;
        }
        
        .dark-mode {
          background-color: black;
          color: white;
        }
        </style>
        </head>
        <body>
        
        
          <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <button style=" z-index: 99999; width: 60px; padding: 12px; right: 0; bottom: 0; position: fixed; " onclick="myFunction()"class="btn btn-dark btn-sm"><i class="fa fa-sun"></i><i class="fa fa-moon"></i></button>
        
        <script>
        function myFunction() {
           var element = document.body;
           element.classList.toggle("dark-mode");
        }
        </script>
        
    <div class="row">
        <div class="col-md-12">
            <a href="{{ url('home') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
        </div>
        <div class="col-md-12 mt-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Profile</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4><i class="fa fa-user"></i> My Profile</h4>
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>Nama</td>
                                <td width="10">:</td>
                                <td>{{ $user->name }}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>:</td>
                                <td>{{ $user->email }}</td>
                            </tr>
                            <tr>
                                <td>Role</td>
                                <td>:</td>
                                <td>{{ $user->role }}</td>
                            </tr>
                            <tr>
                                <td>password</td>
                                <td>:</td>
                                <td>{{ $user->password }}</td>
                            </tr>
                            <tr>
                                <img src="{{ asset('/storage/images/'.$user->image )}}" style="width: 100px;" height="100px" alt="">
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-12 mt-2">
            <div class="card">
                <div class="card-body">
                    <h4><i class="fa fa-pencil-alt"></i> Edit Profile</h4>
                    <form method="POST" action="{{ url('profile') }}" enctype="multipart/form-data">
                        @csrf
<div>
                        <div class="form-group row">
                            <label for="inputEmail" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Input Email" name="name" value="{{$user->name}}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Input Email" name="email" value="{{$user->email}}">
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
                   

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-2">
                                <button type="submit" class="btn btn-primary">
                                    Save
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection