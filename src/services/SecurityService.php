<?php
/**
 * Created by PhpStorm.
 * User: renlikang
 * Date: 2018/11/7
 * Time: 3:15 PM
 */

namespace App\services;


use Symfony\Component\Security\Core\Encoder\BCryptPasswordEncoder;

class SecurityService
{
    public function i(BCryptPasswordEncoder $encoder)
    {
        $password = $encoder->encodePassword('123444', '');
        var_dump($password);exit;
    }
}