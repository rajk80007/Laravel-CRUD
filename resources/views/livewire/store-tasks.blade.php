<div class="h-screen">
    @if($update==false)
    <h2 class="text-2xl font-bold text-center my-4">Store Taks  </h2>
    <form action="" wire:submit.prevent="savedata" class="m-auto w-[98%] lg:w-[50%]">
        <div class="flex justify-around items-center">
            <label for="" class="ml-2 w-[40%] font-bold scale-105 text-[#5b5b5b]">Title</label>
            <input type="text" wire:model="title" class="font-bold w-[100%] p-1 my-2 border-2 border-[#5b5b5b] rounded">
        </div>
        <div class="flex justify-around items-center">
            <label for="" class="ml-2 w-[40%] font-bold scale-105 text-[#5b5b5b]">Description</label>
            <textarea type="text" wire:model="description" class="w-[100%] p-1 my-2 border-2 border-[#5b5b5b] rounded" rows="3"> </textarea>
        </div>
    
        <div class="flex justify-around items-center">
            <label for="" class="ml-2 w-[40%] font-bold scale-105 text-[#5b5b5b]">Status</label>
            <select type="text" wire:model="status" name="status" class="w-[100%] p-1 my-2 border-2 border-[#5b5b5b] rounded inline-block">
            <option value="">--Select Status--</option>
            <option value="active">Active</option>
            <option value="inactive">Inactive</option>
            </select>
        </div>
        <div class="m-5 text-center">
        
            <input type="submit" value="Save" class="cursor-pointer border border-blue-500 px-4 py-1 rounded-lg hover:bg-blue-500 hover:text-white hover:font-bold transition-all ease-in-out duration-500 hover:border-white w-[50%] text-[#5b5b5b] font-bold">
        </div>
        <input type="hidden" value="{{$sno = 1}}">
    </form>

    <div class="w-[100%] lg:w-[80%] xl:w-[60%] mx-auto bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500">
        <table>
            <tr class="flex gap-3 items-center py-2 px-5 text-white border-1 border-white">
                <th class="w-auto lg:w-[50px]">ID</th>
                <th class="w-auto lg:w-[150px]">Title</th>
                <th class="w-auto lg:w-[300px]">Description</th>
                <th class="w-auto lg:w-[100px]">Status</th>
                <th class="w-auto lg:w-[100px]">Action</th>
            </tr>
            @foreach ($task as $task)
                <tr class="flex gap-3 items-center py-2 px-5 text-white border-1 border-white">
                    <td class="w-auto lg:w-[50px] border-[1px] border-gray-600">{{$sno++}}</td>
                    <td class="w-auto lg:w-[150px] border-[1px] border-gray-600">{{$task['title']}}</td>
                    <td class="w-auto lg:w-[300px] border-[1px] border-gray-600">{{$task['description']}}</td>
                    <td class="w-auto lg:w-[100px] text-center border-[1px] border-gray-600">{{$task->status}}</td>
                    <td class="w-auto lg:w-[180px] flex "><a class="px-4 py-1 my-2 hover:bg-blue-600 cursor-pointer  border-2 border-blue-600 rounded-md text-sm" wire:click="updatetask({{$task['id']}})">Edit</a> <a onclick="return confirm('Do you want to delete this task? Ok to delete, Cancel to return.')" class="px-2 py-1 my-2 hover:bg-red-600 cursor-pointer mx-2 border-2 border-red-600 rounded-md text-sm" wire:click="deletetask({{$task['id']}})">Delete</a></td>
                </tr>

            @endforeach
        </table>
    </div>
    @else
        <h1>Update Task Data</h1>
        <form wire:submit.prevent="updatesave">
            <input type="text" wire:model="s_id" hidden>
            <div class="flex justify-around items-center">
                <label for="" class="ml-2 w-[40%] font-bold scale-105 text-[#5b5b5b]">Title</label>
                <input type="text" wire:model="title" class="font-bold w-[100%] p-1 my-2 border-2 border-[#5b5b5b] rounded" value="{{$title}}">
            </div>
            <div class="flex justify-around items-center">
                <label for="" class="ml-2 w-[40%] font-bold scale-105 text-[#5b5b5b]">Description</label>
                <textarea type="text" wire:model="description" class="w-[100%] p-1 my-2 border-2 border-[#5b5b5b] rounded" rows="3"> </textarea>
            </div>
        
            <div class="flex justify-around items-center">
                <label for="" class="ml-2 w-[40%] font-bold scale-105 text-[#5b5b5b]">Status</label>
                <select type="text" wire:model="status" name="status" class="w-[100%] p-1 my-2 border-2 border-[#5b5b5b] rounded inline-block">
                <option value="">--Select Status--</option>
                <option value="active">Active</option>
                <option value="inactive">Inactive</option>
                </select>
            </div>
            <div class="m-5 text-center">
            
                <input type="submit" value="Save" class="cursor-pointer border border-blue-500 px-4 py-1 rounded-lg hover:bg-blue-500 hover:text-white hover:font-bold transition-all ease-in-out duration-500 hover:border-white w-[50%] text-[#5b5b5b] font-bold">
            </div>
        </form>
    @endif
    
    
</div>
