<!-- Modal -->
<div class="modal fade" id="addBank">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Bank</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
            <form action="{{ route('admin.bankName') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="col-lg-4 col-form-label" for="validationCustom06">Bank Name
                            <span class="text-danger">*</span>
                        </label>
                        <input type="text" name="name" class="form-control input-default " placeholder="Insert Bank Name...">
                    </div>
                    <div class="mb-3">
                        <label class="col-lg-4 col-form-label" for="validationCustom06">Code
                            <span class="text-danger">*</span>
                        </label>
                        <input type="text" name="code" class="form-control input-default" placeholder="Insert Code...">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
