# IpAddress

A light and simple package to obtain the server's public IP Address. This package is useful in updating your DNS target
server IP Address if you are using a dynamic IP Address in hosting your server.

<p align="center">
  <a href="https://travis-ci.org/github/villaflor/ip-address">
    <img src="https://img.shields.io/travis/villaflor/ip-address.svg?style=flat">
  </a>
  <a href="https://github.com/villaflor/ip-address/blob/main/LICENSE">
    <img src="https://img.shields.io/github/license/villaflor/ip-address.svg?style=flat">
  </a>
  <a href="https://travis-ci.org/github/villaflor/ip-address">
    <img src="https://img.shields.io/packagist/php-v/villaflor/ip-address">
  </a>
  <a href="https://packagist.org/packages/villaflor/ip-address">
    <img src="https://img.shields.io/packagist/v/villaflor/ip-address">
  </a>
</p>

## Installation

```bash
composer require villaflor/ip-address
```

## Usage

It is very easy to use this package. Here is an example of printing the public IP Address of a server.

```php
use Villaflor\IpAddress\Ip;

public function printPublicIpAddress(): void
{
    $publicIp = Ip::getPublicIp();
    
    echo $publicIp;
}
```
