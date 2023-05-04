@extends('layouts.app')

@section('content')

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Responsive Contact Us Page Design using Html CSS</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap">
        <!-- Font Awesome CDN -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
        <link rel="stylesheet" href="chat.css">
        
    </head>
<body>
<form method="post" action="{{ route('chat') }}">
    @csrf
    <div style="text-align: center;">
    <br />
    {{-- <label for="output">Chat </label> --}}
    <h3>Chat And Connect to the World</h3>
    <br />
    
    <textarea name="output" class="box" cols="100" rows="25" id="output" value="">
        @foreach ($message as $message)
            {{$message->message}}
        @endforeach

    </textarea>
    <br />
    
    
    <label for="message" >Type your message here:</label>
    <br />
    <input name="message" type="text" id="message" size="67" />
    
    <button type="submit" class="button">Send Message</button>
    </div>
</form>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="chat.js" defer></script>
</body>
</html>

@endsection