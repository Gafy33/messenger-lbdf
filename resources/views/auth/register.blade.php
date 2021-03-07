<form method="POST" action="{{ route('register') }}" class="sign-up-form">
    @csrf
    <div class="imageForm">
      <img src="img/astronaut.jpg" width="75px" height="75px" style="border-radius: 75px;">
    </div>
    <h2 class="title">S'inscrire</h2>
    <div class="input-field">
      <i class="fas fa-user"></i>
      <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Username" required autocomplete="name" autofocus>

        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="input-field">
      <i class="fas fa-envelope"></i>
      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email">
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
        <img src="img/robot.svg" width="50px" height="50px" style="border-radius: 75px;">
        </div>
  </form>