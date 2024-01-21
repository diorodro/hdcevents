@extends('layouts.main')

@section('title', 'produto')

@section('content')

@if($id != null)
  <h1>Produto id : {{ $id }}</h1>
@endif

@endsection