<!-- Modal -->
<div class="modal fade" id="deleteArticle{{ $item->id }}">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Delete Bank</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
            <form action="{{ route('articles.destroy', $item->id) }}" method="POST">
                @csrf
                @method('delete')
                <div class="modal-body">
                    <h3 class="text-center">Do you want to delete this data?</h3>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary light" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger">Yes</button>
                </div>
            </form>
        </div>
    </div>
</div>
