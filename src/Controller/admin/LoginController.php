<?php
/**
 * Created by PhpStorm.
 * User: renlikang
 * Date: 2018/11/6
 * Time: 3:20 PM
 */

namespace App\Controller\admin;

use App\Entity\Admin\Admin;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\BCryptPasswordEncoder;
use Symfony\Component\Routing\Annotation\Route;

class LoginController extends AbstractController
{
    /**
     * @Route("/admin/login", methods={"POST"})
     */
    public function login(BCryptPasswordEncoder $encoder)
    {
        $password = $encoder->encodePassword('123444', '');
        var_dump($password);exit;
        exit;
        $request = Request::createFromGlobals();
        $userName = $request->request->get('username');
        $password = $request->request->get('password');
        $user = new Admin;
        $user->setPassword("aaaaaaaaa");
        var_dump($user->getPassword());
        exit;
    }
}