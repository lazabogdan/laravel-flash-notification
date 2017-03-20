<script>
  (function($){

    $(function(){
      $('[href="{{ Session::get('flash_notification.open_tab') }}"]').tab('show');
    });

  })(jQuery);
</script>