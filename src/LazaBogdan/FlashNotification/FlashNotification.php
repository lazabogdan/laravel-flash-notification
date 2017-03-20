<?php 

namespace LazaBogdan\FlashNotification;

use Illuminate\Support\Facades\Facade;

class FlashNotification extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'flash-notification';
    }
}