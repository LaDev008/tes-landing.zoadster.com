<?php

namespace App\Http\Livewire\Admin\Components;

use App\Models\CommentWinner;
use App\Models\EventComment;
use App\Models\WinnerList;
use Livewire\Component;

class ChooseWinner extends Component
{
    public $comment, $winner_lists, $user_id, $event_comment_id, $winner_list_id;

    public function mount()
    {
        $this->winner_lists = WinnerList::where('id', "<", 5)->get();
        $this->event_comment_id = $this->comment->id;
        $this->user_id = $this->comment->user_id;
        $check = $this->comment->commentWinners->firstWhere('user_id', $this->user_id);
        if ($check != null && $check->winner_list_id < 5) {
            $this->winner_list_id = $check->winner_list_id;
        } else {
            $this->winner_list_id = 4;
        }
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
            ]);
            $check2 = $this->comment->commentWinners()->firstWhere('winner_list_id', $this->winner_list_id);

            if ($check2) {
                $check2->winner_list_id = $check->winner_list_id;
                $check2->save();
            }
        } else {
            $comments = $this->comment->siteEvent->commentWinners;
            foreach ($comments as $data) {
                if ($data->winner_list_id == $this->winner_list_id and $data->winner_list_id <= 3) {
                    $data->winner_list_id = $check->winner_list_id;
                    $data->save();
                }
            }
            $check->winner_list_id = $this->winner_list_id;
            $check->save();
        }
        return redirect()->route('events.show', $this->comment->site_event_id);
    }

    public function render()
    {
        return view('livewire.admin.components.choose-winner');
    }
}
