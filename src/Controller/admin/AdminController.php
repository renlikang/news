<?php
/**
 * Created by PhpStorm.
 * User: renlikang
 * Date: 2018/11/6
 * Time: 3:13 PM
 */

namespace App\Controller\admin;


use App\Entity\Admin\Admin;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class AdminController extends AbstractController
{
    public function insert($username, $password)
    {
        $entityManager = $this->getDoctrine()->getManager("admin");
        $model = new Admin;
        $model->setUsername($username);
        $model->setPassword(md5($password));
        $entityManager->flush();
        return new Response('Saved new product with id '.$model->getId());
    }
}