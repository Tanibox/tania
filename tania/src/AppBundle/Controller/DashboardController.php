<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Task;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DashboardController extends Controller
{
    public function indexAction(EntityManagerInterface $em, $_route)
    {
        // query all farms
        $fields = $em->getRepository('AppBundle:Field')->findAll();
        $fieldLocations = array_map(function ($location) {
            return array($location->getLat(), $location->getLng());
        }, $fields);

        // query 5 oldest plants
        $plants = $this->container->get('app.repository.plant_repository')->findOldestPlants(5);

        $plantsWithDaysAgo = array_map(function ($plant) {
            // translate the date time to days ago
            $seedlingDate = date_create($plant['seedling_date']->format('Y-m-d'));
            $currentDate = date_create(date('Y-m-d'));
            $interval = date_diff($currentDate, $seedlingDate);
            $plant['seedling_date'] = $interval->format('%a');

            return $plant;
        }, $plants);

        // query 5 nearest deadline for certain tasks
        $tasks = $this->container->get('app.repository.task_repository')->deadlineTasks(5);

        return $this->render('dashboard/index.html.twig', array(
            'classActive' => $_route,
            'farmLocations' => json_encode($fieldLocations),
            'plants' => $plantsWithDaysAgo,
            'tasks' => $tasks,
        ));
    }
}
