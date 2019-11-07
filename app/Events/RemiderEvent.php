<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class RemiderEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    // use InteractsWithSockets, SerializesModels;
    public $user;
    public $remider;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($user, $remider)
    {
        $this->user = $user;
        $this->remider = $remider;
        //  dd(7);
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
