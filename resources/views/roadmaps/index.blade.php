@extends('app')

@section('title', '記事一覧')

@section('content')
  @include('nav')
  <div class="container">
    <div class="card-deck mt-2">
      @foreach($roadmaps as $roadmap)
      <div class="card">
        <div class="card-body d-flex flex-row">
          <i class="fas fa-user-circle fa-3x mr-1"></i>
          <div>
            <div class="font-weight-bold">
              {{ $roadmap->user->name }}
            </div>
            <div class="font-weight-lighter">
              {{ $roadmap->created_at->format('Y/m/d H:i') }}
            </div>
          </div>
        </div>
        <div class="card-body pt-0 pb-2">
          <h3 class="h4 card-title">
            {{ $roadmap->title }}
          </h3>
          <div class="card-text">
            {!! nl2br(e( $roadmap->body )) !!}
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
@endsection