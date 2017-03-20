<script>
  (function($){

    $(function(){
      $('{{ Session::get('flash_notification.open_collapsible') }}').collapse('show');
    });

  })(jQuery);
</script>