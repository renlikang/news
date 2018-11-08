<?php
/**
 * Created by PhpStorm.
 * User: renlikang
 * Date: 2018/11/5
 * Time: 1:22 PM
 */

namespace App\Controller;

use App\Entity\Article;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class LuckyController extends AbstractController
{
    public function number()
    {
        $number = random_int(0, 100);

        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }

    public function show($id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $model = new Article;
        $model->setAuthorId(1);
        $model->setContent(['a' => 1]);
        $model->setType(1);
        $model->setTitle("标题党");
        $model->setSubTitle('副标题');
        $model->setHeadImg("");
        $model->setOrderId(10);
        $model->setStatus(1);
        $model->setCTime(date('Y-m-d H:i:s'));
        $model->setUTime(date('Y-m-d H:i:s'));
        $model->setDeleteFlag(0);
        $model->setSource("pgc");
        $entityManager->persist($model);
        $entityManager->flush();
        return new Response('Saved new product with id '.$model->getId());
    }

}