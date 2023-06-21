<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class CommentPostedEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $post_id;

    public function __construct($post_id)
    {
        $this->post_id = $post_id;
    }
    public function broadcastOn()
    {
        return ['comment-posted-channel'];
    }

    public function broadcastAs()
    {
        return 'comment-posted-event';
    }
}
