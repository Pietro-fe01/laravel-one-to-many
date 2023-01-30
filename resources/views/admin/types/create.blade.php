@extends('layouts.admin')

@section('page-title')
    {{ $type->name }}
@endsection

@section('content')
    <h1 class="my-3">Creating new project type</h1>

    <form action="{{ route('admin.types.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="project_title" class="form-label">Title*</label>
            <input type="text" id="project_title" name="project_title" class="form-control @error('project_title') is-invalid @enderror" value="{{ old('project_title') }}">
            @error('project_title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-success">CREATE</button>
        <button type="reset" class="btn btn-secondary">RESET</button>
        <a href="{{ route('admin.projects.index') }}" class="btn btn-danger">UNDO</a>
    </form>
@endsection