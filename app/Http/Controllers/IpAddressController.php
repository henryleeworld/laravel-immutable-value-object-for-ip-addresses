<?php

namespace App\Http\Controllers;

use Darsyn\IP\Exception;
use Darsyn\IP\Version\IPv4;

class IpAddressController extends Controller
{
    public function check() 
    {
        try {
            $ip = IPv4::factory(request()->ip());
            echo '有效的 IP 位址：' . request()->ip()  . '。'. PHP_EOL;
        } catch (Exception\InvalidIpAddressException $e) {
            exit('提供的 IP 地址無效！');
        }
        if (!$ip->isPrivateUse()) {
            echo request()->ip() . ' ' . '為非私人使用。';
        }
    }
}
