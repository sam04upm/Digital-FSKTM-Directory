<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Room;

class RoomSearch extends Component
{
    public $query;  // User input
    public $rooms;  // Search results
    
    public function mount(){
        $this->resetSearch();
    }

    public function resetSearch(){
        $this->query = '';
        $this->rooms = [];
    }

    public function show($id)
    {
        $room = Room::findOrFail($id);
        return view('rooms.show', compact('room'));
    }

    public function render()
    {
        if (strlen($this->query) > 1) {
            $this->rooms = Room::where('name', 'LIKE', '%' . $this->query . '%')
                                ->limit(6)
                                ->get();
        } else {
            $this->rooms = [];
        }
        return view('livewire.room-search', ['rooms' => $this->rooms]);
    }
}