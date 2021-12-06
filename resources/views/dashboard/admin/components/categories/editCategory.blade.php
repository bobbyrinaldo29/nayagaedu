<!-- Modal -->
<div class="modal fade" id="editCategory{{ $item->id }}">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
            <form action="categories/{{ $item->id }}" method="POST">
                @method('put')
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="col-lg-4 col-form-label" for="validationCustom06">Category Name
                            <span class="text-danger">*</span>
                        </label>
                        <input type="text" class="form-control input-default" value="{{ $item->name }}" name="name">
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
