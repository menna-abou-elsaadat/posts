<div>
    <form class="row g-2" wire:submit.prevent="submit">
        @csrf
        <!-- post -->
        <div class="row">
            <div class="col-4">
                <label for="post">Post</label>
            </div>
            <div class="col-4">
                <textarea wire:model="post" class="form-control"></textarea>
                @error('post') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>
    <div class="flex items-center justify-end mt-4">
        <button class="btn btn-default">
        {{ __('Add Post') }}
        </button>
    </div>
</form>
</div>