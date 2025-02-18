@extends('masterPage')
@section('content')
<div class="row">
    <div class="col-12 order-0 mb-4">
        <div class="card">
            <div class="d-flex justify-content-between align-items-center card-header">
                <h4 style="margin-bottom: 0px;"><strong><span><i>Product List</i></span></strong></h4>
                <a href="/admin/addProuct" class="btn btn-danger">+ Add new Product</a>
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
