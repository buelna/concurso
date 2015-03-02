<?php

namespace Concurso\RegistroBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Concurso\RegistroBundle\Entity\Equipo;
use Concurso\RegistroBundle\Form\EquipoType;

/**
 * Equipo controller.
 *
 * @Route("/equipo")
 */
class EquipoController extends Controller
{

    /**
     * Lists all Equipo entities.
     *
     * @Route("/", name="equipo")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('RegistroBundle:Equipo')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Equipo entity.
     *
     * @Route("/", name="equipo_create")
     * @Method("POST")
     * @Template("RegistroBundle:Equipo:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Equipo();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('equipo_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Equipo entity.
     *
     * @param Equipo $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Equipo $entity)
    {
        $form = $this->createForm(new EquipoType(), $entity, array(
            'action' => $this->generateUrl('equipo_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Equipo entity.
     *
     * @Route("/new", name="equipo_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction(Request $peticion)
    {
        $entity = new Equipo();
        $usuario=$this->get('security.context')->getToken()->getUser();
        $id=$usuario->getId();

        $form   = $this->createForm(new EquipoType($this->getDoctrine()->getManager(),$id), $entity);

        $form->handleRequest($this->getRequest());



        if ($form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();


            return $this->redirect($this->generateUrl('registro', array()));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );

    }

    /**
     * Finds and displays a Equipo entity.
     *
     * @Route("/{id}", name="equipo_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('RegistroBundle:Equipo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Equipo entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Equipo entity.
     *
     * @Route("/{id}/edit", name="equipo_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('RegistroBundle:Equipo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Miembro entity.');
        }

        $form = $this->createForm(new EquipoType(), $entity, array(
            'action' => $this->generateUrl('equipo_edit', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->handleRequest($this->getRequest());

       if ($form->isValid()) {
            
            $em->flush();

            return $this->redirect($this->generateUrl('registro'));
        }

        /*$editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);*/

        return array(
            'entity' => $entity, 
            'form' => $form->createView()
        );
    }

    /**
    * Creates a form to edit a Equipo entity.
    *
    * @param Equipo $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Equipo $entity)
    {
        $form = $this->createForm(new EquipoType(), $entity, array(
            'action' => $this->generateUrl('equipo_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Equipo entity.
     *
     * @Route("/{id}", name="equipo_update")
     * @Method("PUT")
     * @Template("RegistroBundle:Equipo:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('RegistroBundle:Equipo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Equipo entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('equipo_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Equipo entity.
     *
     * @Route("/{id}", name="equipo_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('RegistroBundle:Equipo')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Equipo entity.');
            }

            $em->remove($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('registro'));
    }

    /**
     * Creates a form to delete a Equipo entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('equipo_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
