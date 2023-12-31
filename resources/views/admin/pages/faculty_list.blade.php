@extends('admin.layouts.index')
@section('title', 'Faculty List')
@include('modals.faculty_list_modal')
@include('modals.edit_modals.faculty_edit')

@section('content')

    {{-- <div class="container"> --}}
    {{-- <h1>this is FacultyList page</h1> --}}
    {{-- </div> --}}
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
        add Teacher
    </button>
    <div class="container mt-5">
        <h2>Faculty List</h2>
        <!-- Search bar -->
        
        {{-- <input type="text" id="searchInput" class="form-control mb-3" placeholder="Search Faculty"> --}}
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>ID no</th>
                    <th>Name</th>
                    <th>Course</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Faculty data goes here -->
                @forelse ($data as $teachers)
                <tr>
                    <td>{{ $teachers->id }}</td>
                    <td>{{ $teachers->id_no }}</td>
                    <td>{{ $teachers->name }}</td>
                    <td>{{ $teachers->course }}</td>
                    <td>{{ $teachers->email }}</td>
                    <td>
                        <form action="{{ route('deletefaculty', $teachers->id) }}" method="POST">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#EditModal{{$teachers->id}}" >
                                edit 
                            </button>
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" type="submit">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                    <p>No data inputed</p>
                @endforelse ($data as $teachers)
            </tbody>
        </table>
        <!-- Pagination -->
        <ul id="pagination" class="pagination"></ul>
    </div>
@endsection

