<?php

namespace Tests\Unit;

use App\Http\Livewire\Notify;
use Livewire\Livewire;
use Tests\TestCase;

class NotifyTest extends TestCase
{
    public function test_Notify()
    {
        Livewire::test(Notify::class)
            ->call('save')
            ->assertNotified(__('Saved successfully'));
    }
}
