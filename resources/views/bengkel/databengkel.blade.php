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
    
    <h1 style="text-align: center; ">DATA BARANG</h1>
    <table class="table table-hover">
    <thead class="thead-dark">
    <tr>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">NAMA</th>
      <th scope="col">STOK</th>
      <th scope="col">HARGA</th>
      <th scope="col">KETERANGAN</th>
      <th scope="col">GAMBAR</th>
       <th scope="col"><a href="/formbengkel">TAMBAH</th>
    </tr>
  </thead>

    @php($no = 1)
    @foreach ($databengkel as $bengkel)
    <tbody>
    <tr>
     
    <td>{{$no++}}</td>
      <td>{{ $bengkel->nama }}</td>
      <td>{{ $bengkel->jenis }}</td>
      <td>{{$bengkel->harga}}</td>
      <td>{{ $bengkel->keterangan }}</td>
      <td><img src="{{ asset('/storage/images/'.$bengkel->image )}}" style="width: 40px;" height="40px" alt=""></td>
      <td>
<a href="databengkel/{{$bengkel->id}}"class="btn btn-primary">Edit</a>
<a href="javascript:deletebengkel('{{$bengkel->nama}}',{{$bengkel->id}})"class="btn btn-primary">Hapus</a>
</td>

    </tr>
    
   
   
    

     @endforeach
     <script>
    function deletebengkel(data, id) {
        var r = confirm("Delete data " + data + "?");
        if (r == true) {
            window.location.replace("/deletebengkel/" + id);
        }
    }
</script>
</table>
Halaman : {{  $databengkel->currentPage() }} <br/>
    Jumlah Data : {{  $databengkel->total() }} <br/>
    Data Per Halaman : {{  $databengkel->perPage() }} <br/>
  <div>Data Per Halaman : {{ $databengkel->links('pagination::bootstrap-5')}}</div>  
</div>
@endsection
