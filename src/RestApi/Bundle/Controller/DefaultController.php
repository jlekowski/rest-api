<?php

namespace RestApi\Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use FOS\RestBundle\Controller\Annotations\View;

class DefaultController extends Controller
{
    /**
     * @Route("/hello/{name}")
     * @View()
     */
    public function indexAction($name)
    {
        return array('name' => $name);
    }
}
