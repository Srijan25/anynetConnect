@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>About</title>
    <link rel="stylesheet" href="about.css" />
  </head>
  <body>
    <div class="wrapper">
      <h1>-- About Me</h1>
      <div class="about-section">
        <img src="SRIJAN.jpg" />
        <p>
          Current student looking to join the workforce to gain real-world experience. Ability to complete tasks on time in both individual and team settings. Dependable and reliable, ready to learn and grow with your company. Adaptable student with knowledge of application and Web development, configuration management and database design.          <br />
          {{-- <button>Hire Me</button>
          <button>More Info</button> --}}
        </p>
      </div>
    </div>
  </body>
</html>

@endsection