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
    
    <h1 style="text-align: center; ">DATA USER</h1>
    <table class="table table-hover">
    <thead class="thead-dark">
    <tr>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">NAMA</th>
      <th scope="col">EMAIL</th>
      <th scope="col">ROLE</th>
      <th scope="col">foto</th>
       <th scope="col"><a href="/fromuser">TAMBAH</th>
    </tr>
  </thead>

    @php($no = 1)
    @foreach ($datauser as $user)
    <tbody>
    <tr>
     
    <td>{{$no++}}</td>
      <td>{{ $user->name }}</td>
      <td>{{ $user->email }}</td>
      <td>{{$user->role}}</td>
      <td><img src="{{ asset('/storage/images/'.$user->image )}}" style="width: 40px;" height="40px" alt=""></td>

      <td>
<a href="datauser/{{$user->id}}"class="btn btn-primary">Edit</a>
<a href="javascript:deleteuser('{{$user->name}}',{{$user->id}})"class="btn btn-primary">Hapus</a>
</td>

    </tr>
  

     @endforeach
     <script>
    function deleteuser(data, id) {
        var r = confirm("Delete data " + data + "?");
        if (r == true) {
            window.location.replace("/deleteuser/" + id);
        }
    }
</script>
</table>

</div>
@endsection
