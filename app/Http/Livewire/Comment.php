<?php

namespace App\Http\Livewire;

use App\Models\Comment as ModelsComment;
use Livewire\Component;

class Comment extends Component
{
    public $post_id = '';
    public $comments = [];

    protected $listeners = ['updateComments'];

    public function updateComments($post_id)
    {
        if($this->post_id == $post_id){
            $this->comments = (new ModelsComment())->where('post_id', $post_id)->with('user')->get();
        }
    }

    public function mount($post_id){
        $this->post_id = $post_id;
        $this->comments = (new ModelsComment())->where('post_id', $post_id)->with('user')->get();
    }

    public function render()
    {
        return view('livewire.comment');
    }
}
