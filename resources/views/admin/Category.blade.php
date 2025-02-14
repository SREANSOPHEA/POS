@extends('masterPage')
@section('content')
<div class="row">
    <div class="col-md-12 col-lg-5 col-xl-5 order-0 mb-4">
        <div class="card">
            <form action="" method="post">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalCenterTitle">Add New Category</h5>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="col mb-3">
                            <label class="form-label">Name</label>
                            <div class="input-group input-group-merge">
                                <span  class="input-group-text"><i class="bx bx-rename"></i></span>
                                <input type="text " name="txtName" class="form-control" placeholder="Category's Name"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label class="form-label" for="basic-icon-default-email">Description</label>
                            <div class="input-group input-group-merge">
                                <textarea name="txtDescription" placeholder="Description" class="form-control" cols="30" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label class="form-label">Stauts</label>
                            <div class="justify-content-around d-flex">
                                <div class="text-success"><input type="radio"class="form-check-input"  name="txtStatus" value="Active"><b> Active</b></div>
                                <div class="text-danger"><input type="radio" class="form-check-input" name="txtStatus" value="Inactive" checked><b> Inactive</b></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <input type="checkbox" id="checkParent" class="form-check-input">
                            <label class="form-label">Is it subcategory?</label>
                        </div>
                    </div>
                    <div class="row" id="parentCategory" style="display: none">
                        <div class="col mb-3">
                            <label class="form-label">Parent Catgory</label>
                            <div class="input-group input-group-merge">
                                <select name="txtParent" class="form-select">
                                    <option value="">--- Select parent category ---</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary"> Close </button>
                    <input type="submit" name="Save" value="Save" class="btn btn-primary"/>
                </div>
            </form>
        </div>
    </div>
    <!--/ Add -->


    <div class="col-md-12 col-lg-7 col-xl-7 order-0 mb-4">
        <div class="card">
            <div class="d-flex justify-content-between align-items-center card-header">
                <h4 style="margin-bottom: 0px;"><strong><span><i>Category List</i></span></strong></h4>
            </div>
            <div class="card-body">
                <table class="table border-secondary table-bordered my-3">
                <thead class="p-3 text-center">
                    <tr >
                    <th class="col-1"><strong>№</strong></th>
                    <th class="col"><strong>Name</strong></th>
                    <th class="col-2"><strong>Actions</strong></th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i=1;
                    @endphp
                {{-- @foreach($cus as $rw) --}}
                    <tr>
                        <td class="p-3 text-center"><strong>1</strong></td>
                        <td class="p-3 ">
                            <p class="mb-2"></p>
                            <p class="mb-2"></p>
                            <p class="mb-2"></p>
                            <p class="mb-2"></p>
                        </td>
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
                    {{-- @endforeach --}}
                </tbody>
                </table>
            {{-- {{$cus->links()}} --}}
            </div>
        </div>
    </div>

</div>


@endsection
