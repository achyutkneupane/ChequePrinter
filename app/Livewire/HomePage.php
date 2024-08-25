<?php

namespace App\Livewire;

use Livewire\Component;

class HomePage extends Component
{
    public $bank = "", $amount, $payee, $crossing = "", $date;
    public function printCheque()
    {
        $this->validate([
            'bank' => 'required',
            'amount' => ['required', 'numeric'],
            'payee' => ['required', 'string', 'max:255'],
            'crossing' => ['required'],
            'date' => ['required', 'date'],
        ], [
            'bank.required' => "Select one of the banks",
            'amount.required' => "Enter the amount",
            'amount.numeric' => "Amount must be a number",
            'payee.required' => "Enter the payee name",
            'payee.string' => "Payee name must be a string",
            'payee.max' => "Payee name must be less than 255 characters",
            'crossing.required' => "Select one of the crossings",
            'date.required' => "Enter the date",
            'date.date' => "Date must be a valid date",
        ]);

        dd($this->bank, $this->amount, $this->payee, $this->crossing, $this->date);
    }
    public function render()
    {
        return view('livewire.home-page');
    }
}
