@extends('masterPage')
@section('content')

<div class="card">
    <div class="col-12">
            <div class="d-flex justify-content-between align-items-center card-header">
                <h4 style="margin-bottom: 0px;"><strong><span><i>User List</i></span></strong></h4>
                <a href="/admin/addUser" class="btn btn-danger">+ Create new User</a>
            </div>
            <div class="card-body">
                <table class="table border-secondary table-bordered my-3">
                <thead class="p-3 text-center">
                    <tr >
                    <th class="col-1"><strong>№</strong></th>
                    <th class="col"><strong>Name</strong></th>
                    <th class="col"><strong>Role</strong></th>
                    <th class="col"><strong>Campus</strong></th>
                    <th class="col-2"><strong>Actions</strong></th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i=1;
                    @endphp
                    <tr>
                        <td class="p-3 text-center"><strong>1</strong></td>
                        <td class="p-3 ">
                            <p class="mb-2">Ra Smach</p>
                            <p class="mb-2"></p>
                            <p class="mb-2"></p>
                            <p class="mb-2"></p>
                        </td>
                        <td class="p-3 text-center">Admin</td>
                        <td class="p-3 text-center">Cambodia</td>
                        <td class="p-3 text-center">
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown" >
                                <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a href="" class="dropdown-item"><i class="bx bx-edit-alt me-1" ></i> Edit</a>
                                    <form action="">
                                        <input type="hidden" name="txtCusStatus" class="form-control" placeholder="Enter Customer Status" value="0"/>
                                         <button type="submit" onclick="return confirm('Are you sure to delete?');" class="dropdown-item"><i class="bx bx-trash me-1"></i> Delete</button>
                                    </form>

                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
                </table>
            </div>
    </div>
</div>

@endsection