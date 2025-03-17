<?php

namespace App\Livewire;

use App\Models\Video;
use Livewire\Component;

class Videos extends Component
{
    public function render()
    {
        $videos = Video::all();
        return view('livewire.videos', compact('videos'));
    }
}
