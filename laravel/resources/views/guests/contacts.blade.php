@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Contacts</h1>
    <form action="{{route('contacts.send')}}" method="post">
        @csrf
        <div class="form-group">
          <label for="full_name">Full Name</label>
          <input type="text" name="full_name" id="full_name" class="form-control" placeholder="Mario Rossi" aria-describedby="fullNameHelper" minlength="5" required  value="{{old('full_name')}}">  
          <small id="fullNameHelper" class="text-muted">Type here your name</small>
        </div>
        <div class="form-group">
          <label for="email">Email Address</label>
          <input type="email" name="email" id="email" class="form-control" placeholder="ciao@example.it" aria-describedby="emailHelpId" required value="{{old('email')}}">
          <small id="emailHelpIdr" class="text-muted">Type here your email</small>
        </div>
        <div class="form-group">
          <label for="message">Message</label>
          <textarea class="form-control" name="message" id="message" rows="3">value="{{old('message')}}"</textarea>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Send</button>

    </form>
</div>
@endsection