<script>
  (function($){

    $(function(){
      $('{{ Session::get('flash_notification.open_modal') }}').modal('show');
    });

  })(jQuery);
</script>