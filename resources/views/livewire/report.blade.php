<div class="m-auto text-center">
    <form wire:submit.prevent="submit">
        <div class="text-center" style="display: inline-flex">
            <div class="form-group">
                <label for="text" class="mb-2">Logo</label>
                <input type="text" wire:model="name" class="form-control" style="width: 90%!important">
                @error('name') <span class="text-danger font-italic">{{ $message }}</span> @enderror
            </div>
            <button type="submit" class="btn btn-sm btn-success" style="height: 35px; margin-top: 32px;">
                Report</button>
        </div>
    </form>
</div>
