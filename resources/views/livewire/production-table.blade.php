<div>
    <div class="mb-3">
        <input type="text" name="search" wire:model="search" class="form-control" placeholder="Cari data ...">
    </div>
    <table class="table">
        @include('components.alert')
        <thead>
            <tr>
                <th>No</th>
                <th>Line</th>
                <th>Amount</th>
                <th>Time</th>
                <th style="min-width: 200px;">Action</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($productions as $index => $contact)     
            <tr>
                <td>{{ $productions->firstItem() + $index }}</td>
                <td>Line {{ $contact->line_id }}</td>
                <td>{{ $contact->amount }}</td>
                <td>{{ $contact->created_at->format('H:i:s') }}</td>
                <td>
                    <a href="{{ route('production.home', $contact->id) }}" class="badge bg-primary text-decoration-none rounded-0">Detail</a>
                    <a href="{{ route('production.home', $contact->id) }}" class="badge bg-success text-decoration-none rounded-0">Edit</a>
                    <button wire:click="delete({{ $contact->id }})" class="badge bg-danger border-0 rounded-0">Delete</button>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
    {{ $productions->links() }}
</div>
