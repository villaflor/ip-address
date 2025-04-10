<?php

namespace Villaflor\IpAddress;

class Ip
{
    private const URL = 'https://worker.villaflor.one/get-ip';

    public static function getPublicIp(): string
    {
        return file_get_contents(self::URL);
    }
}
