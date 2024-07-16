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
            echo __('Valid IP address:') . request()->ip()  . __('.') . PHP_EOL;
        } catch (Exception\InvalidIpAddressException $e) {
            exit(__('The IP address provided is invalid!'));
        }
        if (!$ip->isPrivateUse()) {
            echo request()->ip() . ' ' . __('is for non-private use.') . PHP_EOL;
        }
    }
}
