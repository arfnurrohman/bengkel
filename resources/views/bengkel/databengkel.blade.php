@extends('layouts.app')

@section('content')
<div class="container">
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

</div>
@endsection
