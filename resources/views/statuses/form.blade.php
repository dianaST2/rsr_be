@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>
            @if(empty($entity))
                Create new status
            @else
                Edit status
            @endif
        </h2>
        <form action="@if(empty($entity)){{ route('statuses.store') }}@else{{ route('statuses.update', $entity->id) }}@endif" method="post">
            {{ csrf_field() }}
            @isset($entity)
                {{ method_field('PUT') }}
            @endisset
            @include('admin.fields.text', ['field' => 'title', 'name' => 'Title'])
            <button class="waves-effect waves-light btn" type="submit">save</button>
        </form>
    </div>
@endsection