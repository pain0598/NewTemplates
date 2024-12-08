@extends('users.layouts.app')
@section('content')
<div style="margin:200px;"></div>
<h1>Contact Us</h1>
    <form id="contactUsForm" action="{{route('users-contact-us-submit')}}" method="post">
        @csrf
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        
        <div>
            <label for="subject">Subject:</label>
            <input type="text" id="subject" name="subject" required>
        </div>
        
        <div>
            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>
        </div>

        <button type="submit">Submit</button>
    </form>
@endsection