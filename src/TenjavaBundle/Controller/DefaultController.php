<?php

namespace TenjavaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use TenjavaBundle\Entity\Role;

class DefaultController extends Controller {

    public function indexAction(): Response {
        /** @var \Doctrine\Common\Persistence\ObjectRepository */
        $repository = $this->getDoctrine()->getRepository(Role::class);
        dump($repository->findAll());
        return $this->render('TenjavaBundle::default/index.html.twig');
    }

}
