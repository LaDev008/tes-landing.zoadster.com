<?php

namespace App\Http\Livewire;

use App\Models\CommentWinner;
use App\Models\EventComment;
use App\Models\Site;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;

class EventCard extends Component
{
    use WithFileUploads;

    public $event, $sites, $site_id, $user_id, $photo, $answer, $site_event_id, $participated = false, $comment_winners;

    protected $rules = [
        'site_id' => 'required',
        'user_id' => 'required',
        'answer' => 'required|max:255',
        'site_event_id' => 'required',
    ];

    public function mount()
    {
        $this->sites = Site::all();
        $this->user_id = Auth::id();
        $this->site_event_id = $this->event->id;
        $this->site_id = 1;

        if ($this->event->eventComments != null) {
            $this->participated = !$this->event->eventComments->where('user_id', Auth::id())->isEmpty();
        }
    }

    public function submit()
    {
        $this->validate();

        $comment = EventComment::create([
            'site_event_id' => $this->site_event_id,
            'user_id' => $this->user_id,
            'site_id' => $this->site_id,
            'answer' => $this->answer,
        ]);

        if ($this->event->need_upload) {
            $extension = $this->photo->getClientOriginalExtension();
            $newname = Auth::user()->name . time() . ".$extension";
            $this->photo->storeAs($this->event->picture_folder, $newname);
            $image_path = "/storage/" . $this->event->picture_folder . "/$newname";

            $comment->image = $image_path;
            $comment->save();
        }

        $this->participated = true;

        

        return redirect("/event");
    }

    public function render()
    {
        return view('livewire.event-card');
    }
}
