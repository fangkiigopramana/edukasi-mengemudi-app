<?php

namespace App\Livewire;

use App\Models\Poster;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        $posters = Poster::all();
        return view('livewire.home', compact('posters'));
    }
}
