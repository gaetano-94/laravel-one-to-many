@extends('layouts.admin')

@section('content')
    <header class="d-flex justify-content-between align-items-center mt-2">
        <h1>Modifica Progetto: {{ $project->title }}</h1>
        <a href="{{ route('admin.projects.index') }}" class="btn btn-primary btn-sm my-2" role="button">Torna ai Progetti</a>
    </header>
    <hr>
    <form action="{{ route('admin.projects.update', $project->slug) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control  @error('title') is-invalid
                 @enderror" id="title"
                placeholder="Modifica Progetto" name="title" value="{{ old('title', $project->title) }}">
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Tipo</label>
            <select class="form-select" aria-label="Default select example" name="type_id">
                <option selected>Apri il menu</option>
                @foreach ($types as $type)
                    <option value="{{ $type->id }}" @if (old('type_id', $project->type_id) == $type->id) selected @endif>
                        {{ $type->title }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Contenuto</label>
            <textarea class="form-control @error('content') is-invalid
                 @enderror" name="content" id=""
                cols="30" rows="5">{{ old('content', $project->content) }}</textarea>
            @error('content')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button class="btn btn-success">Modifica</button>
    </form>
@endsection
