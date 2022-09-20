@extends('main')
@section('content')
@foreach($books as $ff)
  <div>  {{ $ff->uuid }}. {{ $ff->title }}</div>

@endforeach
@endsection
