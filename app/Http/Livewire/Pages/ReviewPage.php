<?php

namespace App\Http\Livewire\Pages;

use App\Review;
use Illuminate\Http\Request;
use Livewire\Component;

class ReviewPage extends Component
{
    public $name;
    public $phone;
    public $message;
    public $review;
    public $messexist;

    public function mount(Request $request)
    {
        $id = $request->session()->get('id');
        $this->messexist = Review::where('provider_id', $id)->first();
    }

    public function updated($field)
    {
        $this->validateOnly($field, [
            'phone' => 'required|unique:reviews|digits:10',
            'message' => 'required|min:40',
        ]);
    }

    public function leaveReview(Request $request)
    {
        $validatedData = $this->validate([
            'phone' => 'required|unique:reviews|digits:10',
            'message' => 'required|min:40',
        ]);
        $id = $request->session()->get('id');
        Review::where('provider_id', $id)->update(['phone' => $validatedData['phone'], 'message' => $validatedData['message']]);
        session()->flash('success', 'Post successfully updated.');
        $this->reset('message', 'phone', 'name');
    }

    public function render()
    {
        return view('livewire.pages.review-page');
    }
}
