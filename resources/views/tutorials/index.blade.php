@extends('app')

@section('title', '学習中の教材')

@section('content')
  @include('nav')
  <div class="container">
    <div class="d-flex flex-row border p-3 mt-1">
      @foreach($tutorials as $tutorial)
      <div class="border p-2 mr-1">{{ $tutorial->name }}</div>
      @endforeach
    </div>
    
    <div class="row mt-2">
      <div class="col border col-md-4">
        <h3 class="text-center"> Todo </h3>
          @foreach($tasks as $task)
          <div class="border p-2 m-1">{{ $task->name }}</div>
          @endforeach
      </div>
      <div class="col border col-md-4">
      <h3 class="text-center"> Doing </h3>
      </div>
      <div class="col border col-md-4">
      <h3 class="text-center"> Done </h3>
      </div>
    </div>
  </div>