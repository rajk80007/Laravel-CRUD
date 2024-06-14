<div>
    <div onclick="menu.classList.toggle('hidden')"
        class="absolute left-3 top-3 cursor-pointer hover:border-white border-2 rounded-md block md:hidden">
        <img src="./assets/SVG/burgermenu.svg" alt="menu" width="30" height="30">
    </div>
    <div class="flex items-center px-5 bg-black dark:bg-gray-900 w-[100%] h-[60px] text-white justify-between">

        <div class="ml-12 md:ml-3">
            LogoBrand
        </div>
        <div id="menu" class="duration-700 hidden md:block">
            <ul
                class="md:ml-[70%] flex gap-3 items-center flex-col md:flex-row bg-gray-500 md:bg-black absolute left-0 top-[60px] opacity-40 w-[100%] pb-2 pt-2 hover:rounded-md text-center md:relative md:top-0 md:opacity-100">
                <li class="rounded-md hover:bg-red-700 hover:w-full"><a href="/" wire:navigate
                        class="py-1 px-3 hover:font-bold duration-100 z-10 hover:w-[100%] hover:block ">Home</a></li>
                <li class="rounded-md hover:bg-red-700 hover:w-full"><a href="/about" wire:navigate
                        class="py-1 px-3 hover:font-bold duration-200 z-10 hover:w-[100%] hover:block ">About</a></li>
                <li class="rounded-md hover:bg-red-700 hover:w-full"><a href="#" wire:navigate
                        class="py-1 px-3 hover:font-bold duration-300 z-10 hover:w-[100%] hover:block ">Contact</a></li>
            </ul>
        </div>
        @if (Auth::check())
            <ul class="flex gap-2 scale-75 md:scale-100 ml-[22%]">
                <li
                    class="border-[1px] border-white py-1 px-3 rounded-lg hover:bg-slate-300 hover:text-gray-500 hover:font-bold hover:scale-105 transition-all ease-in-out duration-500 cursor-pointer">
                    <a href="/logout" wire:navigate>Logout</a></li>
                {{-- <li class="border-[1px] border-white py-1 px-3 rounded-lg hover:bg-slate-300 hover:text-gray-500 hover:font-bold hover:scale-105 transition-all ease-in-out duration-1000 cursor-pointer"> <a href="/login" wire:navigate>Login</a></li> --}}
            </ul>
        @else
            <ul class="flex gap-2 scale-75 md:scale-100 ml-[22%]">
                <li
                    class="border-[1px] border-white py-1 px-3 rounded-lg hover:bg-slate-300 hover:text-gray-500 hover:font-bold hover:scale-105 transition-all ease-in-out duration-500 cursor-pointer">
                    <a href="/register" wire:navigate>Register</a></li>
                <li
                    class="border-[1px] border-white py-1 px-3 rounded-lg hover:bg-slate-300 hover:text-gray-500 hover:font-bold hover:scale-105 transition-all ease-in-out duration-1000 cursor-pointer">
                    <a href="/login" wire:navigate>Login</a></li>
            </ul>
        @endif

    </div>
</div>
