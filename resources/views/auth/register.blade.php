
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script
          src="https://kit.fontawesome.com/64d58efce2.js"
          crossorigin="anonymous"
        ></script>
        <link rel="stylesheet" href="register.css" />
        <title>Sign in & Sign up Form</title>
      </head>
<body>
    <div class="container">
        <div class="forms-container">
          <div class="signin-signup">
            <form method="POST" action="{{ route('register') }}">
              @csrf
                <h2 class="title">Sign up</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input id="name" placeholder="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    
                  </div>
                <div class="input-field">
                  <i class="fas fa-user"></i>
                  <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                  @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
                </div>
                <div class="input-field">
                  <i class="fas fa-lock"></i>
                  <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                  @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
                </div>
                <div class="input-field">
                  <i class="fas fa-lock"></i>
                  <input id="password-confirm" placeholder="Confirm password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                  
                </div>
                <input type="submit" value="Sign-up" class="btn solid" />
                </div>
            </div>
        </form>
      
            <div class="panels-container">
              <div class="panel left-panel">
                <div class="content">
                  <h3>One of us</h3>
                  <p>
                    Sign-in and start where you leave
                  </p>
                  <a href="login">
                  <button class="btn transparent" id="sign-up-btn">
                    Sign in
                  </button></a>
                  <a href="{{ url('/') }}">
                    <button class="btn transparent" id="sign-up-btn">
                      Home
                    </button></a>
                </div>
                <img src="img/log.svg" class="image" alt="" />
              </div>
              <div class="panel right-panel">
                <div class="content">
                  <h3>One of us ?</h3>
                  <p>
                    Join and Start the fun
                  </p>
                  
                </div>
                <img src="img/register.svg" class="image" alt="" />
              </div>
            </div>
          </div>
      
          <!-- <script src="app.js"></script> -->
        </body>
      </html>
 