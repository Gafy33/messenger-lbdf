{{-- -------------------- The default card (white) -------------------- --}}
@if($viewType == 'default')
    @if($from_id != $to_id)
    @if( nl2br($message) != NULL)
        <div class="message-card" data-id="{{ $id }}" >
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
                
                <br>
                <sub title="{{ $fullTime }}" class="message-time">
                <span class="fas fa-{{ $seen > 0 ? 'check-double' : 'check' }} seen"></span> {{ $time }}
                </sub>
            
            </p>
        </div>
        @if(@$attachment[2] == 'image')
        <div>
            <div class="message-card" >
                <div class="image-file" style="width: auto; height: auto;">
                    <img class="chat-image" src="{{ $attachment[0] }}" style="max-width: 400px; max-height: 300px;background-image: url('{{ $attachment[0] }}')">
                </div>
            </div>
        </div>
        @endif  
    @else
        @if(@$attachment[2] == 'image')
        <div>
            <div class="message-card" data-id="{{ $id }}">
                <div class="image-file" style="width: auto; height: auto;">
                    <img class="chat-image" src="{{ $attachment[0] }}" style="max-width: 400px; max-height: 300px;background-image: url('{{ $attachment[0] }}')">
                </div>
                <p>
                    <br>
                    <sub title="{{ $fullTime }}" class="message-time">
                    <span class="fas fa-{{ $seen > 0 ? 'check-double' : 'check' }} seen"></span> {{ $time }}
                    </sub>
                </p>
            </div>
        </div>
        @endif
    @endif
    @endif
@endif

{{-- -------------------- Sender card (owner) -------------------- --}}
@if($viewType == 'sender')
    @if( nl2br($message) != NULL)
        <div class="message-card mc-sender" data-id="{{ $id }}" >
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
                
                <br>
                <sub title="{{ $fullTime }}" class="message-time">
                <span class="fas fa-{{ $seen > 0 ? 'check-double' : 'check' }} seen"></span> {{ $time }}
                </sub>
            
            </p>
        </div>
        @if(@$attachment[2] == 'image')
        <div>
            <div class="message-card mc-sender" >
                <div class="image-file" style="width: auto; height: auto;">
                    <img class="chat-image" src="{{ $attachment[0] }}" style="max-width: 400px; max-height: 300px;background-image: url('{{ $attachment[0] }}')">
                </div>
            </div>
        </div>
        @endif  
    @else
        @if(@$attachment[2] == 'file')
        <div class="message-card mc-sender" data-id="{{ $id }}">
        <p>
        <a href="{{ $attachment[0] }}" style="color: #595959;" class="file-download" target="_blank">
            <span class="fas fa-file"></span> {{$attachment[1]}}</a>
        </p>
        </div>
        @endif
        
        @if(@$attachment[2] == 'image')
        <div>
            <div class="message-card mc-sender" data-id="{{ $id }}">
                <div class="image-file" style="width: auto; height: auto;">
                    <img class="chat-image" src="{{ $attachment[0] }}" style="max-width: 400px; max-height: 300px;background-image: url('{{ $attachment[0] }}')">
                </div>
                <p>
                    <br>
                    <sub title="{{ $fullTime }}" class="message-time">
                    <span class="fas fa-{{ $seen > 0 ? 'check-double' : 'check' }} seen"></span> {{ $time }}
                    </sub>
                </p>
            </div>
        </div>
        @endif
    @endif
    
@endif