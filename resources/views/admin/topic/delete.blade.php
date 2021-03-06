<!-- Modal -->
<div class="modal fade" id="delModal{{$topic->idtopic}}" tabindex="5" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="topic">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Topic:  <strong>{{$topic->nametopic}}</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container" align="right">
                    <button class="btn btn-outline-secondary btn-sm" data-dismiss="modal">cancel</button>
                    <a href="admin/topic/delete/{{$topic->idtopic}}" title="Delete">
                        <button class="btn btn-outline-danger btn-sm">Delete</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>