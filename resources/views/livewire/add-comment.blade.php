<div>
    <form class="row g-2" wire:submit.prevent="submit">
        @csrf
        <!-- comment -->
        <div class="row">
            <div class="col-4">
                <label for="comment_text">Comment</label>
            </div>
            <div class="col-4">
                <textarea wire:model="comment_text" class="form-control"></textarea>
                @error('comment_text') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>
    <div class="flex items-center justify-end mt-4">
        <button class="btn btn-default">
        {{ __('Add Comment') }}
        </button>
    </div>
</form>
</div>