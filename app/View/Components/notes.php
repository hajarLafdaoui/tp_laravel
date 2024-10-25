<?php
namespace App\View\Components;

use Illuminate\View\Component;

class NotesList extends Component
{
    public $notes;
    public $array;

    public function __construct($notes = null, $array = null)
    {
        $this->notes = $notes;
        $this->array = $array;
    }

    public function render()
    {
        return view('components.notes');
    }
}
