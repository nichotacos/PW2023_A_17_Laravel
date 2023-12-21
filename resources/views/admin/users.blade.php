@extends('admin.admin-dashboard') @section('content')
<div class="content">
    <div class="container-fluid" id="main2">
        <h1 class="mx-2 fw-bold mb-3">Orders</h1>
        <div class="row mx-2">
            <p>Find Users</p>
            <div class="col-lg-6">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary btn-primary text-center" type="button" id="button-addon2"><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
            </div>
            <div class="col-lg-6 text-end">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addItem">+ Add
                    Users</button>
            </div>

        </div>
        <div class="container-fluid mt-4">
            <div class="row d-flex justify-content-start">
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Telephone</th>
                        <th>Status</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                    @forelse($users as $items)
                    <tr>
                        <td>{{ $items->id }}</td>
                        <td>{{ $items->username }}</td>
                        <td>{{ $items->full_name }}</td>
                        <td>{{ $items->email }}</td>
                        <td>{{ $items->telephone }}</td>
                        <td>
                            @if($items->active === 1)
                            Activated
                            @else
                            Inactive
                            @endif
                        </td>
                        <td>
                            @if($items->address == NULL)
                            Address N/A
                            @else
                            {{$items->address}}
                            @endif
                        </td>
                        <td>
                            <form action="{{ route('delete', $items->id) }}" method="post"> @csrf @method('DELETE')
                                <input type="text" hidden value="{{ $items->id }}" name="id">
                                <button class="w-50 my-2 btn btn-success" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <div class="alert alert-danger my-4">
                        <b>No users registered.</b>
                    </div>
                    @endforelse
                </table>
            </div>
        </div>
    </div>
</div>
@endsection