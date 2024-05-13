@extends('backend.layout.app2')

@section('style')
@endsection

@section('content')
<section class="section">
    <div class="row">
    <div class="col-lg-12">
        <div class="card">
            @include('layouts/_messages')
        <div class="card-body">
            <h5 class="card-title">Category List</h5>
            <a href="{{ url('/panel/category/add') }}" class="btn btn-primary" style="float:right; margin-top:-51px;">Add New</a>

            <!-- Default Table -->
            <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Slug</th>
                <th scope="col">Title</th>
                <th scope="col">Meta-Title</th>
                <th scope="col">Meta-Description</th>
                <th scope="col">Meta-Keyword</th>
                <th scope="col">Status</th>
                <th scope="col">Status</th>
                <th scope="col">Created On</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse($getRecord as $record)
                    <tr>
                        <th scope="row">{{ $record->id }}</th>
                        <td>{{ $record->name }}</td>
                        <td>{{ $record->slag }}</td>
                        <td>{{ $record->title }}</td>
                        <td>{{ $record->meta_title }}</td>
                        <td>{{ $record->meta_description }}</td>
                        <td>{{ $record->meta_keywords }}</td>
                        <td>{{ !empty($record->status) ? 'Active' : 'Inactive'}}</td>
                        <td>{{ date('d-m-Y H:i A', strtotime($record->created_at)) }}</td>
                        <td>
                            <a href="{{ url('panel/category/edit/'.$record->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <a onclick="return confirm('Sure to Delete?')" href="{{ url('panel/category/delete/'.$record->id) }}" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="100%">Records not found</td>
                    </tr>
                @endforelse
            </tbody>
            {!! $getRecord->appends(Illuminate\Support\Facades\Request::except('page'))->links() !!}
            </table>
            <!-- End Default Table Example -->
        </div>
        </div>
    </div>
    </div>
</section>


@endsection

@section('script')
@endsection



