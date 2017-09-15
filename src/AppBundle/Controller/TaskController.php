<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Task;
use AppBundle\Form\TaskType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class TaskController extends Controller
{
    public function indexAction(EntityManagerInterface $em, $_route)
    {
        $activeFarmId = $this->get('session')->get('activeFarm');

        $tasks = $em->getRepository('AppBundle:Task')->findByField($activeFarmId);

        return $this->render('task/index.html.twig', array(
            'tasks' => $tasks,
            'classActive' => $_route,
        ));
    }

    public function createAction(Request $request, EntityManagerInterface $em, $_route)
    {
        $task = new Task();

        $form = $this->createForm(TaskType::class, $task);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $task = $form->getData();

            // save to database here
            $task->setCreatedAt(new \DateTime('now'));

            $em->persist($task);
            $em->flush();

            return $this->redirectToRoute('tasks');
        }

        return $this->render('task/create.html.twig', array(
            'form' => $form->createView(),
            'classActive' => $_route,
        ));
    }

    public function showAction($id, Request $request, EntityManagerInterface $em, $_route)
    {
        $task = $em->getRepository('AppBundle:Task')->find($id);

        $form = $this->createForm(TaskType::class, $task);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $task = $form->getData();

            // save to database here
            $task->setUpdatedAt(new \DateTime('now'));

            $em->flush();

            return $this->redirectToRoute('tasks');
        }

        return $this->render('task/show.html.twig', array(
            'form' => $form->createView(),
            'classActive' => $_route,
        ));
    }
}
