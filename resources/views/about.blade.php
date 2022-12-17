@extends('layouts.Main')
@section('container')
    <h1>Halaman About</h1>
    <h3>{{ $name }}</h3>
    <p>{{ $email }}</p>
    <img src="img/{{ $img }}" alt="<?= $name ?>" class="img-thumbnail rounded-circle">
@endsection