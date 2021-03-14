@extends('layouts.app')

@section('content')

    <div class="container">
      <div class="area">
            <ul class="circles">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
            </ul>
      </div >
      <div class="forms-container">
        <div class="signin-signup">
          <!--  -->
          <form method="POST" action="{{ route('login') }}" class="sign-in-form">
            @csrf
            <div class="imageForm">
              <img src="https://messenger-lbdf.s3.eu-west-3.amazonaws.com/application/astronaut.jpg" width="75px" height="75px" style="border-radius: 75px;">
            </div>
            <h2 class="title">Se connecter</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="off" autofocus/>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Mot de passe" required autocomplete="current-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" style="color: #a8a6a6" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>

            <input type="submit" value="Se connecter" class="btn solid" />
            <br>
            <div class="social-media">
                <div class="bubble">
                  <div class="bubble-text">
                  <p> Tu n'es pas encore inscrit ? Commence par <a href="#register" id="sign-up-btn" style="color: #1F618D;text-decoration: none;"> Créer ton compte </a>. Vite on t'attend ! </p>
                  <!--<br>
                    <p> Tu as oublier ton mot de passe ? Ne panique pas, viens 
                    @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" id="sign-up-btn" style="color: #1F618D;text-decoration: none;"> récupérer ton mot de passe  </a>
                    @endif
                    !</p>-->
                  </div>
                </div>
            </div>
                <div class="imageForm" style="margin-left: -290px; margin-top: 18px">
                <img src="https://messenger-lbdf.s3.eu-west-3.amazonaws.com/application/robot.svg" width="50px" height="50px" style="border-radius: 75px;">
                </div>
          </form>

          
          <!--  -->
          <form method="POST" action="{{ route('register') }}" class="sign-up-form">
            @csrf
            <div class="imageForm">
              <img src="https://messenger-lbdf.s3.eu-west-3.amazonaws.com/application/astronaut.jpg" width="75px" height="75px" style="border-radius: 75px;">
            </div>
            <h2 class="title">S'inscrire</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Username" required autocomplete="off" autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="off">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Mot de passe" required autocomplete="new-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror 
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirme le mot de passe" required autocomplete="new-password">
            </div>
            <input type="submit" class="btn" value="S'inscrire" />
            <br>
            <div class="social-media">
                <div class="bubble">
                  <div class="bubble-text">
                  <p> Tu as déjà un Compte ? Vite, dépêche toi de te <a href="#login" id="sign-in-btn" style="color: #1F618D;text-decoration: none;"> Connecter </a> ! </p>
                </div>
              </div>
            </div>
            <div class="imageForm" style="margin-left: -290px; margin-top: 18px">
                <img src="https://messenger-lbdf.s3.eu-west-3.amazonaws.com/application/robot.svg" width="50px" height="50px" style="border-radius: 75px;">
                </div>
          </form>

          <form class="sign-windows-form">
            <div class="imageForm">
              <img src="https://messenger-lbdf.s3.eu-west-3.amazonaws.com/application/astronaut.jpg" width="75px" height="75px" style="border-radius: 75px;">
            </div>
            <h2 class="title">Télécharger</h2>
                <!--<a href="#">-->
              <div class="bubble">
                  <div class="bubble-text3">
                    <img src="https://messenger-lbdf.s3.eu-west-3.amazonaws.com/application/windows.png" width="50px" height="50px">
                    <p> Windows </p>
                  </div>
              </div>
                <!--</a>-->
            <br>
                <a href="https://messenger-lbdf.s3.eu-west-3.amazonaws.com/application/app-release.apk" style="text-decoration: none">
                <div class="bubble">
                    <div class="bubble-text3">
                    <img src="https://messenger-lbdf.s3.eu-west-3.amazonaws.com/application/android.png" width="50px" height="50px">
                    <p> Android </p>
                    </div>
                </div>
                </a>
            <br>
              <div class="bubble">
              <div class="bubble-text3">
                <img src="https://messenger-lbdf.s3.eu-west-3.amazonaws.com/application/apple.png" width="50px" height="50px">
                <p> Apple </p>
              </div>  
            </div>
            <br>

          </form>

        </div>
      </div>

      <div class="panels-container" style="text-align: center;">
        <!--  -->
        <div class="panel left-panel">
          <div class="content2">
            <img src="https://messenger-lbdf.s3.eu-west-3.amazonaws.com/application/log2.svg" class="image" alt=""/>
          </div>
          <div class="content">
            <h3>Nom de l'application</h3>
            <br>
            <p>Tu veux l'application <br> pour Windows et Android ? </p>
            <button id="sign-windows-btn" class="btn transparent"> Télécharger </button>
          </div>
        </div>
        <!--  -->
        <div class="panel right-panel">
          <div class="content">
            <div class="content2">
            <img src="https://messenger-lbdf.s3.eu-west-3.amazonaws.com/application/log2.svg" class="image" alt=""/>
          </div>
          <div class="content" style="">
            <h3>Nom de l'application</h3>
          </div>
          <br>
          <div class="retour_dl">
          <button id="sign-windows-in-btn" class="btn transparent"> Retour login </button>
          </div>
        </div>

      </div>
    </div>

    <script src="app_login.js"></script>

@endsection
