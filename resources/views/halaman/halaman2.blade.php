@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 mb-5">
            <img src="{{ url('images/logo.png') }}" class="rounded mx-auto d-block" width="700" alt="">
        </div>
        @foreach ($datauser as $user)
        <div class="col-md-3">
            <div class="card">
                <img style="" src="{{ asset('/storage/images/'.$user->image )}}" style="width: 100px;" height="200px" alt="">   <div class="card-body">
                
                    <h5 class="card-title">{{ $user->name }}</h5>
               
                    <strong>Harga :</strong>{{ $user->name }}<br>
                    <strong>Stok :</strong>{{ $user->name }} <br>
                    <hr>
                    <strong>Keterangan :</strong> 
                    {{ $user->name }}
                </p>
               
              </div>
            </div>
         <p></p>
        </div>
        @endforeach
    </div>
</div>
@endsection