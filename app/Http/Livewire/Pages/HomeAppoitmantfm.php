<?php

namespace App\Http\Livewire\Pages;

use App\Appointment;
use Illuminate\Http\Request;
use Livewire\Component;

class HomeAppoitmantfm extends Component
{
    public $name;
    public $phone;
    public $message;
    public $date;
    public $time;

    public function mount()
    {
        $this->date = date("Y-m-d");
    }

    public function updated($field)
    {
        $this->validateOnly($field, [
            'name' => 'required|min:4',
            'phone' => 'required|unique:appointments|digits:10',
            'time' => 'required',
            'date' => 'required',
        ]);
    }

    public function HomeAppoitmantfm(Request $request)
    {
        $validatedData = $this->validate([
            'name' => 'required|min:4',
            'phone' => 'required|unique:appointments|digits:10',
            'time' => 'required',
            'date' => 'required',
        ]);

        Appointment::create($validatedData);
        $this->reset('message', 'phone', 'name', 'time');
        session()->put('ok', 'done');
//        $id = $request->session()->get('id');
//        Review::where('provider_id', $id)->update(['phone' => $validatedData['phone'], 'message' => $validatedData['message']]);
//        session()->flash('success', 'Post successfully updated.');
//        $this->reset('message', 'phone', 'name');
    }

    public function render()
    {
        $free_time = array('10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00', '19:00');
        $test_time = Appointment::where('date', $this->date)->pluck('time')->toArray();
        $new_times = array_diff($free_time, $test_time);
        return view('livewire.pages.home-appoitmantfm')->with(['new_times' => $new_times]);
    }
}
