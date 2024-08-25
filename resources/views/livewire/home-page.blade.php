<form class="p-4" wire:submit="printCheque">
    <div class="grid grid-cols-6 gap-x-6 gap-y-2">
        <div class="col-span-3">
            <label for="bank" class="select-none block mb-2 text-sm font-medium text-[#453F3C] dark:text-white">Bank</label>
            <select id="bank" class="bg-white border border-gray-300 text-[#453F3C] text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" wire:model="bank">
                <option disabled value="">Choose a bank</option>
                <option value="Nabil">Nabil Bank</option>
                <option value="Nepal">Nepal Bank</option>
                <option value="Himalayan">Himalayan Bank</option>
                <option value="Everest">Everest Bank</option>
            </select>
            @error('bank')
            <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="col-span-3">
            <label for="date" class="select-none block mb-2 text-sm font-medium text-[#453F3C] dark:text-white">Date</label>
            <input type="date" id="date" class="bg-white border border-gray-300 text-[#453F3C] text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" wire:model="date" />
            @error('date')
            <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="col-span-6">
            <label for="payee" class="select-none block mb-2 text-sm font-medium text-[#453F3C] dark:text-white">Payee</label>
            <input type="text" id="payee" class="bg-white border border-gray-300 text-[#453F3C] text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Achyut Neupane" wire:model="payee" />
            @error('payee')
            <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="col-span-3">
            <label for="amount" class="select-none block mb-2 text-sm font-medium text-[#453F3C] dark:text-white">Amount</label>
            <input type="number" id="amount" class="bg-white border border-gray-300 text-[#453F3C] text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="10000" wire:model="amount" />
            @error('amount')
            <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="col-span-3">
            <label for="crossing" class="select-none block mb-2 text-sm font-medium text-[#453F3C] dark:text-white">Crossing</label>
            <select id="crossing" class="bg-white border border-gray-300 text-[#453F3C] text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" wire:model="crossing">
                <option disabled value="">Choose a crossing</option>
                <option value="cross">Cross A/C Payee</option>
                <option value="no-cross">No Crossing</option>
            </select>
            @error('crossing')
            <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="col-span-3 mt-2 w-full">
            <div class="relative inline-block text-left w-full">
                <div class="flex justify-center w-full">
                    <button type="submit" class=" w-full py-3 px-4 inline-flex justify-center items-center gap-2 first:rounded-l-lg first:ml-0 last:rounded-r-lg border font-medium bg-[#EA9010] text-white align-middle hover:bg-[#cc7500] focus:z-10 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 mr-1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.72 13.829c-.24.03-.48.062-.72.096m.72-.096a42.415 42.415 0 0 1 10.56 0m-10.56 0L6.34 18m10.94-4.171c.24.03.48.062.72.096m-.72-.096L17.66 18m0 0 .229 2.523a1.125 1.125 0 0 1-1.12 1.227H7.231c-.662 0-1.18-.568-1.12-1.227L6.34 18m11.318 0h1.091A2.25 2.25 0 0 0 21 15.75V9.456c0-1.081-.768-2.015-1.837-2.175a48.055 48.055 0 0 0-1.913-.247M6.34 18H5.25A2.25 2.25 0 0 1 3 15.75V9.456c0-1.081.768-2.015 1.837-2.175a48.041 48.041 0 0 1 1.913-.247m10.5 0a48.536 48.536 0 0 0-10.5 0m10.5 0V3.375c0-.621-.504-1.125-1.125-1.125h-8.25c-.621 0-1.125.504-1.125 1.125v3.659M18 10.5h.008v.008H18V10.5Zm-3 0h.008v.008H15V10.5Z" />
                        </svg>
                        Print
                    </button>
                    <div class="py-3 px-2 pl-0 inline-flex justify-center items-center gap-2 -ml-px first:rounded-l-lg first:ml-0 last:rounded-r-lg border font-medium bg-[#EA9010] text-white align-middle hover:bg-[#cc7500] focus:z-10 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all text-sm relative">
                        <button type="button" id="dropdownButton" class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 ml-2">
                                <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                            </svg>
                        </button>
                        <ul id="dropdownMenu" class="absolute -left-0 mt-2 w-[300px] bg-white rounded-md shadow-lg z-10 text-[#453F3C] hidden">
                            @forelse(\Native\Laravel\Facades\System::printers() as $printer)
                                <li wire:click="setPrinter('{{ $printer->name }}')" class="cursor-pointer flex items-center py-2 px-4 hover:bg-gray-100">
                                    {{ $printer->displayName }} @if($printer->name === $printerName) <span class="text-xs text-[#EA9010] ml-4">(Selected)</span> @endif
                                </li>
                            @empty
                                <li class="cursor-pointer flex items-center py-2 px-4 hover:bg-gray-100">
                                    No printers found
                                </li>
                            @endforelse
                        </ul>
                    </div>
                </div>
                <span class="text-xs text-gray-500">Printing with: {{ $printerDisplayName }}</span>
            </div>
        </div>

        <div class="col-span-3 mt-2">
            <button type="button" class="bg-[#EA9010] text-white text-sm font-medium rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2.5 cursor-pointer dark:bg-[#EA9010] dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 flex items-center justify-center" wire:click="savePDF">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 mr-1">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 8.25H7.5a2.25 2.25 0 0 0-2.25 2.25v9a2.25 2.25 0 0 0 2.25 2.25h9a2.25 2.25 0 0 0 2.25-2.25v-9a2.25 2.25 0 0 0-2.25-2.25H15M9 12l3 3m0 0 3-3m-3 3V2.25" />
                </svg>
                Save PDF
            </button>
        </div>
    </div>
</form>

<script>
    document.getElementById('dropdownButton').addEventListener('click', function() {
        document.getElementById('dropdownMenu').classList.toggle('hidden');
    });

    document.addEventListener('click', function(event) {
        if (!event.target.closest('#dropdownButton')) {
            document.getElementById('dropdownMenu').classList.add('hidden');
        }
    });
</script>
