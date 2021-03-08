@extends('layouts.app')

@section('content')


    <div class="container2">
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
            <form class="sign-in-form">
                <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSeSsi3VYbS4E0EunyxH9_tBeibgFwTWwIZ_C33S0R4BmBKZsw/viewform?embedded=true" width="85%" height="700" frameborder="0" marginheight="0" marginwidth="0">Chargement…</iframe>
                <div class="bubble">
                    <div class="bubble-text">
                    <p> <a href="{{ route(config('chatify.path')) }}" style="color: #1F618D;text-decoration: none;"> Retour App </a> </p>
                    </div>
                </div>
            </form>

          

            </div>
        </div>

    </div>


@endsection
