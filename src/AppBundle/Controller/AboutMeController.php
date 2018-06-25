<?php

namespace AppBundle\Controller;

use AppBundle\Entity\presentation;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;


/**
 *
 * @Route("/about_me")
 */
class AboutMeController extends Controller
{

    /**
     * Lists all presentation entities.
     *
     * @Route("/", name="about_me_show")
     * @Method("GET")
     */
    public function showAction()
    {


        return $this->render('about_me/show.html.twig');
    }

}
