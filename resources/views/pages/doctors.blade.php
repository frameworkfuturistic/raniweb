@extends('layouts.app')

@section('heading')
Doctors Masters
@endsection

@section('pagecss')
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.2/css/dataTables.dataTables.css">
<style>
</style>
@endsection

@section('app-content')
<div class="col-md-12">
    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
        Add Doctors
    </button>
    <div class="card">
        <div class="card-header bg-primary">
            <div class="card-title" style="color: white;">Doctors List</div>
        </div>
        <div class="card-body">
            <table id="dataTable" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Department</th>
                        <th>Photo</th>
                        <th>Profession/Degree</th>
                        <th>ConsultantType</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Anshu Kumar</td>
                        <td>Ortho</td>
                        <td><img src="https://media.istockphoto.com/id/1147544807/vector/thumbnail-image-vector-graphic.jpg?s=612x612&w=0&k=20&c=rnCKVbdxqkjlcs3xH87-9gocETqpspHFXu5dIGB4wuM=" width="100" /></td>
                        <td>Lorem</td>
                        <td>Lorem</td>
                        <td>
                            <button type="button" class="btn btn-primary">Edit</button>
                            <button type="button" class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Doctor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="table-responsive">
                        <table id="myTable" class="table table-bordered">
                            <tbody>
                                <tr>
                                    <td class="spin-label">Doctor Name <span class="spin-separator spin-star">*</span></td>
                                    <td class="spin-separator">:</td>
                                    <td>
                                        <input type="text" class="spin-valuearea form-control" id="doctorName" name="doctorName" />
                                    </td>
                                </tr>

                                <tr>
                                    <td class="spin-label">Departments <span class="spin-separator spin-star">*</span></td>
                                    <td class="spin-separator">:</td>
                                    <td colspan="2">
                                        <select class="spin-valuearea form-control" id="Zone" name="Zone" required="">
                                            <option value=""></option>
                                            <option value="">Select One</option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                        </select>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="spin-label">Photo <span class="spin-separator spin-star">*</span></td>
                                    <td class="spin-separator">:</td>
                                    <td>
                                        <input type="file" class="spin-valuearea form-control" id="photo" name="photo" />
                                    </td>
                                </tr>

                                <tr>
                                    <td class="spin-label">Professional/Degree<span class="spin-separator spin-star">*</span></td>
                                    <td class="spin-separator">:</td>
                                    <td>
                                        <input type="text" class="spin-valuearea form-control" id="degree" name="degree" />
                                    </td>
                                </tr>

                                <tr>
                                    <td class="spin-label">Consultant Type <span class="spin-separator spin-star">*</span></td>
                                    <td class="spin-separator">:</td>
                                    <td>
                                        <select class="spin-valuearea form-control" id="consultantType" name="consultantType" required="">
                                            <option value=""></option>
                                            <option value="">Select One</option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                        </select>
                                </tr>

                                <tr align="right">
                                    <td colspan="2">
                                        <input spin-valuearea class="form-check-input" type="checkbox" value="" id="showOnExpert">
                                        <label class="form-check-label spin-label" for="showOnExpert" style="color: red;">
                                            Show On Team of Experts
                                        </label>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- form -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>
<script>
    $(document).ready(function() {
        $("#dashActive").addClass('active');
        $('#dataTable').dataTable();
    });
</script>
@endsection