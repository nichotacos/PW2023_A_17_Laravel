@extends('admin.admin-dashboard') @section('content')

<!-- Modal -->
<div class="modal fade" id="addItem" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Item</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Name</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Name">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Price</label>
                    <input type="number" class="form-control" id="formGroupExampleInput" placeholder="Price">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Stock</label>
                    <input type="number" class="form-control" id="formGroupExampleInput" placeholder="Stock">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Rating</label>
                    <input type="number" class="form-control" id="formGroupExampleInput" placeholder="Rating">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Review</label>
                    <input type="number" class="form-control" id="formGroupExampleInput" placeholder="Review">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="editItem" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit User</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Name</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Name">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Price</label>
                    <input type="number" class="form-control" id="formGroupExampleInput" placeholder="Price">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Stock</label>
                    <input type="number" class="form-control" id="formGroupExampleInput" placeholder="Stock">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Rating</label>
                    <input type="number" class="form-control" id="formGroupExampleInput" placeholder="Rating">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Review</label>
                    <input type="number" class="form-control" id="formGroupExampleInput" placeholder="Review">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="deleteItem" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Delete Item</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Are you sure to delete this item?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Confrim</button>
            </div>
        </div>
    </div>
</div>


<div class="content">
    <div class="container-fluid" id="main2">
        <h1 class="mx-2 fw-bold mb-3">Stocks</h1>
        <div class="row mx-2">
            <p>Find Items</p>
            <div class="col-lg-6">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="" aria-label="Recipient's username"
                        aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary btn-primary text-center" type="button"
                        id="button-addon2"><i class="fa-solid fa-magnifying-glass"></i></button>
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
                        <th>Image</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>Rating</th>
                        <th>Review</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        <?php $i=0; ?>
                        @foreach($products as $items)
                        <?php $i++; ?>
                    <tr>
                        <td>{{ $i }}</td>
                        <td><img src="{{ $items['image'] }}" style="height: 100px; width: 100px;"></td>
                        <td>{{ $items['name'] }}</td>
                        <td>Rp {{ number_format($items['price']) }}</td>
                        <td>{{ $items['stock'] }}</td>
                        <td>{{ $items['rating'] }}</td>
                        <td>{{ $items['review'] }}</td>
                        <td>
                            <div>
                                <button class="w-50 my-2 btn btn-warning" data-bs-toggle="modal"
                                    data-bs-target="#editItem">Update</button>
                                <button class="w-50 my-2 btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#deleteItem">Delete</button>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection