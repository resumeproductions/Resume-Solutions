<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">{{Auth::user()->first_name}}'s Resumes</h4>
      </div>
      <div class="modal-body">
        @foreach(Auth::user()->templates as $index => $template)
          <a href="{{{ action('UsersController@show', $template->id )}}}">Resume {{{ $index + 1 }}}</a>
        @endforeach
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>