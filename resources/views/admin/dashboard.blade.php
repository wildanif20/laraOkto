@extends('layouts.master')
@section('content')
    <?php
    $user = Sentinel::getUser();
    $role = $user->roles()->first()->slug;
    ?>
    <h1>Selamat datang {{ $role }} </h1><br />    
    Nama Depan : {{ $user->first_name}}<br />    
    Nama Belakang : {{ $user->last_name}}    
@endsection