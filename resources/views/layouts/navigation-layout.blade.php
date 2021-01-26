<nav
    class="w-full md:w-2/12 bg-gray-900 md:bg-gray-900 px-2 text-center fixed bottom-0 md:pt-8 md:top-0 md:left-0 h-16 md:h-screen md:border-r-4 md:border-gray-600">
    <div class="md:relative mx-auto lg:float-right lg:px-6">
        <h1 class="text-gray-100 text-3xl font-bold mb-4 hidden md:block">To Do Apps</h1>
        <ul class="list-reset flex flex-row md:flex-col text-center md:text-right mt-3 md:mt-16">
            <li class="mx-1 flex-1">
                <a href="/onprogress"
                    class="block py-1 md:py-3 px-1 align-middle text-gray-800 no-underline hover:text-gray-200 border-b-2 border-gray-800 md:border-gray-900 hover:border-yellow-500">
                    <i class="fas fa-clock pr-0 md:pr-3 text-gray-300 md:text-gray-400 md:hidden"></i><span
                        class="pb-1 md:pb-0 text-xs md:text-base text-gray-300 md:text-gray-400 md:inline-block hidden">On
                        Progress</span>
                </a>
            </li>
            <li class="mx-1 flex-1">
                <a href="/delayed"
                    class="block py-1 md:py-3 px-1 align-middle text-gray-800 no-underline hover:text-gray-200 border-b-2 border-gray-800 md:border-gray-900 hover:border-red-500">
                    <i class="fas fa-hourglass-half pr-0 md:pr-3 text-gray-300 md:text-gray-400 md:hidden"></i><span
                        class="pb-1 md:pb-0 text-xs md:text-base text-gray-300 md:text-gray-400 md:inline-block hidden">Delayed</span>
                </a>
            </li>
            <li class="mx-1 flex-1">
                <a href="/finish"
                    class="block py-1 md:py-3 px-1 align-middle text-gray-800 no-underline hover:text-gray-200 border-b-2 border-gray-800 md:border-gray-900 hover:border-green-500">
                    <i class="fas fa-clipboard-check pr-0 md:pr-3 text-gray-300 md:text-gray-400 md:hidden"></i><span
                        class="pb-1 md:pb-0 text-xs md:text-base text-gray-300 md:text-gray-400 md:inline-block hidden">Finish</span>
                </a>
            </li>
            
            <!-- Bonus flex div to put button there-->
            <li class="mx-1 flex-1 md:hidden">
            </li>
        </ul>
    </div>
    <div>
        <div><svg
                class="z-10 rounded-tr-full bg-gray-900 absolute -top-2 w-10 h-7 text-gray-100 border-t-8 border-r-8 border-white md:hidden"
                style="right: 4.95rem;">
            </svg>
        </div>
        <div>
            <button
                class="z-30 rounded-full bg-indigo-800 absolute right-3 -top-10 w-20 h-20 text-gray-100 border-4 border-white focus:outline-none focus:bg-indigo-900 active:bg-indigo-900 md:hidden">
                <i class="fas fa-plus text-2xl"></i>
            </button>
            <div
                class="z-20 bg-indigo-700 absolute right-3 -top-7 w-20 h-20 text-gray-100 md:hidden opacity-20 rounded-full">
            </div>
        </div>
        <div><svg
                class="z-10 rounded-tl-full bg-gray-900 absolute -top-2 w-10 h-7 text-gray-100 border-t-8 border-l-8 border-white md:hidden"
                style="right: -0.95rem;">
            </svg>
        </div>
    </div>
</nav>

