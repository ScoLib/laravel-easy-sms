# Laravel Easy SMS

[Easy SMS](https://github.com/overtrue/easy-sms) For Laravel 5.*

[![Latest Stable Version](https://poser.pugx.org/scolib/laravel-easy-sms/v/stable)](https://packagist.org/packages/scolib/laravel-easy-sms) [![Total Downloads](https://poser.pugx.org/scolib/laravel-easy-sms/downloads)](https://packagist.org/packages/scolib/laravel-easy-sms) [![Latest Unstable Version](https://poser.pugx.org/scolib/laravel-easy-sms/v/unstable)](https://packagist.org/packages/scolib/laravel-easy-sms) [![License](https://poser.pugx.org/scolib/laravel-easy-sms/license)](https://packagist.org/packages/scolib/laravel-easy-sms)
[![Analytics](https://ga-beacon.appspot.com/UA-140657639-1/laravel-easy-sms/readme)](https://packagist.org/packages/scolib/laravel-easy-sms)
[![Code Climate](https://codeclimate.com/github/ScoLib/laravel-easy-sms/badges/gpa.svg)](https://codeclimate.com/github/ScoLib/laravel-easy-sms)

## Install

Via Composer

``` bash
$ composer require scolib/laravel-easy-sms
```



## Publish Configuration

```php
php artisan vendor:publish --provider "Sco\LaravelEasySms\LaravelServiceProvider"
```



## Usage

``` php
EasySms::send(13188888888, [
    'content'  => '您的验证码为: 6379',
    'template' => 'SMS_001',
    'data' => [
        'code' => 6379
    ],
]);

// .....
$order = ...;
$message = new OrderPaidMessage($order);

EasySms::send(13188888888, $message);
```



## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE_OF_CONDUCT](CODE_OF_CONDUCT.md) for details.



## Security

If you discover any security related issues, please email slice1213@gmail.com instead of using the issue tracker.



## Credits

- [klgd](https://github.com/klgd)
- [All Contributors](../../contributors)


## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

