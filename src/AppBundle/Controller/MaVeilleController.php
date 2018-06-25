<?php

namespace AppBundle\Controller;

use AppBundle\Entity\presentation;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;


/**
 *
 * @Route("/portfolio")
 */
class MaVeilleController extends Controller
{

    /**
     * Lists all presentation entities.
     *
     * @Route("/", name="ma_veille_show")
     * @Method("GET")
     */
    public function showAction()
    {


        return $this->render('ma_veille/show.html.twig');
    }

}
