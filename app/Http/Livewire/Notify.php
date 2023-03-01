<?php

namespace App\Http\Livewire;

use Filament\Notifications\Notification;
use Livewire\Component;

class Notify extends Component
{
    public function render()
    {
        return view('livewire.notify');
    }

    public function save()
    {
        Notification::make()
            ->title('Saved successfully')
            ->send();
    }
}
