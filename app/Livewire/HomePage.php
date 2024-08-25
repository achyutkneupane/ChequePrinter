<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class HomePage extends Component
{
    public $bank = "", $amount, $payee, $crossing = "", $date;
    public function printCheque()
    {
//        $this->validate([
//            'bank' => 'required',
//            'amount' => ['required', 'numeric'],
//            'payee' => ['required', 'string', 'max:255'],
//            'crossing' => ['required'],
//            'date' => ['required', 'date'],
//        ], [
//            'bank.required' => "Select one of the banks",
//            'amount.required' => "Enter the amount",
//            'amount.numeric' => "Amount must be a number",
//            'payee.required' => "Enter the payee name",
//            'payee.string' => "Payee name must be a string",
//            'payee.max' => "Payee name must be less than 255 characters",
//            'crossing.required' => "Select one of the crossings",
//            'date.required' => "Enter the date",
//            'date.date' => "Date must be a valid date",
//        ]);

        $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadView('cheque');

        $uuid = \Ramsey\Uuid\Uuid::uuid4();

        $payee = $this->payee;

        $file_name = $payee ? $payee . '/' . $uuid . '.pdf' : $uuid . '.pdf';

        Storage::disk('desktop')->put("cheques/" . $file_name, $pdf->output());
    }

    public function savePDF()
    {
//        $this->validate([
//            'bank' => 'required',
//            'amount' => ['required', 'numeric'],
//            'payee' => ['required', 'string', 'max:255'],
//            'crossing' => ['required'],
//            'date' => ['required', 'date'],
//        ], [
//            'bank.required' => "Select one of the banks",
//            'amount.required' => "Enter the amount",
//            'amount.numeric' => "Amount must be a number",
//            'payee.required' => "Enter the payee name",
//            'payee.string' => "Payee name must be a string",
//            'payee.max' => "Payee name must be less than 255 characters",
//            'crossing.required' => "Select one of the crossings",
//            'date.required' => "Enter the date",
//            'date.date' => "Date must be a valid date",
//        ]);

        $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadView('cheque');

        $uuid = \Ramsey\Uuid\Uuid::uuid4();

        $payee = $this->payee;

        $file_name = $payee ? $payee . '/' . $uuid . '.pdf' : $uuid . '.pdf';

        Storage::disk('desktop')->put("cheques/" . $file_name, $pdf->output());
    }

    public function render()
    {
        return view('livewire.home-page');
    }
}
