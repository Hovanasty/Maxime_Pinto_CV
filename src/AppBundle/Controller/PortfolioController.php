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
class PortfolioController extends Controller
{

    /**
     * Lists all presentation entities.
     *
     * @Route("/", name="portfolio_show")
     * @Method("GET")
     */
    public function showAction()
    {


        return $this->render('portfolio/show.html.twig');
    }

}
