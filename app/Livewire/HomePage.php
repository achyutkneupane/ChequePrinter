<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Native\Laravel\DataObjects\Printer;

class HomePage extends Component
{
    public $bank = "", $amount, $payee, $crossing = "", $date;

    public string $family, $printerName, $printerDisplayName;
    public array|string $printers = [];
    public Printer|string|null $printer = null;

    public function mount() : void
    {
        $this->family = PHP_OS_FAMILY;
        $this->printers = \Native\Laravel\Facades\System::printers();
        $this->printer = collect($this->printers)->where('isDefault', true)->first();

        $this->printerName = $this->printer ? $this->printer->name : "";
        $this->printerDisplayName = $this->printer ? $this->printer->displayName : "";
    }

    public function printCheque() : void
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

        $output = $pdf->getDomPDF()->getDom()->saveXML();

        $printers = \Native\Laravel\Facades\System::printers();

        $printer = collect($printers)->where('name', $this->printerName)->first();

        \Native\Laravel\Facades\System::print($output, $printer);
    }

    public function savePDF() : void
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

    public function render() : \Illuminate\View\View
    {
        $this->printers = json_encode($this->printers);
        $this->printer = json_encode($this->printer);
        return view('livewire.home-page');
    }
}
