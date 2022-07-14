<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Chat') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg flex" style="min-height: 400px; max-height: 400px">
                <div class="w-3/12 bg-gray-200 bg-opacity-25 border-r border-gray-200" style="overflow-y: scroll">
                    <ul>
                        <li class="p-6 text-lg text-gray-600 leading-7 font-semibold border-b border-gray-200 hover:bg-opacity-50 hover:bg-gray-100 hover:cursor-pointer">
                            <p class="flex items-center">
                                Lucas Moraes
                                <span class="ml-2 w-2 h-2 bg-red-600 rounded-full"></span>
                            </p>
                        </li>
                        <li class="p-6 text-lg text-gray-600 leading-7 font-semibold border-b border-gray-200 hover:bg-opacity-50 hover:bg-gray-100 hover:cursor-pointer">
                            <p class="flex items-center">
                                Leandro Martins
                                <span class="ml-2 w-2 h-2 bg-red-600 rounded-full"></span>
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="w-9/12 flex flex-col justify-between">
                    <div class="w-full p-6 flex flex-col" style="overflow-y: scroll">
                        <div class="w-full mb-3 text-right">
                            <p class="p-2 rounded-md messageFromMe" style="max-width: 75%; display: inline-block">
                                Olá!

                            </p>
                            <span class="block mt-1 text-xs text-gray-500">13/07/2022 17:44</span>
                        </div>
                        <div class="w-full mb-3">
                            <p class="p-2 rounded-md messageToMe" style="max-width: 75%; display: inline-block">
                                Oi!
                            </p>
                            <span class="block mt-1 text-xs text-gray-500">13/07/2022 17:44</span>
                        </div>
                        <div class="w-full mb-3 text-right">
                            <p class="p-2 rounded-md messageFromMe" style="max-width: 75%; display: inline-block">
                                Olá!

                            </p>
                            <span class="block mt-1 text-xs text-gray-500">13/07/2022 17:44</span>
                        </div>
                        <div class="w-full mb-3">
                            <p class="p-2 rounded-md messageToMe" style="max-width: 75%; display: inline-block">
                                Oi!
                            </p>
                            <span class="block mt-1 text-xs text-gray-500">13/07/2022 17:44</span>
                        </div><div class="w-full mb-3 text-right">
                            <p class="p-2 rounded-md messageFromMe" style="max-width: 75%; display: inline-block">
                                Olá!

                            </p>
                            <span class="block mt-1 text-xs text-gray-500">13/07/2022 17:44</span>
                        </div>
                        <div class="w-full mb-3">
                            <p class="p-2 rounded-md messageToMe" style="max-width: 75%; display: inline-block">
                                Oi!
                            </p>
                            <span class="block mt-1 text-xs text-gray-500">13/07/2022 17:44</span>
                        </div><div class="w-full mb-3 text-right">
                            <p class="p-2 rounded-md messageFromMe" style="max-width: 75%; display: inline-block">
                                Olá!

                            </p>
                            <span class="block mt-1 text-xs text-gray-500">13/07/2022 17:44</span>
                        </div>
                        <div class="w-full mb-3">
                            <p class="p-2 rounded-md messageToMe" style="max-width: 75%; display: inline-block">
                                Oi!
                            </p>
                            <span class="block mt-1 text-xs text-gray-500">13/07/2022 17:44</span>
                        </div>
                    </div>
                    <div class="w-full bg-gray-200 bg-opacity-25 p-6  border-t border-gray-200">
                        <form class="">
                            <div class="flex rounded-md  overflow-hidden border border-gray-200">
                                <input type="text" class="flex-1 px-4 py-2 text-sm focus:outline-none" style="border: 0">
                                <button type="submit" class="bg-indigo-500 hover:bg-indigo-600 text-white px-4 px-2">Enviar</button>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <style>
        .messageFromMe{
            --tw-bg-opacity: 0.25;
            background-color: rgb(165 180 252 / var(--tw-bg-opacity));

            /*@apply bg-indigo-300 bg-opacity-25*/
        }
        .messageToMe{
            --tw-bg-opacity: 0.25;
            background-color: rgb(209 213 219 / var(--tw-bg-opacity));
            /*@apply bg-gray-300 bg-opacity-25*/
        }
    </style>
</x-app-layout>
