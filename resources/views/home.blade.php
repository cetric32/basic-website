@extends('layouts.app')

@section('content')
    <h1>Home</h1>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Et nemo officiis minus molestiae facere sint, at deleniti illo libero quis esse, amet neque deserunt fugit eius debitis dolores, veritatis hic.
    </p>
@endsection

@section('sidebar')
    @parent
    <p>This is appended to the sidebar</p>

@endsection
