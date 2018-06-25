<?php

namespace AppBundle\Controller;

use AppBundle\Entity\presentation;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;


/**
 *
 * @Route("/resume")
 */
class ResumeController extends Controller
{

    /**
     * Lists all presentation entities.
     *
     * @Route("/", name="resume_show")
     * @Method("GET")
     */
    public function showAction()
    {


        return $this->render('resume/show.html.twig');
    }

}
