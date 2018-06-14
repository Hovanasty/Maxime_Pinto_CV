<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Experiences;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;


class ExperiencesController extends Controller
{
    /**
     * Lists all experience entities.
     *
     * @Route("/cv", name="experiences_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $experiences = $em->getRepository('AppBundle:Experiences')->findAll();

        return $this->render('default/cv.html.twig', array(
            'experiences' => $experiences,
        ));
    }

    /**
     * Creates a new experience entity.
     *
     * @Route("/new", name="experiences_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $experience = new Experiences();
        $form = $this->createForm('AppBundle\Form\ExperiencesType', $experience);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($experience);
            $em->flush();

            return $this->redirectToRoute('experiences_show', array('id' => $experience->getId()));
        }

        return $this->render('experiences/new.html.twig', array(
            'experience' => $experience,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a experience entity.
     *
     * @Route("/{id}", name="experiences_show")
     * @Method("GET")
     */
    public function showAction(Experiences $experience)
    {
        $deleteForm = $this->createDeleteForm($experience);

        return $this->render('experiences/show.html.twig', array(
            'experience' => $experience,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing experience entity.
     *
     * @Route("/{id}/edit", name="experiences_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Experiences $experience)
    {
        $deleteForm = $this->createDeleteForm($experience);
        $editForm = $this->createForm('AppBundle\Form\ExperiencesType', $experience);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('experiences_edit', array('id' => $experience->getId()));
        }

        return $this->render('experiences/edit.html.twig', array(
            'experience' => $experience,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a experience entity.
     *
     * @Route("/{id}", name="experiences_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Experiences $experience)
    {
        $form = $this->createDeleteForm($experience);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($experience);
            $em->flush();
        }

        return $this->redirectToRoute('experiences_index');
    }

    /**
     * Creates a form to delete a experience entity.
     *
     * @param Experiences $experience The experience entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Experiences $experience)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('experiences_delete', array('id' => $experience->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
