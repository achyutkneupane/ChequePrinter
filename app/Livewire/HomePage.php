<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class HomePage extends Component
{
    public $bank = "", $amount, $payee, $crossing = "", $date;

    public $family;

    public function mount()
    {
        $system = new \Native\Laravel\Facades\System();
        $family = PHP_OS_FAMILY;
    }

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

//        open file

        if ($this->family === "Windows") {
            $file = Storage::disk('desktop')->path("cheques/" . $file_name);

            exec("start " . $file);
        } else if ($this->family === "Darwin") {
            $file = Storage::disk('desktop')->path("cheques/" . $file_name);

            exec("open " . $file);
        } else if ($this->family === "Linux") {
            $file = Storage::disk('desktop')->path("cheques/" . $file_name);

            exec("xdg-open " . $file);
        }
    }

    public function render()
    {
        return view('livewire.home-page');
    }
}
