<!-- Modal -->
<div class="modal fade" id="editBank{{ $item->id }}">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Bank</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
            <form action="bank-setting/{{ $item->id }}" method="POST">
                @method('put')
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="col-lg-4 col-form-label" for="validationCustom06">Bank Name
                            <span class="text-danger">*</span>
                        </label>
                        <input type="text" class="form-control input-default" value="{{ $item->name }}" name="name">
                    </div>
                    <div class="mb-3">
                        <label class="col-lg-4 col-form-label" for="validationCustom06">Code
                            <span class="text-danger">*</span>
                        </label>
                        <input type="text" class="form-control input-default" value="{{ $item->code }}" name="code">
                    </div>
                    <div class="mb-3">
                        <label class="col-lg-4 col-form-label" for="validationCustom06">Status
                        </label>
                        <div class="col-lg-6">
                            <select class="default-select wide form-control" id="validationCustom05" name="status">
                                @if ($item->status == '0')
                                    <option data-display="Disable" value="0" selected>Disable</option>
                                    <option data-display="Active" value="1">Active</option>
                                @else
                                    <option data-display="Active" value="1" selected>Active</option>
                                    <option data-display="Disable" value="0">Disable</option>
                                @endif
                            </select>
                            <div class="invalid-feedback">
                                Please select a one.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
