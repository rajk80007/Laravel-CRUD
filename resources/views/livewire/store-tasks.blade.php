<div class="w-[60%] mx-auto">
    <h2 class="text-2xl font-bold text-center my-4">Store Taks </h2>
    <form action="" wire:submit.prevent="savedata" class="m-auto w-[50%]">
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

    </form>
</div>
