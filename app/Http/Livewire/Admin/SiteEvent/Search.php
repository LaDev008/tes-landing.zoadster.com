<?php

namespace App\Http\Livewire\Admin\SiteEvent;

use App\Models\EventComment;
use Livewire\Component;

class Search extends Component
{
    public $search = '', $event;

    protected $queryString = ['search'];

    public function mount()
    {
        $comments = EventComment::with('user', 'commentWinners')->where('site_event_id', $this->event->id)->where('answer', 'like', '%' . $this->search . '%')->orderBy('created_at')->get();
    }

    public function render()
    {
        return view('livewire.admin.site-event.search', [
            'comments' => EventComment::with('user', 'commentWinners')->where('site_event_id', $this->event->id)->where('answer', 'like', '%' . $this->search . '%')->orderBy('created_at')->get()

        ]);
    }
}
