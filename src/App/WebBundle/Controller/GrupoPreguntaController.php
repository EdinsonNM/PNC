<?php

namespace App\WebBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use App\WebBundle\Entity\GrupoPregunta;
use App\WebBundle\Form\GrupoPreguntaType;

/**
 * GrupoPregunta controller.
 *
 * @Route("/grupopregunta")
 */
class GrupoPreguntaController extends Controller
{

    /**
     * Lists all GrupoPregunta entities.
     *
     * @Route("/", name="grupopregunta")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppWebBundle:GrupoPregunta')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new GrupoPregunta entity.
     *
     * @Route("/", name="grupopregunta_create")
     * @Method("POST")
     * @Template("AppWebBundle:GrupoPregunta:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new GrupoPregunta();
        $form = $this->createForm(new GrupoPreguntaType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('grupopregunta_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to create a new GrupoPregunta entity.
     *
     * @Route("/new", name="grupopregunta_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new GrupoPregunta();
        $form   = $this->createForm(new GrupoPreguntaType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a GrupoPregunta entity.
     *
     * @Route("/{id}", name="grupopregunta_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppWebBundle:GrupoPregunta')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find GrupoPregunta entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing GrupoPregunta entity.
     *
     * @Route("/{id}/edit", name="grupopregunta_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppWebBundle:GrupoPregunta')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find GrupoPregunta entity.');
        }

        $editForm = $this->createForm(new GrupoPreguntaType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing GrupoPregunta entity.
     *
     * @Route("/{id}", name="grupopregunta_update")
     * @Method("PUT")
     * @Template("AppWebBundle:GrupoPregunta:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppWebBundle:GrupoPregunta')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find GrupoPregunta entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new GrupoPreguntaType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('grupopregunta_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a GrupoPregunta entity.
     *
     * @Route("/{id}", name="grupopregunta_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AppWebBundle:GrupoPregunta')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find GrupoPregunta entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('grupopregunta'));
    }

    /**
     * Creates a form to delete a GrupoPregunta entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
