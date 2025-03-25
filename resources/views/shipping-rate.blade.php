<x-front-layout>
    <div class="mt-4">
        <div class=" m-8 flex justify-center overflow-visible">
            <form class="bg-white max-w-md m-8 p-8 w-96 rounded-xl shadow-xl" id="shippingForm">
                <h2 class="text-xl text-black mb-6">Shipping Rate Calculator</h2>
                <div class="grid md:grid-cols-2 md:gap-6">
                    <div class="relative z-0 w-full mb-8 group">
                        <input type="number" name="length" id="length" step="0.01" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                        <label for="length" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Length(CM)</label>
                    </div>
                    <div class="relative z-0 w-full mb-8 group">
                        <input type="number" name="width" id="width" step="0.01" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                        <label for="width" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Width(CM)</label>
                    </div>
                </div>
                <div class="grid md:grid-cols-2 md:gap-6">
                    <div class="relative z-0 w-full mb-8 group">
                        <input type="number" name="height" id="height" step="0.01" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                        <label for="height" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Height(CM)</label>
                    </div>
                    <div class="relative z-0 w-full mb-8 group">
                        <input type="number" name="weight" id="weight" step="0.01" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                        <label for="weight" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Weight(KG)</label>
                    </div>
                </div>
                <div class="relative z-0 w-full mb-8 group">
                    <input type="number" name="value" id="value" step="0.01" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    <label for="value" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Declared Value(PHP)</label>
                </div>
                <div class="relative z-0 w-full mb-8 group">
                    <div class="flex items-center mb-4">
                        <input id="pickupCheckbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="pickupCheckbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Door to Pier</label>
                    </div>
                </div>
                <div class="relative z-0 w-full mb-8 group hidden" id="pickupDropdown">
                    <label for="underline_select" class="sr-only">Underline select</label>
                        <select id="underline_select" class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                            <option selected>Pickup Location</option>
                            <option value="US">Between Place 1 and Place 2</option>
                            <option value="CA">Between Place 3 and Place 4</option>
                            <option value="FR">Between Place 5 and Place 6</option>
                        </select>
                </div>
                <div class="relative z-0 w-full mb-8 group">
                    <div class="flex items-center mb-4">
                        <input id="dropoffCheckbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="dropoffCheckbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Pier to Door</label>
                    </div>
                </div>
                <div class="relative z-0 w-full mb-8 group hidden" id="dropoffDropdown">
                    <select id="underline_select" class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                        <option selected>Pickup Location</option>
                        <option value="US">Between Place 1 and Place 2</option>
                        <option value="CA">Between Place 3 and Place 4</option>
                        <option value="FR">Between Place 5 and Place 6</option>
                    </select>
                </div>
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center transition delay-150 duration-300 ease-in-out hover:-translate-y-1 hover:scale-110 hover:bg-indigo-500">Submit</button>
                <div id="result" class="bg-white rounded-xl mt-4 text-center text-lg font-semibold p-4  hidden"></div>
                <div class="text-center text-xs pt-3">*Discounts unaccounted for.</div>
            </form>
        </div>
        
    </div>
    <script>
        document.getElementById('shippingForm').addEventListener('submit', function (e) {
          e.preventDefault();
    
         
          const length = parseFloat(document.getElementById('length').value);
          const width = parseFloat(document.getElementById('width').value);
          const height = parseFloat(document.getElementById('height').value);
          const weight = parseFloat(document.getElementById('weight').value);
          const value = parseFloat(document.getElementById('value').value);
    
          
          const formula1 = ((length/100) * (width/100) * (height/100)) * 3360;
          const formula2 = weight * 10;
          const formula3 = value * 0.08;
    
          
          const highestRate = Math.max(formula1, formula2, formula3);
    
          
          const resultDiv = document.getElementById('result');
          resultDiv.innerHTML = `Your Shipment will cost: PHP${highestRate.toFixed(2)}`;
          resultDiv.classList.remove('hidden');

          
        });

        const checkbox = document.getElementById('pickupCheckbox');
        const hiddenContent = document.getElementById('pickupDropdown');

        checkbox.addEventListener('change', function () {

        if (this.checked) {
            hiddenContent.classList.remove('hidden');
        }
        else {
            hiddenContent.classList.add('hidden');
        }
        });

        const checkbox1 = document.getElementById('dropoffCheckbox');
        const hiddenContent1 = document.getElementById('dropoffDropdown');

        checkbox1.addEventListener('change', function () {

        if (this.checked) {
            hiddenContent1.classList.remove('hidden');
        }
        else {
            hiddenContent1.classList.add('hidden');
        }
        });
      </script>
</x-front-layout>