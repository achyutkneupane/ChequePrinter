<div class="p-4">
    <div class="grid grid-cols-6 gap-x-6 gap-y-2">
        <div class="col-span-3">
            <label for="bank" class="block mb-2 text-sm font-medium text-[#453F3C] dark:text-white">Bank</label>
            <select id="bank" class="bg-white border border-gray-300 text-[#453F3C] text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected disabled>Choose a bank</option>
                <option value="Nabil">Nabil Bank</option>
                <option value="Nepal">Nepal Bank</option>
                <option value="Himalayan">Himalayan Bank</option>
                <option value="Everest">Everest Bank</option>
            </select>
        </div>

        <div class="col-span-3">
            <label for="date" class="block mb-2 text-sm font-medium text-[#453F3C] dark:text-white">Date</label>
            <input type="date" id="date" class="bg-white border border-gray-300 text-[#453F3C] text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
        </div>

        <div class="col-span-6">
            <label for="payee" class="block mb-2 text-sm font-medium text-[#453F3C] dark:text-white">Payee</label>
            <input type="text" id="payee" class="bg-white border border-gray-300 text-[#453F3C] text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Achyut Neupane" required />
        </div>

        <div class="col-span-2">
            <label for="amount" class="block mb-2 text-sm font-medium text-[#453F3C] dark:text-white">Amount</label>
            <input type="number" id="amount" class="bg-white border border-gray-300 text-[#453F3C] text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="10000" required />
        </div>

        <div class="col-span-4">
            <label for="crossing" class="block mb-2 text-sm font-medium text-[#453F3C] dark:text-white">Crossing</label>
            <select id="crossing" class="bg-white border border-gray-300 text-[#453F3C] text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected disabled>Choose a crossing</option>
                <option value="one">Cross A/C Payee + Or Bearer</option>
                <option value="two">Cross A/C Payee + Not Negotiable + Or Bearer</option>
                <option value="three">Cross A/C Payee</option>
                <option value="four">Cross Only</option>
                <option value="five">No Crossing</option>
            </select>
        </div>

        <div class="col-span-6 mt-2">
            <input type="submit" value="Submit" class="bg-[#EA9010] text-white text-sm font-medium rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-pointer dark:bg-[#EA9010] dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
        </div>
    </div>
</div>
