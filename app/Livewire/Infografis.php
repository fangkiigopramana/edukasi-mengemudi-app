<?php

namespace App\Livewire;

use App\Models\Poster;
use Livewire\Component;

class Infografis extends Component
{
    public function render()
    {
        $posters = Poster::all();
        return view('livewire.infografis', compact('posters'));
    }
}
