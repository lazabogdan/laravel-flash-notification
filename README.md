# laravel-flash-notification

Utility package for displaying flash notifications in Laravel.

## Installation

> The package is not published to Packagist so the only way to install it is via a vcs repository entry to your `composer.json`.

```bash
{
    "repositories": [
        {
            "type": "vcs",
            "url":  "git@github.com:lazabogdan/laravel-flash-notification.git"
        }
    ],
    "require": {
        "lazabogdan/laravel-flash-notification": "dev-master"
    }
}
```

### Service provider

> Add to `providers` in config/app.php

```php
LazaBogdan\FlashNotification\FlashNotificationServiceProvider::class
```

## Usage

### Controller

> Trigger a flash notification.

```php
use LazaBogdan\FlashNotification\FlashNotification;

public function create()
{
    // Success notification
    FlashNotification::success('Yay! Changes were saved.');
    
    // Error notification
    FlashNotification::error('Ouch! Changes were not saved.');
    
    // Info notification
    FlashNotification::message('Hmm! Just a message.');
    
    return back();
}
```

### Layout

> Display the notification somewhere in your layout.

```
@include('flash-notification::flash-notification')
```