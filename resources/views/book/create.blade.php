@extends('main')
@section('content')

    <form action="{{ route('post.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="uuid" class="form-label">ID</label>
            <input type="text" name="ID" class="form-control" id="uuid"
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Название книги</label>
            <input type="text" name="title" class="form-control" id="title"
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>

@endsection
