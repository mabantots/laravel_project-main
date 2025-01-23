<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Products') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="table-container">
                    <header class="p-4 flex flex-row gap-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        <a href="#" class="flex flex-row gap-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                            </svg>
                            Add Users
                        </a>
                    </header>
                    <table class="min-w-full border-collapse border border-gray-200 bg-white shadow-md rounded-lg overflow-hidden">
                        <thead>
                            <tr class="bg-gray-200 text-left text-gray-600 uppercase text-sm leading-normal">
                                <th class="py-3 px-6">Profile</th>
                                <th class="py-3 px-6">Name</th>
                                <th class="py-3 px-6">Age</th>
                                <th class="py-3 px-6"></th>
                                <th class="py-3 px-6">Gender</th>
                                <th class="py-3 px-6">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-6">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR20quwCkJN0e4U7Q35xfPfxDA2JqinSc5Mjg&s" class="w-10 h-10 rounded-full">
                                </td>
                                <td class="py-3 px-6"> Stefan John Ebacuado</td>
                                <td class="py-3 px-6">21</td>
                                <td class="py-3 px-6"></td>
                                <td class="py-3 px-6">Male</td>
                                <td class="py-3 px-6 flex space-x-2">
                                    <a title="EDIT" href="#" class="bg-blue-500 text-white py-1 px-4 rounded hover:bg-blue-600 transition duration-300">
                                        EDIT
                                    </a>
                                    <form action="#" method="POST" class="inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button
                                            type="submit"
                                            class="bg-red-500 text-white py-1 px-4 rounded hover:bg-red-600 transition duration-300"
                                            onclick="return confirm('Are you sure you want to delete this product?');">
                                            DELETE
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-6">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSq8QWZL1n-GWZbuOGoCW8xRoGAMV4LfEXhUA&s" class="w-10 h-10 rounded-full">
                                </td>
                                <td class="py-3 px-6"> Rei Ashley Dolfo</td>
                                <td class="py-3 px-6">21</td>
                                <td class="py-3 px-6"></td>
                                <td class="py-3 px-6">Male</td>
                                <td class="py-3 px-6 flex space-x-2">
                                    <a title="EDIT" href="#" class="bg-blue-500 text-white py-1 px-4 rounded hover:bg-blue-600 transition duration-300">
                                        EDIT
                                    </a>
                                    <form action="#" method="POST" class="inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button
                                            type="submit"
                                            class="bg-red-500 text-white py-1 px-4 rounded hover:bg-red-600 transition duration-300"
                                            onclick="return confirm('Are you sure you want to delete this product?');">
                                            DELETE
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-6">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRP4MQ7mj-qaZs2U2f2V9tlbP3FcF2Bb9jXoA&s" class="w-10 h-10 rounded-full">
                                </td>
                                <td class="py-3 px-6">Joseph Marie Banay </td>
                                <td class="py-3 px-6">21</td>
                                <td class="py-3 px-6"></td>
                                <td class="py-3 px-6">Male</td>
                                <td class="py-3 px-6 flex space-x-2">
                                    <a title="EDIT" href="#" class="bg-blue-500 text-white py-1 px-4 rounded hover:bg-blue-600 transition duration-300">
                                        EDIT
                                    </a>
                                    <form action="#" method="POST" class="inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button
                                            type="submit"
                                            class="bg-red-500 text-white py-1 px-4 rounded hover:bg-red-600 transition duration-300"
                                            onclick="return confirm('Are you sure you want to delete this product?');">
                                            DELETE
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>