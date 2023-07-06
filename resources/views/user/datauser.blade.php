@extends('layouts.app')

@section('content')

<div class="container">
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
