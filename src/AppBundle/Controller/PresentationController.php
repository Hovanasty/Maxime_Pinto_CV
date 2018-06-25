<?php

namespace AppBundle\Controller;

use AppBundle\Entity\presentation;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;


class PresentationController extends Controller
{

    /**
     * Lists all presentation entities.
     *
     * @Route("/", name="presentation_show")
     * @Method("GET")
     */
    public function showAction()
    {


        return $this->render('presentation/show.html.twig');
    }

}
