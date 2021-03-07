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
           <p>
            {{ Auth::user()->name}}
                        <a href="./app">Messenger</a>
                        <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                         {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                         @csrf
                        </form>
                    </p>

      </div>
    </div>

    <div class="panels-container" style="text-align: center;">
      <!--  -->
      <div class="panel left-panel">
        <div class="content2">
          <img src="img/log2.svg" class="image" alt=""/>
        </div>
        <div class="content">
          <h3>Nom de l'application</h3>
        </div>
      </div>

    </div>
  </div>


@endsection