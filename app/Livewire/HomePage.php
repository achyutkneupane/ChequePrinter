<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Validate;
use Native\Laravel\DataObjects\Printer;

class HomePage extends Component
{
    #[Validate('required', message: "Select one of the banks")]
    #[Validate('string', message: "Bank must be a string")]
    public string $bank = "";

    #[Validate('required', message: "Enter the amount")]
    #[Validate('numeric', message: "Amount must be a number")]
    public float $amount;

    #[Validate('required', message: "Enter the payee name")]
    #[Validate('string', message: "Payee name must be a string")]
    #[Validate('max:255', message: "Payee name must be less than 255 characters")]
    public string $payee;

    #[Validate('required', message: "Select one of the crossings")]
    public string $crossing = "";

    #[Validate('required', message: "Enter the date")]
    #[Validate('date', message: "Date must be a valid date")]
    public string $date;

    public string $family;
    public string $printerName;
    public string $printerDisplayName;
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
        $this->validate();

        $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadView('cheque', [
            'amount_num' => $this->amount,
            'payee' => $this->payee,
            'show_crossing' => $this->crossing === "cross",
            'date' => $this->date
        ]);

        $output = $pdf->getDomPDF()->getDom()->saveXML();

        $printers = \Native\Laravel\Facades\System::printers();

        $printer = collect($printers)->where('name', $this->printerName)->first();

        \Native\Laravel\Facades\System::print($output, $printer);
    }

    public function setPrinter($printer) : void
    {
        $printers = \Native\Laravel\Facades\System::printers();
        $printer = collect($printers)->where('name', $printer)->first();

        $this->printer = $printer;
        $this->printerName = $printer->name;
        $this->printerDisplayName = $printer->displayName;

    }

    public function savePDF() : void
    {
        $this->validate();

        $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadView('cheque', [
            'amount_num' => $this->amount,
            'payee' => $this->payee,
            'show_crossing' => $this->crossing === "cross",
            'date' => $this->date
        ]);

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
