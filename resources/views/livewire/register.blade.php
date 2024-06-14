<div>
    @vite('resources/css/app.css')
    @include('components.navbar')
    <div class="my-10 w-[60%] mx-auto">
        <h2 class="text-2xl font-bold text-center m-10">Register Yourselft to Start Task Management</h2>
        <form action="" wire:submit.prevent="saveuser" class="m-auto w-[50%]">
            <div class="m-2 ">
                <label for="" class="ml-2 block font-bold text-[#5b5b5b]">Name</label>
                <input type="text" wire:model="name"
                    class="w-[100%] block m-2 border-2 rounded-md py-1 px-2 border-gray-500">
            </div>
            <div class="m-2 ">
                <label for="" class="ml-2 block font-bold text-[#5b5b5b]">Email</label>
                <input type="email" wire:model="email"
                    class="w-[100%] block m-2 border-2 rounded-md py-1 px-2 border-gray-500">
            </div>
            <div class="m-2">
                <label for="" class="ml-2 block font-bold text-[#5b5b5b]">Password</label>
                <input type="password" wire:model="password"
                    class="w-[100%] block m-2 border-2 rounded-md py-1 px-2 border-gray-500">
            </div>
            <div class="m-2">
                <label for="" class="ml-2 block font-bold text-[#5b5b5b]">Confirm Password</label>
                <input type="password" wire:model="password_confirmation"
                    class="w-[100%] block m-2 border-2 rounded-md py-1 px-2 border-gray-500">
            </div>
            <div class="m-5 text-center">
                <input type="submit" value="Register"
                    class="cursor-pointer border border-blue-500 px-4 py-1 rounded-lg hover:bg-blue-500 hover:text-white hover:font-bold transition-all ease-in-out duration-500 hover:border-white">
            </div>
        </form>
    </div>
</div>
