@extends('layouts.admin')

@section('page-title')
    {{ $type->name }}
@endsection

@section('content')
    <h1 class="text-decoration-underline">{{ $type->name }}</h1> 

    {{-- Nav links --}}
    <div class="mt-5">
        <a href="{{ route('admin.types.index') }}" class="btn btn-secondary">Type List</a>
        <a href="{{ route('admin.types.edit', $type) }}" class="btn btn-success">Edit this type</a>
    </div>
@endsection