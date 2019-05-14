<!-- The Modal -->
<div class="modal fade" id="notesModal-{{$request->id}}">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                @if(\Illuminate\Support\Facades\Auth::user()->role->nama == "Administrator")
                <h4 class="modal-title">{{$request->name}} Meeting Notes</h4>
                @else
                    <h4 class="modal-title">Your Meeting's Notes</h4>
                @endif
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                {{$request->notes}}
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>