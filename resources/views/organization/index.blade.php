@extends('layouts.app')

@section('content')
    <style>
        .table {
        background: #ffffff;
        border-radius: 0.2rem;
        width: 100%;
        padding-bottom: 1rem;
        color: #212529;
        margin-bottom: 0;
        }

        .table th:first-child,
        .table td:first-child {
        position: sticky;
        left: 0;
        background-color: #f5f2f2;
        color: #373737;
        }

        .table td {
        white-space: nowrap;
        }

        .table thead {
            background-color: #f5f2f2;
        }
    </style>

    <div class="container">
        
        <!--- Create Button --->
        <div class="col-12 mb-2">
            <a class="btn btn-success" href="{{ route('organization.create') }}">Create New Organization</a>
        </div>

        <!--- Information Table --->
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-hover border">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Logo</th>
                            <th scope="col">Organization Name</th>
                            <th scope="col">Email Address</th>
                            <th scope="col">Contact No</th>
                            <th scope="col">Address</th>
                            <th scope="col">Status</th>
                            <th scope="col" class="text-center">Registered</th>
                            <th scope="col" class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($organizations as $key => $organization)
                        <tr>
                            <th>{{ $key+1 }}</th>
                            <td>{{ $organization->logo }}</td>
                            <td>{{ $organization->name }}</td>
                            <td>{{ $organization->email }}</td>
                            <td>{{ $organization->phone }}</td>
                            <td>{{ $organization->address }}</td>
                            <td>
                                @if($organization->is_active ==1)
                                    <span class="badge rounded-pill bg-success">Active</span>
                                @else
                                    <span class="badge rounded-pill bg-secondary">Inactive</span>
                                @endif
                            </td>

                            
                            </td>
                            <td class="text-center">{{ date('F j, Y', strtotime($organization->created_at)) }}</td>
                            <td class="text-center">
                                <form action="{{ route('organization.destroy',$organization->id ) }}" method="POST" class="m-0">
                                    @csrf
                                    <a class="btn btn-primary btn-sm" href="">View</a>
                                    <a class="btn btn-success btn-sm" href="{{ route('organization.edit',$organization->id ) }}">Edit</a>
        
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!--- Pagination --->
    <div class="mt-4">
                
    </div>

@endsection