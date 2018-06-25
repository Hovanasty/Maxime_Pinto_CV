<?php

namespace AppBundle\Controller;

use AppBundle\Entity\presentation;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;


/**
 *
 * @Route("/contact")
 */
class ContactController extends Controller
{

    /**
     * Lists all presentation entities.
     *
     * @Route("/", name="contact_show")
     * @Method("GET")
     */
    public function showAction()
    {


        return $this->render('contact/show.html.twig');
    }

}
