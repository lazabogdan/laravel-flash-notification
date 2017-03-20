<div class="modal fade flash-notification-modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <strong>{{ Session::get('flash_notification.message') }}</strong>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<script>
  (function($){

    $(function(){
      $('.flash-notification-modal').modal('show');
    });

  })(jQuery);
</script>