<?php

namespace App\Http\Livewire;

// use Livewire\Component;
use LivewireCalendar;

class MinhaAgenda extends LivewireCalendar
{
  // public function render()
  // {
    // return view('livewire.minha-agenda');
  // }

public function events() : Collection
{
    return collect([
        [
            'id' => 1,
            'title' => 'Breakfast',
            'description' => 'Pancakes! 🥞',
            'date' => Carbon::today(),
        ],
        [
            'id' => 2,
            'title' => 'Meeting with Pamela',
            'description' => 'Work stuff',
            'date' => Carbon::tomorrow(),
        ],
    ]);
}
}
