@extends('dashboard.layouts.app', ['title' => 'Settings'])

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            @if (session('errors'))
                <div class="alert alert-warning solid alert-dismissible fade show" role="alert">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                    </button>
                </div>
            @endif
            @if (Session::has('success'))
                <div class="alert alert-success solid alert-dismissible fade show" role="alert">
                    <strong>Success! </strong>{{ Session::get('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                    </button>
                </div>
            @endif
            @if (Session::has('error'))
                <div class="alert alert-danger solid alert-dismissible fade show" role="alert">
                    <strong>Failed! </strong>{{ Session::get('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                    </button>
                </div>
            @endif
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Bank Status</h4>
                        <button type="button" class="btn btn-rounded btn-success" data-bs-toggle="modal"
                            data-bs-target="#addBank"><span class="btn-icon-start text-success"><i
                                    class="fa fa-plus color-success"></i>
                            </span>Add</button>
                        @include('dashboard.admin.components.addBank')
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example4" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Bank Name</th>
                                        <th>Code</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    @foreach ($bank as $item)
                                        <tr>
                                            <td>{{ $no }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->code }}</td>
                                            <td>
                                                @if ($item->status == '1')
                                                    <span class="badge light badge-success">Active</span>
                                                @else
                                                    <span class="badge light badge-danger">Disable</span>
                                                @endif
                                            </td>
                                            <td><button type="button" class="btn btn-rounded btn-primary"
                                                    data-bs-toggle="modal" data-bs-target="#editBank{{ $item->id }}"
                                                    data-id="{{ $item->id }}">Edit</button>
                                                <button type="button" class="btn btn-rounded btn-danger"
                                                    data-id="{{ $item->id }}">Delete</button>
                                            </td>
                                        </tr>
                                        <?php $no++; ?>
                                        @include('dashboard.admin.components.editBank')
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
