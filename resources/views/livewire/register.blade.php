<div>
    @vite('resources/css/app.css')
    @include('components.navbar')
    <div class="mt-10 w-[60%] mx-auto flex items-center justify-center flex-col ">
        <h2 class="text-2xl font-bold text-center m-10">Register Yourselft to Start Task Management</h2>
        <form action="" wire:submit.prevent="saveuser" class="m-2 w-full">
            <div class="m-2 ">
                <label for="" class="ml-2 block">Name</label>
            <input type="text" wire:model="name" class="w-[100%] block m-2 border-2 rounded-md py-1 px-2 border-gray-500">
        </div>
    <div class="m-2 ">
            <label for="" class="ml-2 block" >Email</label>
        <input type="text" wire:model="email" class="w-[100%] block m-2 border-2 rounded-md py-1 px-2 border-gray-500">
    </div>
<div class="m-2">
    <label for="" class="ml-2 block">Password</label>
<input type="text" wire:model="password" class="w-[100%] block m-2 border-2 rounded-md py-1 px-2 border-gray-500">
</div>
<div class="m-2">
    <label for="" class="ml-2 block">Confirm Password</label>
<input type="text" wire:model="password_confirmation" class="w-[100%] block m-2 border-2 rounded-md py-1 px-2 border-gray-500">
</div>
<div class="m-5">
    <input type="submit" value="Register" class="cursor-pointer border border-blue-500 px-4 py-1 rounded-lg hover:bg-blue-500 hover:text-white hover:font-bold transition-all ease-in-out duration-500 hover:border-white">
</div>
</form>
</div>
</div>
