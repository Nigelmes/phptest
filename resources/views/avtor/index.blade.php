@extends('main')
@section('content')

@foreach($avtors as $gg)
  <div>  {{ $gg->title }}</div>
@endforeach

@endsection
