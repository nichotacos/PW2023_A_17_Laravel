@extends('admin.admin-dashboard') @section('content')

<!-- Modal -->
<div class="modal fade" id="addUser" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Add User</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Username</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Username">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Password</label>
                    <input type="password" class="form-control" id="formGroupExampleInput" placeholder="Password">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Email</label>
                    <input type="email" class="form-control" id="formGroupExampleInput2" placeholder="Email">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Telephone</label>
                    <input type="telephone" class="form-control" id="formGroupExampleInput2" placeholder="Email">
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
<div class="modal fade" id="editUser" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit User</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Username</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Username">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Password</label>
                    <input type="password" class="form-control" id="formGroupExampleInput" placeholder="Password">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Email</label>
                    <input type="email" class="form-control" id="formGroupExampleInput2" placeholder="Email">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Telephone</label>
                    <input type="telephone" class="form-control" id="formGroupExampleInput2" placeholder="Email">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Joined Date</label>
                    <input type="date" class="form-control" id="formGroupExampleInput2" placeholder="Joined Date">
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
<div class="modal fade" id="deleteUser" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Delete User</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Are you sure to delete this user?
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
        <h1 class="mx-2 fw-bold mb-3">Users</h1>
        <div class="row mx-2">
            <p>Find Users</p>
            <div class="col-lg-6">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="" aria-label="Recipient's username"
                        aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary btn-primary text-center" type="button"
                        id="button-addon2"><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
            </div>
            <div class="col-lg-6 text-end">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addUser">+ Add
                    Items</button>
            </div>

        </div>


        <div class="container-fluid mt-4">
            <div class="row d-flex justify-content-start">
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Telephone</th>
                        <th>Joined Date</th>
                        <th>Action</th>
                    </tr>

                    @foreach($data as $items)
                    <tr>
                        <td>{{ $items['id'] }}</td>
                        <td>{{ $items['username'] }}</td>
                        <td>{{ $items['email'] }}</td>
                        <td>{{ $items['telephone'] }}</td>
                        <td>{{ $items['join-date'] }}</td>
                        <td>
                            <div>
                                <button class="w-50 my-2 btn btn-warning" data-bs-toggle="modal"
                                    data-bs-target="#editUser">Update</button>
                                <button class="w-50 my-2 btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#deleteUser">Delete</button>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>

@endsection