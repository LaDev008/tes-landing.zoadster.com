<?php

namespace App\Http\Livewire\Admin\Components;

use Livewire\Component;
use App\Models\CommentWinner;

class ChooseFailed extends Component
{
    public $comment, $user_id, $event_comment_id, $winner_list_id, $reason = '';

    public function mount()
    {
        $this->event_comment_id = $this->comment->id;
        $this->user_id = $this->comment->user_id;
        $this->winner_list_id = 5;
    }

    public function submit()
    {
        $check = $this->comment->commentWinners->firstWhere('user_id', $this->user_id);
        if ($check == null) {
            $winner = CommentWinner::create([
                'user_id' => $this->user_id,
                'event_comment_id' => $this->event_comment_id,
                'winner_list_id' => $this->winner_list_id,
                'site_event_id' => $this->comment->site_event_id,
                'failed_reason' => $this->reason,
            ]);
        } else {
            $check->winner_list_id = $this->winner_list_id;
            $check->failed_reason = $this->reason;
            $check->save();
        }

        return redirect()->route('events.show', $this->comment->id);
    }

    public function render()
    {
        return view('livewire.admin.components.choose-failed');
    }
}
