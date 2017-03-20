<div class="alert alert-{{ Session::get('flash_notification.level') }} alert-dismissable" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  {{ Session::get('flash_notification.message') }}
</div>