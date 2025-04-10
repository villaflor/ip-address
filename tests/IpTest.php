<?php

use Villaflor\IpAddress\Ip;

it('can get public ip address', function () {
    $publicIp = Ip::getPublicIp();

    expect($publicIp)->toMatch('/(([0-9]|[1-9][0-9]|1[0-9][0-9]|2[0-4][0-9]|25[0-5])\\.){3}([0-9]|[1-9][0-9]|1[0-9][0-9]|2[0-4][0-9]|25[0-5])/');
});
