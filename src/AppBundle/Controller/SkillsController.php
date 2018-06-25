<?php

namespace AppBundle\Controller;

use AppBundle\Entity\presentation;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;


/**
 *
 * @Route("/skills")
 */
class SkillsController extends Controller
{

    /**
     * Lists all presentation entities.
     *
     * @Route("/", name="skills_show")
     * @Method("GET")
     */
    public function showAction()
    {


        return $this->render('skills/show.html.twig');
    }

}
