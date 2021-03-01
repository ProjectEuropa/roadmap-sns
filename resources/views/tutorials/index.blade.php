@extends('app')

@section('title', '学習中の教材')

@section('content')
  @include('nav')
  <div class="container">
    <div class="border p-3 mt-1">
      <tutorial
      :initial-title='@json($tutorials)'
      >
      </tutorial>

      <!-- DBの値を表示 -->
      <!-- @foreach($tutorials as $tutorial)
      <div class="border p-2 mr-1">{{ $tutorial->name }}</div>
      @endforeach -->
    
    </div>

    <div class="row mt-2">
      <div class="col border col-md-4">
        <h3 class="text-center"> Todo </h3>
          @foreach($tasks as $task)
            @if($task->status == 1)
              <div class="border p-2 m-1">{{ $task->name }}</div>
            @endif
          @endforeach
      </div>
      <div class="col border col-md-4">
        <h3 class="text-center"> Doing </h3>
         @foreach($tasks as $task)
            @if($task->status == 2)
              <div class="border p-2 m-1">{{ $task->name }}</div>
            @endif
         @endforeach
      </div>
      <div class="col border col-md-4">
        <h3 class="text-center"> Done </h3>
        @foreach($tasks as $task)
          @if($task->status == 3)
            <div class="border p-2 m-1">{{ $task->name }}</div>
          @endif
        @endforeach
      </div>
    </div>
  </div>
  @endsection