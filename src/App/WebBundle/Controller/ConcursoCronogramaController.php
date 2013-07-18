<?php

namespace App\WebBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use App\WebBundle\Entity\ConcursoCronograma;
use App\WebBundle\Form\ConcursoCronogramaType;

/**
 * ConcursoCronograma controller.
 *
 * @Route("/concursocronograma")
 */
class ConcursoCronogramaController extends Controller
{

    /**
     * Lists all ConcursoCronograma entities.
     *
     * @Route("/", name="concursocronograma")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppWebBundle:ConcursoCronograma')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new ConcursoCronograma entity.
     *
     * @Route("/", name="concursocronograma_create")
     * @Method("POST")
     * @Template("AppWebBundle:ConcursoCronograma:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new ConcursoCronograma();
        $form = $this->createForm(new ConcursoCronogramaType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity->setUser(1);
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('concursocronograma_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to create a new ConcursoCronograma entity.
     *
     * @Route("/new", name="concursocronograma_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new ConcursoCronograma();
        $form   = $this->createForm(new ConcursoCronogramaType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a ConcursoCronograma entity.
     *
     * @Route("/{id}", name="concursocronograma_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppWebBundle:ConcursoCronograma')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ConcursoCronograma entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing ConcursoCronograma entity.
     *
     * @Route("/{id}/edit", name="concursocronograma_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppWebBundle:ConcursoCronograma')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ConcursoCronograma entity.');
        }

        $editForm = $this->createForm(new ConcursoCronogramaType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing ConcursoCronograma entity.
     *
     * @Route("/{id}", name="concursocronograma_update")
     * @Method("PUT")
     * @Template("AppWebBundle:ConcursoCronograma:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppWebBundle:ConcursoCronograma')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ConcursoCronograma entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new ConcursoCronogramaType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('concursocronograma_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a ConcursoCronograma entity.
     *
     * @Route("/{id}", name="concursocronograma_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AppWebBundle:ConcursoCronograma')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find ConcursoCronograma entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('concursocronograma'));
    }

    /**
     * Creates a form to delete a ConcursoCronograma entity by id.
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
