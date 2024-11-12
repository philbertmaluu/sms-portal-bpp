<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 flex justify-between">
                    {{ __("Send SMS to specific group of students ") }}

                    <div class="btn">
                        <a href="{{ route('sms-dashboard') }}" class="text-sm/6 font-semibold text-gray-900">
                            <button type="primary" class="text-sm/6 bg-blue font-semibold text-gray-900">view sms</button>
                        </a>

                    </div>
                </div>


                <form class="p-10">
                    <div class="space-y-12">
                        <div class="border-b border-gray-900/10 pb-12">
                            <!-- <h2 class="text-base/7 font-semibold text-gray-900">Profile</h2>
                            <p class="mt-1 text-sm/6 text-gray-600">This information will be displayed publicly so be careful what you share.</p> -->

                            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                                <div class="col-span-full">
                                    <label for="country" class="block text-sm/6 font-medium text-gray-900">Select Group</label>
                                    <div class="mt-2">
                                        <select id="country" name="country" autocomplete="country-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm/6">
                                            <option>WHOLE UNIVERSITY</option>
                                            <option>SERBI</option>
                                            <option>SEES</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-span-full">
                                    <label for="about" class="block text-sm/6 font-medium text-gray-900">Message</label>
                                    <div class="mt-2">
                                        <textarea id="about" name="about" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6"></textarea>
                                    </div>
                                    <p class="mt-3 text-sm/6 text-gray-600">Write a messege to be send to students</p>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="mt-6 flex items-center justify-end gap-x-6">
                        <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
                        <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Send SMS</button>
                    </div>
                </form>



            </div>
        </div>
    </div>
</x-app-layout>