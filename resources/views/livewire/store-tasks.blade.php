<div class="m-2">
    <h2 class="text-2xl font-bold">Store Taks </h2>
    <form action="" wire:submit.prevent="savedata">
        <div>
            <label for="" class="ml-2">Title</label>
            <input type="text" wire:model="title">
        </div>
        <div>
            <label for="" class="ml-2">Description</label>
            <input type="text" wire:model="description">
        </div>
        {{-- <div>
        <label for="" class="ml-2">image</label>
        <input type="file" wire:model="title">
        </div> --}}
        <div>
            <label for="" class="ml-2">Status</label>
            <input type="text" wire:model="status">
        </div>
        <div>
        
            <input type="submit" value="Save">
        </div>

    </form>
</div>
