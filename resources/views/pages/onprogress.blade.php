<x-app-layout>
    <x-slot name="title">
        On Progress
    </x-slot>
    
    <h1 class="text-indigo-900 text-xl font-bold mb-4">On Progress Task</h1>
    <div class="flex flex-col">
        <div class="my-2 overflow-x-auto sm:mx-6 lg:mx-8">
            <div class="py-2 align-middle inline-block w-full sm:px-6 lg:px-6">
                <div class="md:shadow overflow-hidden border-b border-gray-200 sm:rounded-lg shadow-none">
                    <table class="min-w-full divide-y divide-gray-200 hidden md:table">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider hidden xl:block">
                                    Name
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Title
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider hidden lg:block">
                                    Status
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Start Date
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    End Date
                                </th>
                                <th scope="col" class="relative px-6 py-3">
                                    <span class="sr-only">Edit</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200" class="taskContent">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap hidden xl:block">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10">
                                            <img class="h-10 w-10 rounded-full"
                                                src="https://www.pngkit.com/png/full/301-3012694_account-user-profile-avatar-comments-fa-user-circle.png"
                                                alt="">
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">
                                                User
                                            </div>
                                            <div class="text-sm text-gray-500">
                                                johndoe@blabla.com
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">Mendifinisikan Channel Youtube</div>
                                    <div class="text-sm text-gray-500">Routines</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap hidden lg:table-cell">
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-green-800 ">
                                        On Progress
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="text-sm text-gray-900">
                                        Senin, 11 Jan 2020
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-green-800">
                                        Sabtu, 18 Jan 2020
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap hidden xl:block">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10">
                                            <img class="h-10 w-10 rounded-full"
                                                src="https://www.pngkit.com/png/full/301-3012694_account-user-profile-avatar-comments-fa-user-circle.png"
                                                alt="">
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">
                                                User
                                            </div>
                                            <div class="text-sm text-gray-500">
                                                johndoe@blabla.com
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">Mendifinisikan Channel Youtube</div>
                                    <div class="text-sm text-gray-500">Routines</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap hidden lg:table-cell">
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-green-800">
                                        On Progress
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="text-sm text-gray-900">
                                        Senin, 11 Jan 2020
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-green-800">
                                        Sabtu, 18 Jan 2020
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                </td>
                            </tr>

                            <!-- More items... -->
                        </tbody>
                    </table>
                    <div class="mb-20 md:hidden" id="TaskContent">
                        <div class="mb-5">
                            <div class="flex flex-col bg-white px-8 py-6 max-w-sm mx-auto rounded-lg shadow-lg">
                                <div class="flex justify-center items-center">
                                    <p class="px-2 py-1 bg-gray-600 text-sm text-green-100 rounded" href="#">Routines
                                    </p>
                                </div>
                                <div class="mt-4">
                                    <p class="text-lg text-gray-700 font-medium" href="#">Mendifinisikan
                                        channel Youtube</p>
                                </div>
                                <div class="flex justify-between items-center mt-4">
                                    <div class="flex items-center">
                                        <img src="https://www.pngkit.com/png/full/301-3012694_account-user-profile-avatar-comments-fa-user-circle.png"
                                            class="w-8 h-8 object-cover rounded-full" alt="avatar">
                                        <a class="text-gray-700 text-sm mx-3" href="#">User</a>
                                    </div>
                                    <span class="font-light text-sm text-yellow-600">11-18 Jan</span>
                                </div>
                            </div>
                        </div>
                        <div class="mb-5">
                            <div class="flex flex-col bg-white px-8 py-6 max-w-sm mx-auto rounded-lg shadow-lg">
                                <div class="flex justify-center items-center">
                                    <p class="px-2 py-1 bg-gray-600 text-sm text-green-100 rounded" href="#">Routines
                                    </p>
                                </div>
                                <div class="mt-4">
                                    <p class="text-lg text-gray-700 font-medium" href="#">Mendifinisikan
                                        channel Youtube</p>
                                </div>
                                <div class="flex justify-between items-center mt-4">
                                    <div class="flex items-center">
                                        <img src="https://www.pngkit.com/png/full/301-3012694_account-user-profile-avatar-comments-fa-user-circle.png"
                                            class="w-8 h-8 object-cover rounded-full" alt="avatar">
                                        <a class="text-gray-700 text-sm mx-3" href="#">User</a>
                                    </div>
                                    <span class="font-light text-sm text-yellow-600">11-18 Jan</span>
                                </div>
                            </div>
                        </div>
                        <div class="mb-5">
                            <div class="flex flex-col bg-white px-8 py-6 max-w-sm mx-auto rounded-lg shadow-lg">
                                <div class="flex justify-center items-center">
                                    <p class="px-2 py-1 bg-gray-600 text-sm text-green-100 rounded" href="#">Routines
                                    </p>
                                </div>
                                <div class="mt-4">
                                    <p class="text-lg text-gray-700 font-medium" href="#">Mendifinisikan
                                        channel Youtube</p>
                                </div>
                                <div class="flex justify-between items-center mt-4">
                                    <div class="flex items-center">
                                        <img src="https://www.pngkit.com/png/full/301-3012694_account-user-profile-avatar-comments-fa-user-circle.png"
                                            class="w-8 h-8 object-cover rounded-full" alt="avatar">
                                        <a class="text-gray-700 text-sm mx-3" href="#">User</a>
                                    </div>
                                    <span class="font-light text-sm text-yellow-600">11-18 Jan</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
