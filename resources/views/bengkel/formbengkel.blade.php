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
        
    <h1>DATA BENGKEL</h1>
    <form class="form-horizontal" action="addbengkel" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="nama" value="">
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label">stok</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="jenis" value="">
            </div>
        </div>
        <div class="form-group row">
            <label for="role" class="col-sm-2 col-form-label">harga</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="harga" value="">
            </div>
        </div>
        <div class="form-group row">
            <label for="password" class="col-sm-2 col-form-label">keterangan</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="keterangan" value="">
            </div>
        </div>
        <div class="mb-3">
                      <label for="formFile" class="form-label">gambar</label>
                      <input class="form-control" type="file" name="foto" id="formFile">
                    </div>
	{{ csrf_field() }}
        <button type="submit" class="btn btn-primary">Tambah</button>
        <button type="cancel" class="btn btn-primary">Batal</button>
    </form>
</div>
@endsection

