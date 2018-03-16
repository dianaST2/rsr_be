@extends('layouts.app')

@section('title', 'checklists')

@section('content')
    <div class="container">
        <div class="row">
            <h3>Statuses</h3>
            <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
                <a href="{{route('statuses.create')}}" class="btn-floating btn-large waves-effect waves-light right pulse green"><i class="material-icons">add</i></a>
            </div>

            @if($statuses->count() > 0)
                <table class="highlight bordered responsive-table">
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th class="right-align">Actions</th>
                    </tr>
                    @foreach($statuses as $status)
                        <tr>
                            <td>{{ $status->id }}</td>
                            <td>{{ $status->title }}</td>
                            <td class="right">
                                <form action="{{ route('statuses.destroy', $status->id) }}" method="POST">
                                    <a type="button" class="waves-effect waves-light btn" href="{{ route('statuses.edit', $status->id) }}">edit</a>
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="waves-effect waves-light btn red"><i class="material-icons">delete</i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            @else
                No statuses
            @endif
        </div>
    </div>
@endsection