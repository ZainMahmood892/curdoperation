@extends('layouts.app')

@section('content')
<div class="row mb-3">
    <div class="col-md-6">
        <h2>Item Details</h2>
    </div>
    <div class="col-md-6 text-end">
        <a href="{{ route('items.index') }}" class="btn btn-secondary">Back</a>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <div class="mb-3">
            <strong>ID:</strong> {{ $item->id }}
        </div>
        <div class="mb-3">
            <strong>Name:</strong> {{ $item->name }}
        </div>
        <div class="mb-3">
            <strong>Description:</strong> {{ $item->description ?? 'N/A' }}
        </div>
        <div class="mb-3">
            <strong>Price:</strong> ${{ number_format($item->price, 2) }}
        </div>
        <div class="mb-3">
            <strong>Quantity:</strong> {{ $item->quantity }}
        </div>
        <div class="mb-3">
            <strong>Created At:</strong> {{ $item->created_at }}
        </div>
        <div class="mb-3">
            <strong>Updated At:</strong> {{ $item->updated_at }}
        </div>
    </div>
</div>
@endsection
