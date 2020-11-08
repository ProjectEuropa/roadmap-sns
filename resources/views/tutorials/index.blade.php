@extends('app')

@section('title', '学習中の教材')

@section('content')
  @include('nav')
  <div class="container">
    <div class="d-flex flex-row border p-3 mt-2">
      @foreach($tutorials as $tutorial)
      <div class="border p-2 mr-1">{{ $tutorial->name }}</div>
      @endforeach
    </div>
  </div>