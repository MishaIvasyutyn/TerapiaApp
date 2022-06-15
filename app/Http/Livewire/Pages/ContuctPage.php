<?php

namespace App\Http\Livewire\Pages;

use App\Contacform;
use Livewire\Component;

class ContuctPage extends Component
{
    public $name;
    public $phone;
    public $message;
    public $success;


    public function updated($field)
    {
        $this->validateOnly($field, [
            'name' => 'required|min:4',
            'phone' => 'required|digits:10',
            'message' => 'required|min:6',
        ]);
    }

    public function saveContact()
    {
        $validatedData = $this->validate([
            'name' => 'required|min:4',
            'phone' => 'required|digits:10',
            'message' => 'required|min:6',
        ]);
        Contacform::create($validatedData);
        session()->flash('success', 'Post successfully updated.');
        $this->reset('message', 'phone', 'name');

    }

    public function render()
    {
        return view('livewire.pages.contuct-page');
    }
}
