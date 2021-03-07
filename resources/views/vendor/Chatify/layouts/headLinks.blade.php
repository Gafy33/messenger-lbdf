<title> APP </title>
{{-- Meta tags --}}
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="route" content="{{ $route }}">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="url" content="{{ url('').'/'.config('chatify.path') }}" data-user="{{ Auth::user()->id }}">

{{-- scripts --}}
<script src="{{ asset('js/chatify/font.awesome.min.js') }}"></script>
<script src="{{ asset('js/chatify/autosize.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script src='https://unpkg.com/nprogress@0.2.0/nprogress.js'></script>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript" src="{{ asset('js/jquery.emojipicker.js') }}"></script>

{{-- styles --}}
<link rel='stylesheet' href='https://unpkg.com/nprogress@0.2.0/nprogress.css'/>
<link href="{{ asset('css/chatify/style.css') }}" rel="stylesheet" />
<link href="{{ asset('css/chatify/'.$dark_mode.'.mode.css') }}" rel="stylesheet" />
<link href="{{ asset('css/app.css') }}" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.emojipicker.css')}}">

{{-- Messenger Color Style--}}
@include('Chatify::layouts.messengerColor')


<!-- Emoji Data -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.emojipicker.tw.css') }}">
<script type="text/javascript" src="{{ asset('js/jquery.emojis.js')}} "></script>