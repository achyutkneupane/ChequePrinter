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

        <div class="col-span-3 mt-2">
            <button type="submit" class="bg-[#EA9010] text-white text-sm font-medium rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2.5 cursor-pointer dark:bg-[#EA9010] dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 mr-1">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.72 13.829c-.24.03-.48.062-.72.096m.72-.096a42.415 42.415 0 0 1 10.56 0m-10.56 0L6.34 18m10.94-4.171c.24.03.48.062.72.096m-.72-.096L17.66 18m0 0 .229 2.523a1.125 1.125 0 0 1-1.12 1.227H7.231c-.662 0-1.18-.568-1.12-1.227L6.34 18m11.318 0h1.091A2.25 2.25 0 0 0 21 15.75V9.456c0-1.081-.768-2.015-1.837-2.175a48.055 48.055 0 0 0-1.913-.247M6.34 18H5.25A2.25 2.25 0 0 1 3 15.75V9.456c0-1.081.768-2.015 1.837-2.175a48.041 48.041 0 0 1 1.913-.247m10.5 0a48.536 48.536 0 0 0-10.5 0m10.5 0V3.375c0-.621-.504-1.125-1.125-1.125h-8.25c-.621 0-1.125.504-1.125 1.125v3.659M18 10.5h.008v.008H18V10.5Zm-3 0h.008v.008H15V10.5Z" />
                </svg>
                Print
            </button>
            <span class="text-xs text-gray-500">Printing with: {{ $printerDisplayName }}</span>
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
