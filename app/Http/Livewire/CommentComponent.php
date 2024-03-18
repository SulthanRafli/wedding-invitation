<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use Livewire\Component;

class CommentComponent extends Component
{
    public $nama;
    public $kehadiran;
    public $ucapan;
    public $image;

    public function saveData()
    {
        Comment::create([
            'nama' => $this->nama,
            'kehadiran' => $this->kehadiran,
            'ucapan' => $this->ucapan,
            'image' => $this->image,
        ]);

        $this->reset(['nama', 'kehadiran', 'ucapan']);

        $this->emit('dataUpdated');
    }

    public function render()
    {
        $comment = Comment::all();

        return view('livewire.comment-component', compact(['comment']));
    }
}
