<div class="search-container z-10">
    <input
        wire:model.live.debounce.500ms="query"
        type="search"
        placeholder="Search for rooms..."
        class="search-input"
        wire:click.escape="resetSearch"
        >
    
    @if(strlen($query) > 1)
        <ul class="show" href= "#">
            @forelse($rooms as $room)
                <li onclick="window.location='rooms/{{$room->idRoom}}'" style="cursor: pointer;"><a>{{ $room->name }}</a></li>
            @empty
                <li><a>No room found.</a></li>
            @endforelse
        </ul>
    @endif
</div>
