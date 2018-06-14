<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Veille;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Veille controller.
 *
 * @Route("veille")
 */
class VeilleController extends Controller
{
    /**
     * Lists all veille entities.
     *
     * @Route("/", name="veille_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $veilles = $em->getRepository('AppBundle:Veille')->findAll();

        return $this->render('veille/index.html.twig', array(
            'veilles' => $veilles,
        ));
    }

    /**
     * Creates a new veille entity.
     *
     * @Route("/new", name="veille_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $veille = new Veille();
        $form = $this->createForm('AppBundle\Form\VeilleType', $veille);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($veille);
            $em->flush();

            return $this->redirectToRoute('veille_show', array('id' => $veille->getId()));
        }

        return $this->render('veille/new.html.twig', array(
            'veille' => $veille,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a veille entity.
     *
     * @Route("/{id}", name="veille_show")
     * @Method("GET")
     */
    public function showAction(Veille $veille)
    {
        $deleteForm = $this->createDeleteForm($veille);

        return $this->render('veille/show.html.twig', array(
            'veille' => $veille,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing veille entity.
     *
     * @Route("/{id}/edit", name="veille_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Veille $veille)
    {
        $deleteForm = $this->createDeleteForm($veille);
        $editForm = $this->createForm('AppBundle\Form\VeilleType', $veille);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('veille_edit', array('id' => $veille->getId()));
        }

        return $this->render('veille/edit.html.twig', array(
            'veille' => $veille,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a veille entity.
     *
     * @Route("/{id}", name="veille_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Veille $veille)
    {
        $form = $this->createDeleteForm($veille);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($veille);
            $em->flush();
        }

        return $this->redirectToRoute('veille_index');
    }

    /**
     * Creates a form to delete a veille entity.
     *
     * @param Veille $veille The veille entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Veille $veille)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('veille_delete', array('id' => $veille->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
