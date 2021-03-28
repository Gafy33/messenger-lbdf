{{-- -------------------- The default card (white) -------------------- --}}
@if($viewType == 'default')
    @if($from_id != $to_id)
    @if( nl2br($message) != NULL)
        <div data-id="{{ $id }}">
            <div class="message-card-user" style="align-items: center;">
                <div class="avatar av-message header-avatar" style="margin: 0px 3px;margin-top: auto;background-image: url('{{ $avatar_from_id }}') ">
                </div>
                <span title="{{ $fullTime }}" class="message-time" style="font-size: 10px;"> {{ $time }} </span>
            </div>
            <div class="message-card" >  
            <p>
                        @if(substr(nl2br($message), 0, 8) == "https://")
                            <a href="{!! nl2br($message) !!}" target="_blank"> {!! nl2br($message) !!} </a> 
                        @else
                            @if(substr($message, 0, 7) == "http://")
                                <a href="{!! nl2br($message) !!}" target="_blank"> {!! nl2br($message) !!} </a>
                            @else
                                {!! nl2br($message) !!}
                            @endif
                        @endif
                
                @if(@$attachment[2] == 'file')
                    <a href="{{ route(['fileName'=>$attachment[0]]) }}" style="color: #595959;" class="file-download" target="_blank">
                        <span class="fas fa-file"></span> {{$attachment[1]}}</a>
                @endif
            </p>
            </div>
        </div>

        @if(@$attachment[2] == 'image')
        <div>
            <div class="message-card" >
                <div class="image-file" style="width: auto; height: auto;">
                    <img class="chat-image" src="{{ $attachment[0] }}" style="max-width: 400px; max-height: 300px;border-radius: 5px;background-image: url('{{ $attachment[0] }}')">
                </div>
            </div>
        </div>
        @endif  
    @else
        @if(@$attachment[2] == 'file')
        <div data-id="{{ $id }}">
            <div class="message-card-user" style="align-items: center;">
                <div class="avatar av-message header-avatar" style="margin: 0px 3px;margin-top: auto;background-image: url('https://messenger-lbdf.s3.eu-west-3.amazonaws.com/avatars/avatar.png') ">
                </div>
                <span title="{{ $fullTime }}" class="message-time" style="font-size: 10px;"> {{ $time }} </span>
            </div>
            <div class="message-card" > 
                <p>
                <a href="{{ $attachment[0] }}" style="color: #595959;" class="file-download" target="_blank">
                    <span class="fas fa-file"></span> {{$attachment[1]}}</a>
                </p>
            </div>
        </div>
        @endif
        
        @if(@$attachment[2] == 'image')
        <div>
            <div data-id="{{ $id }}" style="align-items: center;">
                <div class="message-card-user" >
                    <div class="avatar av-message header-avatar" style="margin: 0px 3px;margin-top: auto;background-image: url('https://messenger-lbdf.s3.eu-west-3.amazonaws.com/avatars/avatar.png') ">
                    </div>
                    <span title="{{ $fullTime }}" class="message-time" style="font-size: 10px;"> {{ $time }} </span>
                    
                </div>
                <div class="message-card" > 
                <div class="image-file" style="width: auto; height: auto;">
                    <img class="chat-image" src="{{ $attachment[0] }}" style="max-width: 400px; max-height: 300px;border-radius: 5px;background-image: url('{{ $attachment[0] }}')">
                </div>
                </div>
            </div>
        </div>
        @endif
    @endif
    @endif
@endif

{{-- -------------------- Sender card (owner) -------------------- --}}
@if($viewType == 'sender')
    @if( nl2br($message) != NULL)
        <div class="mc-sender" data-id="{{ $id }}" >
            <div class="message-card-user" style="align-items: center;">
                <div class="avatar av-message header-avatar" style="margin: 0px 3px;margin-top: auto;background-image: url('{{ Auth::user()->avatar }}') ">
                </div>
                <span title="{{ $fullTime }}" class="message-time" style="font-size: 10px;"> {{ $time }} </span>
            </div>
            <div class="message-card">
                    <p>
                                @if(substr(nl2br($message), 0, 8) == "https://")
                                    <a href="{!! nl2br($message) !!}" target="_blank"> {!! nl2br($message) !!} </a> 
                                @else
                                    @if(substr($message, 0, 7) == "http://")
                                        <a href="{!! nl2br($message) !!}" target="_blank"> {!! nl2br($message) !!} </a>
                                    @else
                                        {!! nl2br($message) !!}
                                    @endif
                                @endif
                        
                        @if(@$attachment[2] == 'file')
                            <a href="{{ route(['fileName'=>$attachment[0]]) }}" style="color: #595959;" class="file-download" target="_blank">
                                <span class="fas fa-file"></span> {{$attachment[1]}}</a>
                        @endif
                    </p>
                    
            </div>
        </div>
        @if(@$attachment[2] == 'image')
        <div class="mc-sender">
            <div class="message-card" >
                <div class="image-file" style="width: auto; height: auto;">
                    <img class="chat-image" src="{{ $attachment[0] }}" style="max-width: 350px; max-height: 250px;border-radius: 5px;background-image: url('{{ $attachment[0] }}')">
                </div>
            </div>
        </div>
        @endif
    </div> 
    @else
        @if(@$attachment[2] == 'file')
        <div class="mc-sender" data-id="{{ $id }}">
            <div class="message-card-user" style="align-items: center;">
                <div class="avatar av-message header-avatar" style="margin: 0px 3px;margin-top: auto;background-image: url('{{ Auth::user()->avatar }}') ">
                </div>
                <span title="{{ $fullTime }}" class="message-time" style="font-size: 10px;"> {{ $time }} </span>
            </div>
            <div class="message-card" >  
                <p>
                <a href="{{ $attachment[0] }}" style="color: #595959;" class="file-download" target="_blank">
                    <span class="fas fa-file"></span> {{$attachment[1]}}</a>
                </p>
            </div>
        </div>
        @endif
        
        @if(@$attachment[2] == 'image')
        <div>
            <div  class="mc-sender" data-id="{{ $id }}">
                <div class="message-card-user" style="align-items: center;">
                    <div class="avatar av-message header-avatar" style="margin: 0px 3px;margin-top: auto;background-image: url('{{ Auth::user()->avatar }}') ">
                    </div>
                    <span title="{{ $fullTime }}" class="message-time" style="font-size: 10px;"> {{ $time }} </span>
                </div>
                <div class="message-card" >
                <div class="image-file" style="width: auto; height: auto;">
                    <img class="chat-image" src="{{ $attachment[0] }}" style="max-width: 350px; max-height: 250px;border-radius: 5px;background-image: url('{{ $attachment[0] }}')">
                </div>
                </div>
            </div>
        </div>
        @endif
    @endif
@endif