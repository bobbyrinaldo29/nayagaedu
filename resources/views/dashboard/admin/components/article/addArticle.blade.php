@extends('dashboard.layouts.app', ['title' => 'Create Article'])

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
            <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data"
                class="needs-validation" novalidate>
                @csrf
                <div class="project-page d-flex justify-content-between align-items-center flex-wrap">
                    <div class="project mb-4">
                        <h1 class="nav-link active" data-bs-toggle="tab" href="#AllStatus" role="tab">Create New Post
                        </h1>
                    </div>
                    <div class="mb-4">
                        <button type="submit" class="btn btn-primary btn-rounded fs-18">Save and Close</button>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="profile card card-body px-3 py-3">
                            <input type="text" class="form-control input-default" name="title"
                                placeholder="Insert title here..." required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-8">
                        <div class="card">
                            <div class="card-body">
                                <textarea class="form-control textarea-content" id="editor1"
                                    placeholder="Enter the Description" name="content"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="profile-statistics">
                                            <label class="form-label">Cover Picture<span
                                                    class="text-danger">*</span></label>
                                            <input type="file" name="image" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                        <label class="form-label">Publish Status<span
                                                class="text-danger">*</span></label>
                                        <select class="default-select wide form-control" id="validationCustom05"
                                            name="publish" required>
                                            <option selected>Select One</option>
                                            <option value="1">Publish</option>
                                            <option value="0">Draft</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                        <label class="form-label">Category<span class="text-danger">*</span></label>
                                        <select class="default-select wide form-control" id="validationCustom05"
                                            name="category" required>
                                            <option selected>Select One</option>
                                            @foreach ($category as $item)
                                                <option value="{{ $item->name }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="profile-statistics">
                                            <label class="form-label">Editor<span
                                                    class="text-danger">*</span></label>
                                            <select class="default-select wide form-control" id="validationCustom05"
                                                name="editor" required>
                                                <option selected>Select One</option>
                                                @foreach ($user as $item)
                                                    <option value="{{ $item->firstname }}">{{ $item->firstname }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
