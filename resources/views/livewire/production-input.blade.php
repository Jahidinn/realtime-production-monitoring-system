<div>
    <div class="card">
        <div class="card-header">Input data</div>
        <div class="card-body">

            @include('components.alert')

            <form wire:submit.prevent="store">
                <div class="mb-3">
                    <label for="line_id" class="form-label">Line</label>
                    <input type="number" class="form-control  @error('line_id') is-invalid @enderror" name="line_id" id="line_id" wire:model="line_id">
                    @error('line_id')
                    <div class="invalid-veedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Product</label>
                    <input type="text" name="name" id="name" class="form-control  @error('name') is-invalid @enderror" wire:model="name">
                    @error('name')
                    <div class="invalid-veedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="amount" class="form-label">Amount</label>
                    <input type="text" name="amount" id="amount" class="form-control  @error('amount') is-invalid @enderror" wire:model="amount">
                    @error('amount')
                    <div class="invalid-veedback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-success">Input data</button>
            </form>
        </div>
    </div>
</div>
