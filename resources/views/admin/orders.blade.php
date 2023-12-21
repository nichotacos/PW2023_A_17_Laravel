@extends('admin.admin-dashboard') @section('content')

<div class="content">
    <div class="container-fluid" id="main2">
        <h1 class="mx-2 fw-bold mb-3">Orders</h1>
        <div class="row mx-2">
            <p>Find Items</p>
            <div class="col-lg-6">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary btn-primary text-center" type="button" id="button-addon2"><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
            </div>
            <div class="col-lg-6 text-end">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addItem">+ Add
                    Items</button>
            </div>

        </div>
        <div class="container-fluid mt-4">
            <div class="row d-flex justify-content-start">
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Product Name</th>
                        <th>Quantity</th>
                        <th>Total Price</th>
                        <th>Tracking ID</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    @forelse($carts as $items)
                    <tr>
                        <td>{{ $items->id }}</td>
                        <td>{{ $items->user->username }}</td>
                        <td>{{ $items->product->name }}</td>
                        <td>{{ $items->quantity }}</td>
                        <td>{{ $items->total_price }}</td>
                        <td>{{ $items->tracking_id }}</td>
                        <td>{{ $items->status }}</td>
                        <td>
                            @if($items->status == 'On process')
                            <form action="{{ route('ship') }}" method="POST"> @csrf
                                <input type="text" hidden value="{{ $items->id }}" name="id">
                                <button class="w-50 my-2 btn btn-success" type="submit">Ship</button>
                            </form>
                            @else
                            Order Shipped
                            @endif
                        </td>
                    </tr>
                    @empty
                    <div class="alert alert-danger my-4">
                        <b>No orders done.</b>
                    </div>
                    @endforelse
                </table>
            </div>
        </div>
    </div>
</div>
@endsection