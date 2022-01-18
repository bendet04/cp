<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PublicProfil extends Component
{
    public function render()
    {
        return view('livewire.public-profil')->extends('layouts.public-app');;
    }
}
