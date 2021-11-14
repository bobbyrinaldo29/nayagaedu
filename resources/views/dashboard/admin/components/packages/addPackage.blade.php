<!-- Modal -->
<div class="modal fade" id="addPackage">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Package</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
            <form action="{{ route('package.create') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="col-lg-4 col-form-label" for="validationCustom06">Package Name
                            <span class="text-danger">*</span>
                        </label>
                        <input type="text" name="packageName" class="form-control input-default " placeholder="Insert Package Name...">
                    </div>
                    <div class="mb-3">
                        <label class="col-lg-4 col-form-label" for="validationCustom06">Price
                            <span class="text-danger">*</span>
                        </label>
                        <input type="text" name="price" class="form-control input-default" placeholder="Insert Price...">
                    </div>
                    <div class="mb-3">
                        <label class="col-lg-4 col-form-label" for="validationCustom06">Description
                            <span class="text-danger">*</span>
                        </label>
                        <input type="text" name="description" class="form-control input-default" placeholder="Insert Description...">
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
