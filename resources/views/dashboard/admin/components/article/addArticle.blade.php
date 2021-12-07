@extends('dashboard.layouts.app', ['title' => 'Create Article'])

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="project-page d-flex justify-content-between align-items-center flex-wrap">
                <div class="project mb-4">
                    <h1 class="nav-link active" data-bs-toggle="tab" href="#AllStatus" role="tab">Create New Article</h1>
                </div>
                <div class="mb-4">
                    <a href="javascript:void(0);" class="btn btn-primary btn-rounded fs-18">Save and Close</a>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="profile card card-body px-3 py-3">
                        <input type="text" class="form-control input-default" name="name" placeholder="Insert title here..."
                            required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-8">
                    <div class="card">
                        <div class="card-body">
                            <textarea class="form-control textarea-content" id="trumbowyg"
                                placeholder="Enter the Description" name="description"></textarea>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="profile-statistics">
                                        <label class="form-label">Author<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" value="{{ Auth::user()->firstname }}"
                                            readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <label class="form-label">Category<span class="text-danger">*</span></label>
                                    <select class="default-select wide form-control" id="validationCustom05" name="status">
                                        @foreach ($category as $item)
                                            <option value="{{ $item->name }}" selected>{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- row -->
            {{-- <div class="row">
                <div class="col-xl-12 col-xxl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Create Article</h4>
                        </div>
                        <form>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label class="col-lg-4 col-form-label" for="validationCustom06">Title Name
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control input-default" name="name"
                                        placeholder="Insert title here..." required>
                                </div>
                                <div class="mb-3">
                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Author<span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control"
                                                value="{{ Auth::user()->firstname }}" readonly>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Category<span
                                                    class="text-danger">*</span></label>
                                            <select class="default-select wide form-control" id="validationCustom05"
                                                name="status">

                                                <option data-display="Disable" value="0" selected>Disable</option>
                                                <option data-display="Active" value="1">Active</option>

                                                <option data-display="Active" value="1" selected>Active</option>
                                                <option data-display="Disable" value="0">Disable</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body custom-ekeditor">
                                    <textarea class="form-control textarea-content" id="trumbowyg"
                                        placeholder="Enter the Description" name="description"></textarea>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
@endsection
