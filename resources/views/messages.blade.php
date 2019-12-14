@extends('layouts.app')

@section('content')
    <table class="table table-striped">
        @if (count($messages) > 0)
            @foreach ($messages as $message)
                <tr>
                    <td>{{ $message->name}}</td>
                    <td>{{ $message->email}}</td>
                    <td>{{ $message->message}}</td>
                    <td>{{ $message->created_at->diffForHumans()}}</td>
                </tr>
            @endforeach
        @endif
    </table>
    {{$messages->links()}}

@endsection
