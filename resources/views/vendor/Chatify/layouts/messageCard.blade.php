{{-- -------------------- The default card (white) -------------------- --}}
@if($viewType == 'default')
    @if($from_id != $to_id)
    <div class="message-card" data-id="{{ $id }}">
        <p>{!! nl2br($message) !!}
            {{-- If attachment is a file --}}
        
        @if(@$attachment[2] == 'file')
            <a href="{{ route(['fileName'=>$attachment[0]]) }}" style="color: #595959;" class="file-download">
                <span class="fas fa-file"></span> {{$attachment[1]}}</a>
        @endif
        
        <br>
        <sub title="{{ $fullTime }}" class="message-time">
        <span class="fas fa-{{ $seen > 0 ? 'check-double' : 'check' }} seen"></span> {{ $time }}
        </sub>
    
    </p>
    </div>
    {{-- If attachment is an image --}}
        @if(@$attachment[2] == 'image')
        <div>
            <div class="message-card" >
                <div class="image-file" style="width: auto; height: auto;">
                    <img class="chat-image" src="{{ $attachment[0] }}" style="max-width: 500x; max-height: 400px;background-image: url('{{ $attachment[0] }}')">
                </div>
            </div>
        </div>
        @endif
    @endif
@endif

{{-- -------------------- Sender card (owner) -------------------- --}}
@if($viewType == 'sender')
    <div class="message-card mc-sender" data-id="{{ $id }}" >
        <p>{!! nl2br($message) !!}
                {{-- If attachment is a file --}}
            
            @if(@$attachment[2] == 'file')
                <a href="{{ route(['fileName'=>$attachment[0]]) }}" style="color: #595959;" class="file-download">
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
                <img class="chat-image" src="{{ $attachment[0] }}" style="max-width: 500x; max-height: 400px;background-image: url('{{ $attachment[0] }}')">
            </div>
        </div>
    </div>
    @endif
    
@endif