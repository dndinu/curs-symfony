<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DashboardController extends Controller
{
    public function dashboardAction()
    {
        $routes = $this->get('router')->getRouteCollection()->all();
        $routeList = array();
        foreach ($routes as $name => $route) {

            if (strpos($name,"_") === false && $name!="dashboard") {
                $routeList[] = $name;
            }
        }
        return $this->render('AppBundle:Dashboard:list.html.twig',
            array(
                'routeList' => $routeList,
            )
        );
    }
}