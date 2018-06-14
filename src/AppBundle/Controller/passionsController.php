<?php

namespace AppBundle\Controller;

use AppBundle\Entity\passions;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Passion controller.
 *
 * @Route("passions")
 */
class passionsController extends Controller
{
    /**
     * Lists all passion entities.
     *
     * @Route("/passions_index", name="passions_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $passions = $em->getRepository('AppBundle:passions')->findAll();

        return $this->render('passions/index.html.twig', array(
            'passions' => $passions,
        ));
    }

    /**
     * Creates a new passion entity.
     *
     * @Route("/new", name="passions_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $passion = new Passion();
        $form = $this->createForm('AppBundle\Form\passionsType', $passion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($passion);
            $em->flush();

            return $this->redirectToRoute('passions_show', array('id' => $passion->getId()));
        }

        return $this->render('passions/new.html.twig', array(
            'passion' => $passion,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a passion entity.
     *
     * @Route("/{id}", name="passions_show")
     * @Method("GET")
     */
    public function showAction(passions $passion)
    {
        $deleteForm = $this->createDeleteForm($passion);

        return $this->render('passions/show.html.twig', array(
            'passion' => $passion,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing passion entity.
     *
     * @Route("/{id}/edit", name="passions_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, passions $passion)
    {
        $deleteForm = $this->createDeleteForm($passion);
        $editForm = $this->createForm('AppBundle\Form\passionsType', $passion);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('passions_edit', array('id' => $passion->getId()));
        }

        return $this->render('passions/edit.html.twig', array(
            'passion' => $passion,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a passion entity.
     *
     * @Route("/{id}", name="passions_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, passions $passion)
    {
        $form = $this->createDeleteForm($passion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($passion);
            $em->flush();
        }

        return $this->redirectToRoute('passions_index');
    }

    /**
     * Creates a form to delete a passion entity.
     *
     * @param passions $passion The passion entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(passions $passion)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('passions_delete', array('id' => $passion->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
