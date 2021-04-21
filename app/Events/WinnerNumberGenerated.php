<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class WinnerNumberGenerated
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $number;

    public function __construct($number)
    {
        $this->number = $number;
    }


    public function broadcastOn()
    {
        Log::debug("Number: {$this->number}");
        return new Channel('game');
    }
}
