@extends('layouts.app')

@section('content')
    <h1>Contact Us</h1>
    <form class="form-group" action="/contact/submit" method="post">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="form-control" placeholder="Your names" >
        <label for="email"></label>
        <input type="email" name="email" id="email" class="form-control" placeholder="Email" >
        <label for="message"></label>
        <textarea name="message" id="message" class="form-control" cols="30" rows="10" placeholder="Your message" >

        </textarea>
        {{ csrf_field() }}
        <button class="btn btn-primary p-3 mt-1" type="submit">Submit</button>

    </form>
@endsection

