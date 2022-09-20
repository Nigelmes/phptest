@extends('main')
@section('content')

    <form action="{{ route('avtor.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">ФИО Автора</label>
            <input type="text" name="title" class="form-control" id="title"
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>

@endsection
