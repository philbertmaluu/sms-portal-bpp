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
                    SMS Analytics
                    <div class="btn">
                        <a href="{{ route('dashboard') }}" class="text-sm/6 font-semibold text-gray-900">
                            <button type="primary" class="text-sm/6 bg-blue font-semibold text-gray-900">Back</button>
                        </a>
                    </div>
                </div>

                <div class="p-10">

                    <div class=" py-24 sm:py-32  bg-red overflow-hidden ">
                        <div class="mx-auto max-w-7xl px-6 lg:px-8">
                            <dl class="grid grid-cols-1 gap-x-8 gap-y-16 text-center lg:grid-cols-3">
                                <div class="mx-auto flex max-w-xs flex-col gap-y-4  sm:rounded-sm ">
                                    <dt class="text-base/7 p-6 text-gray-600">Sms Sent</dt>
                                    <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl">44 million</dd>
                                </div>
                                <div class="mx-auto flex max-w-xs p-6 flex-col gap-y-4  sm:rounded-sm ">
                                    <dt class="text-base/7 text-gray-600">Sms Not Sent</dt>
                                    <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl">$119 trillion</dd>
                                </div>
                                <div class="mx-auto flex max-w-xs p-6 flex-col gap-y-4  sm:rounded-sm">
                                    <dt class="text-base/7 text-gray-600">Credit Balance</dt>
                                    <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl">46,000</dd>
                                </div>
                            </dl>
                        </div>
                    </div>

                </div>

                <div class="p-6">

                    <div class="px-4 sm:px-6 lg:px-8">
                        <div class="sm:flex sm:items-center">
                            <div class="sm:flex-auto">
                                <h1 class="text-base font-semibold text-gray-900">Students</h1>
                                <p class="mt-2 text-sm text-gray-700">A list of all the students who have received messeges</p>
                            </div>

                            <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                                <button type="button" class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Add user</button>
                            </div>

                        </div>
                        <div class="mt-8 flow-root">
                            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                                    <table class="min-w-full divide-y divide-gray-300">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-0">Name</th>
                                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Title</th>
                                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Email</th>
                                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Role</th>

                                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Title</th>
                                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Email</th>
                                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Role</th>
                                            </tr>
                                        </thead>
                                        <tbody class="divide-y divide-gray-200">
                                            <tr>
                                                <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-0">Lindsay Walton</td>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Front-end Developer</td>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">lindsay.walton@example.com</td>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Member</td>

                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Front-end Developer</td>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">lindsay.walton@example.com</td>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Member</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>



            </div>
        </div>
    </div>
</x-app-layout>