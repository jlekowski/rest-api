<?php

namespace RestApi\Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations\View;

class UsersController extends Controller
{
    /**
     * @return array
     * @View()
     */
    public function getUsersAction()
    {
//        throw new \Exception('test exception');
        return ['users' => ['Jan', 'Test']];
    }

    /**
     * @return string
     * @View()
     */
    public function exceptionAction()
    {
        return 'exception';
    }
}