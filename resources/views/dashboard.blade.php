<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Overview') }}
        </h2>
    </x-slot>

    <div class="flex flex-wrap border-t-2 border-blue border-opacity-80 ">
        <div class="w-2/3">

            <div class="flex flex-wrap flex-col h-max ">


                <div
                    class="bg-blue-dark bg-opacity-25 h-1/6 w-full py-2  border-b-2 border-black-dark border-opacity-10 leading-tight">
                    <div class="sm:px-6 lg:px-8 flex gap-3 ">
                        <p class="w-1/3 font-extrabold ">Consumption |</p>
                        {{-- Previous --}}
                        <div class="w-1/2 flex font-extrabold opacity-75 tracking-wide">
                            <p>Prev:</p>
                            {{-- <p>{{ $meterinfo->previous_reading }}</p> --}}<p class="text-red-dark">123</p>
                            <p>kw</p>
                        </div>
                        {{-- Present --}}
                        <div class="w-1/2 flex font-extrabold opacity-75 tracking-wide">
                            <p>Pres:</p>
                            {{-- <p>{{ $meterinfo->present_reading }}</p> --}}<p class="text-red-dark">1412</p>
                            <p>kw</p>
                        </div>
                        {{-- Total --}}
                        <div class="w-1/2 flex font-extrabold opacity-75 tracking-wide ">
                            <p>Total kWh used:</p>
                            {{-- <p>{{ $meterinfo->present_reading - $meterinfo->previous_reading }}</p> --}}<p class="text-red-dark">132423</p>
                            <p>kW</p>
                        </div>
                    </div>
                </div>
                {{--  sa time ako na dito basta yung desing ilagay mo nalan kasi masisingitan to ng function pati sa chart i love you --}}


                {{-- Time --}}
                <div
                    class="bg-blue-dark bg-opacity-25 w-full py-2  border-b-2 border-black-dark border-opacity-10 leading-tight">
                    <div class="flex gap-3"style="padding-left: 5.9rem; padding-right: 5.9rem">
                        <p class="font-extrabold" style="width:23%">Time |</p>

                        {{-- 1 minute --}}
                        <div class="font-extrabold opacity-75 tracking-wide" style="width:10%">
                            <button class="outline-none ">
                                <p class="hover:text-blue cursor-pointer transition ease-in-out duration-150 ">1m</p>
                            </button>
                        </div>

                        {{-- 1 hour --}}
                        <div class="font-extrabold opacity-75 tracking-wide" style="width:10%">
                            <button class="outline-none ">
                                <p class="hover:text-blue cursor-pointer transition ease-in-out duration-150 ">1h</p>
                            </button>
                        </div>

                        {{-- 1 day --}}
                        <div class="font-extrabold opacity-75 tracking-wide" style="width:10%">
                            <button class="outline-none ">
                                <p class="hover:text-blue cursor-pointer transition ease-in-out duration-150 ">1D</p>
                            </button>
                        </div>

                        {{-- 1 month --}}
                        <div class="font-extrabold opacity-75 tracking-wide" style="width:10%">
                            <button class="outline-none ">
                                <p class="hover:text-blue cursor-pointer transition ease-in-out duration-150 ">1M</p>
                            </button>
                        </div>

                        {{-- 1 year --}}
                        <div class="font-extrabold opacity-75 tracking-wide" style="width:10%">
                            <button class="outline-none ">
                                <p class="hover:text-blue cursor-pointer transition ease-in-out duration-150 ">1Y</p>
                            </button>
                        </div>

                    </div>
                </div>


                {{-- Chart --}}
                <div class="bg-blue-dark bg-opacity-25 h-full w-full">Chart</div>
            </div>

        </div>


        {{-- Right Part --}}
        <div class="w-1/3 h-   border-l-2 border-black-dark border-opacity-15 flex-1 " >
            <div class="flex flex-col">
                {{-- Present Date and Time --}}
                <div class="bg-white  flex flex-col flex-wrap border-b-2 border-black-dark border-opacity-15 ">
                    <div class="flex items-center justify-center space-x-14 relative">
                        <span class="flex space-x-2">
                            <x-application-date /> {{-- love nag-dagdag ako ng component pangit kasi pag andito i love you --}}
                            <span>{{ date('M. j, Y') }}</span>
                        </span>

                        <div class="border-l-2 border-black-dark border-opacity-15 h-11"></div>

                        <span class="flex space-x-2">
                            <x-application-clock /> {{-- love nag-dagdag ako ng component pangit kasi pag andito i love you --}}
                            <span>{{ date('g:i a') }}</span>
                        </span>
                    </div>
                </div>
            </div>

            {{-- Consumption Bill --}}
            <div class="bg-blue-dark bg-opacity-25 ">
                <div class="text-center text-xl font-glacial font-semibold opacity-70 tracking-normal py-1 ">Consumption
                    Bill</div>
            </div>

            {{-- Type and Rate --}}
            <div
                class="bg-white border-t-2 border-black-dark border-opacity-10 py-1 px-10  tracking-wide items-center text-lg">
                <div class="flex space-x-10">
                    <div class="flex">
                        <p class="font-extrabold">Type:</p>
                        <p class="font-normal">Residential</p>
                    </div>

                    <div class="flex ">
                        <p class="font-extrabold">Rate:</p>
                        <p class="font-normal text-green-dark">Php 11.21</p>
                        <p class="font-normal text-red-dark"> kWh</p>
                    </div>

                </div>
            </div>

            {{-- Year Selection --}}
            <div class=" border-b-2 border-t-2 border-black-dark border-opacity-10 bg-white">
                <label for="year_select" class="sr-only">Year Select</label>
                <select id="year_select"
                    class="block w-24 mx-auto py-1 text-center text-lg font-bold font-glacial opacity-80 bg-white border-none focus:ring-0 focus:border-gray-200 peer leading-tight"
                    onchange="toggleListVisibility()">
                    <option value="" disabled selected>Year</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                </select>

                <div class="border-b-2 border-black-dark border-opacity-10"></div>

                {{-- Monthly List --}}
                <ul id="list2021" class="hidden max-h-48 overflow-y-auto px-10 space-y-1 font-extrabold tracking-wide"
                    style="height: 110px;">
                    <table>
                        <tbody>
                            <tr>
                                <td class="w-28">January</td>
                                <td class="text-green-dark font-normal ">Php 3183.34</td>
                            </tr>
                            <tr>
                                <td>February</td>
                                <td class="text-green-dark font-normal">Php 3183.34</td>
                            </tr>
                            <tr>
                                <td>March</td>
                                <td class="text-green-dark font-normal">Php 3183.34</td>
                            </tr>
                            <tr>
                                <td>April</td>
                                <td class="text-green-dark font-normal">Php 3183.34</td>
                            </tr>
                            <tr>
                                <td>May</td>
                                <td class="text-green-dark font-normal">Php 3183.34</td>
                            </tr>
                            <tr>
                                <td>June</td>
                                <td class="text-green-dark font-normal">Php 3183.34</td>
                            </tr>
                            <tr>
                                <td>July</td>
                                <td class="text-green-dark font-normal">Php 3183.34</td>
                            </tr>
                            <tr>
                                <td>August</td>
                                <td class="text-green-dark font-normal">Php 3183.34</td>
                            </tr>
                            <tr>
                                <td>September</td>
                                <td class="text-green-dark font-normal">Php 3183.34</td>
                            </tr>
                            <tr>
                                <td>October</td>
                                <td class="text-green-dark font-normal">Php 3183.34</td>
                            </tr>
                            <tr>
                                <td>November</td>
                                <td class="text-green-dark font-normal">Php 3183.34</td>
                            </tr>
                            <tr>
                                <td>December</td>
                                <td class="text-green-dark font-normal">Php 3183.34</td>
                            </tr>
                        </tbody>
                    </table>
                </ul>

                <ul id="list2022" class="hidden max-h-48 overflow-y-auto px-10 space-y-1 font-extrabold tracking-wide "
                    style="height: 110px;">
                    <!-- Your list content for the year 2022 goes here -->
                    <table>
                        <tbody>
                            <tr>
                                <td class="w-28">January</td>
                                <td class="text-green-dark font-normal ">Php 3183.34</td>
                            </tr>
                            <tr>
                                <td>February</td>
                                <td class="text-green-dark font-normal">Php 3183.34</td>
                            </tr>
                            <tr>
                                <td>March</td>
                                <td class="text-green-dark font-normal">Php 3183.34</td>
                            </tr>
                            <tr>
                                <td>April</td>
                                <td class="text-green-dark font-normal">Php 3183.34</td>
                            </tr>
                            <tr>
                                <td>May</td>
                                <td class="text-green-dark font-normal">Php 3183.34</td>
                            </tr>
                            <tr>
                                <td>June</td>
                                <td class="text-green-dark font-normal">Php 3183.34</td>
                            </tr>
                            <tr>
                                <td>July</td>
                                <td class="text-green-dark font-normal">Php 3183.34</td>
                            </tr>
                            <tr>
                                <td>August</td>
                                <td class="text-green-dark font-normal">Php 3183.34</td>
                            </tr>
                            <tr>
                                <td>September</td>
                                <td class="text-green-dark font-normal">Php 3183.34</td>
                            </tr>
                            <tr>
                                <td>October</td>
                                <td class="text-green-dark font-normal">Php 3183.34</td>
                            </tr>
                            <tr>
                                <td>November</td>
                                <td class="text-green-dark font-normal">Php 3183.34</td>
                            </tr>
                            <tr>
                                <td>December</td>
                                <td class="text-green-dark font-normal">Php 3183.34</td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- Add more list items as needed -->
                </ul>

                <ul id="list2023" class="hidden max-h-48 overflow-y-auto px-10 space-y-1 font-extrabold tracking-wide "
                    style="height: 110px;">
                    <table>
                        <tbody>
                            <tr>
                                <td class="w-28">January</td>
                                <td class="text-green-dark font-normal ">Php 3183.34</td>
                            </tr>
                            <tr>
                                <td>February</td>
                                <td class="text-green-dark font-normal">Php 3183.34</td>
                            </tr>
                            <tr>
                                <td>March</td>
                                <td class="text-green-dark font-normal">Php 3183.34</td>
                            </tr>
                            <tr>
                                <td>April</td>
                                <td class="text-green-dark font-normal">Php 3183.34</td>
                            </tr>
                            <tr>
                                <td>May</td>
                                <td class="text-green-dark font-normal">Php 3183.34</td>
                            </tr>
                            <tr>
                                <td>June</td>
                                <td class="text-green-dark font-normal">Php 3183.34</td>
                            </tr>
                            <tr>
                                <td>July</td>
                                <td class="text-green-dark font-normal">Php 3183.34</td>
                            </tr>
                            <tr>
                                <td>August</td>
                                <td class="text-green-dark font-normal">Php 3183.34</td>
                            </tr>
                            <tr>
                                <td>September</td>
                                <td class="text-green-dark font-normal">Php 3183.34</td>
                            </tr>
                            <tr>
                                <td>October</td>
                                <td class="text-green-dark font-normal">Php 3183.34</td>
                            </tr>
                            <tr>
                                <td>November</td>
                                <td class="text-green-dark font-normal">Php 3183.34</td>
                            </tr>
                            <tr>
                                <td>December</td>
                                <td class="text-green-dark font-normal">Php 3183.34</td>
                            </tr>
                        </tbody>
                    </table>
                </ul>

                <ul id="list2024" class="hidden max-h-48 overflow-y-auto px-10 space-y-1 font-extrabold tracking-wide "
                style="height: 110px;">
                    <table>
                        <tbody>
                            <tr>
                                <td class="w-28">January</td>
                                <td class="text-green-dark font-normal ">Php 3183.34</td>
                            </tr>
                            <tr>
                                <td>February</td>
                                <td class="text-green-dark font-normal">Php 3183.34</td>
                            </tr>
                            <tr>
                                <td>March</td>
                                <td class="text-green-dark font-normal">Php 3183.34</td>
                            </tr>
                            <tr>
                                <td>April</td>
                                <td class="text-green-dark font-normal">Php 3183.34</td>
                            </tr>
                            <tr>
                                <td>May</td>
                                <td class="text-green-dark font-normal">Php 3183.34</td>
                            </tr>
                            <tr>
                                <td>June</td>
                                <td class="text-green-dark font-normal">Php 3183.34</td>
                            </tr>
                            <tr>
                                <td>July</td>
                                <td class="text-green-dark font-normal">Php 3183.34</td>
                            </tr>
                            <tr>
                                <td>August</td>
                                <td class="text-green-dark font-normal">Php 3183.34</td>
                            </tr>
                            <tr>
                                <td>September</td>
                                <td class="text-green-dark font-normal">Php 3183.34</td>
                            </tr>
                            <tr>
                                <td>October</td>
                                <td class="text-green-dark font-normal">Php 3183.34</td>
                            </tr>
                            <tr>
                                <td>November</td>
                                <td class="text-green-dark font-normal">Php 3183.34</td>
                            </tr>
                            <tr>
                                <td>December</td>
                                <td class="text-green-dark font-normal">Php 3183.34</td>
                            </tr>
                        </tbody>
                    </table>
                </ul>
            </div>

            <script>
                function toggleListVisibility() {
                    var yearSelect = document.getElementById("year_select");
                    var selectedYear = yearSelect.value;

                    // Loop through the years
                    for (var year = 2021; year <= 2024; year++) {
                        var list = document.getElementById("list" + year);
                        list.classList.add("hidden");

                        if (selectedYear === year.toString()) {
                            list.classList.remove("hidden");
                        }
                    }
                }
            </script>


            {{-- Meter Status --}}
            <div class="bg-blue-dark bg-opacity-25  border-b-2 border-black-dark border-opacity-10 ">
                <div class="text-center text-xl font-glacial font-semibold opacity-70 tracking-normal py-1 ">
                    Meter Status</div>
            </div>

            {{-- Meter Status Details --}}
            <div
                class="bg-white  border-b-2 border-black-dark border-opacity-20 px-10 space-y-2 font-extrabold tracking-wide " >
                <span class="flex space-x-2 ">
                    <p>Status:</p>
                    {{-- <p>{{ $meterinfo->status }}</p> --}}
                    <p class="text-green-dark font-normal">Active</p>
                </span>
                <span class="flex space-x-2">
                    <p>Owner:</p>
                    {{-- <p>{{ $meterinfo->Owner }}</p> --}}
                    <p class="text-green-dark font-normal">Donna Shane Ventura</p>
                </span>
                <span class="flex space-x-2">
                    <p>Address:</p>
                    {{-- <p>{{ $meterinfo->Address }}</p> --}}
                    <p class="text-green-dark font-normal">Soyung, Echague, Isabela</p>
                </span>
            </div>

        </div>
    </div>

</x-app-layout>
