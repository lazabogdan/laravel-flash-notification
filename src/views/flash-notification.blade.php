@if (Session::has('flash_notification.message'))
  @if (Session::has('flash_notification.overlay'))
    @include('flash-notification::partials/_modal')
  @else
    @include('flash-notification::partials/_alert')
  @endif
@endif

@if (Session::has('flash_notification.open_collapsible'))
  @include('flash-notification::partials/_open_collapsible')
@endif

@if (Session::has('flash_notification.open_modal'))
  @include('flash-notification::partials/_open_modal')
@endif

@if (Session::has('flash_notification.open_tab'))
  @include('flash-notification::partials/_open_tab')
@endif