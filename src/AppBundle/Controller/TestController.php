<?php

namespace AppBundle\Controller;

use AppBundle\Entity\presentation;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;


/**
 *
 * @Route("/test")
 */
class TestController extends Controller
{

    /**
     * Lists all presentation entities.
     *
     * @Route("/", name="test_show")
     * @Method("GET")
     */
    public function showAction()
    {


        return $this->render('test/show.html.twig');
    }

}
