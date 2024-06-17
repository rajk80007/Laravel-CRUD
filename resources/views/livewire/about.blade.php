<div>
    @include('components.navbar')
    @vite('resources/css/app.css')
    <div>
        <h1 class="text-3xl m-10 font-bold text-center">About App</h1>
        <div class="w-[60%] m-auto mt-10 border-[1px] border-gray-400 rounded-md px-5 py-2 "> 
            <h2 class="text-2xl my-2 font-bold">Laravel CRUD</h2>
            <p class="text-justify my-2">This is a simple CRUD application with Livewire and Tailwind CSS framework. It has a functionality of adding, editing and deleting tasks. The data is stored in a MySQL database. The application is hosted on hostinger. The source code is available on github. It has user authentication. Registration is also available. The application is responsive. It is fully functional. </p>
                <h3 class="text-2xl mt-5 font-bold " >Features</h3>
            <ul class="my-5">
                <li class="my-2">Register and Login</li>
                <li class="my-2">Only Registered users can add, edit and delete tasks</li>
                <li class="my-2">Only that user can add, edit and delete tasks who have created them</li>
                <li class="my-2">It is hosted on hostinger</li>
                <li class="my-2">It is fully functional</li>
            </ul>
        </div>
    </div>
</div>
