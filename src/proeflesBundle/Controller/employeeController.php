<?php

namespace proeflesBundle\Controller;

use proeflesBundle\Entity\employee;
use proeflesBundle\Entity\location;
use proeflesBundle\Form\locationType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Employee controller.
 *
 * @Route("employee")
 */
class employeeController extends Controller
{
    /**
     * Lists all employee entities.
     *
     * @Route("/", name="employee_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $employees = $em->getRepository('proeflesBundle:employee')->findAll();

        return $this->render('employee/index.html.twig', array(
            'employees' => $employees,
        ));
    }

    /**
     * Creates a new employee entity.
     *
     * @Route("/new", name="employee_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $employee = new Employee();
        $form = $this->createForm('proeflesBundle\Form\employeeType', $employee);
        $location = new location();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($employee, $location);
            $em->flush();

            return $this->redirectToRoute('employee_show', array('id' => $employee->getId()));
        }

        return $this->render('employee/new.html.twig', array(
            'employee' => $employee,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a employee entity.
     *
     * @Route("/{id}", name="employee_show")
     * @Method("GET")
     */
    public function showAction(employee $employee )
    {
        $em = $this->getDoctrine()->getManager();
        $location = $em->getRepository('proeflesBundle:location')->findby(['id' => $employee->getStation()]);
        $deleteForm = $this->createDeleteForm($employee);

        return $this->render('employee/show.html.twig', array(
            'employee' => $employee,
            'location' => $location,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing employee entity.
     *
     * @Route("/{id}/edit", name="employee_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, employee $employee)
    {
        $deleteForm = $this->createDeleteForm($employee);
        $editForm = $this->createForm('proeflesBundle\Form\employeeType', $employee);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('employee_edit', array('id' => $employee->getId()));
        }

        return $this->render('employee/edit.html.twig', array(
            'employee' => $employee,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a employee entity.
     *
     * @Route("/{id}", name="employee_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, employee $employee)
    {
        $form = $this->createDeleteForm($employee);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($employee);
            $em->flush();
        }

        return $this->redirectToRoute('employee_index');
    }

    /**
     * Creates a form to delete a employee entity.
     *
     * @param employee $employee The employee entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(employee $employee)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('employee_delete', array('id' => $employee->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
