<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdProjectContainerUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'dashboard' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DashboardController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fields' => array (  0 =>   array (    0 => 'trailingSlash',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\FieldController::indexAction',    'trailingSlash' => '/',  ),  2 =>   array (    'trailingSlash' => '[/]{0,1}',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '',      2 => '[/]{0,1}',      3 => 'trailingSlash',    ),    1 =>     array (      0 => 'text',      1 => '/farms',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fields_create' => array (  0 =>   array (    0 => 'trailingSlash',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\FieldController::createAction',    'trailingSlash' => '/',  ),  2 =>   array (    'trailingSlash' => '[/]{0,1}',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '',      2 => '[/]{0,1}',      3 => 'trailingSlash',    ),    1 =>     array (      0 => 'text',      1 => '/farms/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fields_show' => array (  0 =>   array (    0 => 'id',    1 => 'trailingSlash',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\FieldController::showAction',    'trailingSlash' => '/',  ),  2 =>   array (    'trailingSlash' => '[/]{0,1}',    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '',      2 => '[/]{0,1}',      3 => 'trailingSlash',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/farms',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'areas' => array (  0 =>   array (    0 => 'trailingSlash',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\AreaController::indexAction',    'trailingSlash' => '/',  ),  2 =>   array (    'trailingSlash' => '[/]{0,1}',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '',      2 => '[/]{0,1}',      3 => 'trailingSlash',    ),    1 =>     array (      0 => 'text',      1 => '/areas',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'areas_show' => array (  0 =>   array (    0 => 'id',    1 => 'trailingSlash',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\AreaController::showAction',    'trailingSlash' => '/',  ),  2 =>   array (    'trailingSlash' => '[/]{0,1}',    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '',      2 => '[/]{0,1}',      3 => 'trailingSlash',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/areas',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'areas_create' => array (  0 =>   array (    0 => 'trailingSlash',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\AreaController::createAction',    'trailingSlash' => '/',  ),  2 =>   array (    'trailingSlash' => '[/]{0,1}',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '',      2 => '[/]{0,1}',      3 => 'trailingSlash',    ),    1 =>     array (      0 => 'text',      1 => '/areas/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'areas_edit' => array (  0 =>   array (    0 => 'id',    1 => 'trailingSlash',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\AreaController::editAction',    'trailingSlash' => '/',  ),  2 =>   array (    'trailingSlash' => '[/]{0,1}',    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '',      2 => '[/]{0,1}',      3 => 'trailingSlash',    ),    1 =>     array (      0 => 'text',      1 => '/edit',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    3 =>     array (      0 => 'text',      1 => '/areas',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'reservoirs' => array (  0 =>   array (    0 => 'trailingSlash',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ReservoirController::indexAction',    'trailingSlash' => '/',  ),  2 =>   array (    'trailingSlash' => '[/]{0,1}',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '',      2 => '[/]{0,1}',      3 => 'trailingSlash',    ),    1 =>     array (      0 => 'text',      1 => '/reservoirs',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'reservoirs_show' => array (  0 =>   array (    0 => 'id',    1 => 'trailingSlash',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ReservoirController::showAction',    'trailingSlash' => '/',  ),  2 =>   array (    'trailingSlash' => '[/]{0,1}',    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '',      2 => '[/]{0,1}',      3 => 'trailingSlash',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/reservoirs',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'inventories' => array (  0 =>   array (    0 => 'trailingSlash',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\InventoryController::indexAction',    'trailingSlash' => '/',  ),  2 =>   array (    'trailingSlash' => '[/]{0,1}',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '',      2 => '[/]{0,1}',      3 => 'trailingSlash',    ),    1 =>     array (      0 => 'text',      1 => '/inventories',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'seeds_create' => array (  0 =>   array (    0 => 'trailingSlash',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\InventoryController::seedCreateAction',    'trailingSlash' => '/',  ),  2 =>   array (    'trailingSlash' => '[/]{0,1}',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '',      2 => '[/]{0,1}',      3 => 'trailingSlash',    ),    1 =>     array (      0 => 'text',      1 => '/seeds/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'seeds_show' => array (  0 =>   array (    0 => 'id',    1 => 'trailingSlash',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\InventoryController::seedEditAction',    'trailingSlash' => '/',  ),  2 =>   array (    'trailingSlash' => '[/]{0,1}',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '',      2 => '[/]{0,1}',      3 => 'trailingSlash',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/seeds',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tasks' => array (  0 =>   array (    0 => 'trailingSlash',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\TaskController::indexAction',    'trailingSlash' => '/',  ),  2 =>   array (    'trailingSlash' => '[/]{0,1}',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '',      2 => '[/]{0,1}',      3 => 'trailingSlash',    ),    1 =>     array (      0 => 'text',      1 => '/tasks',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tasks_create' => array (  0 =>   array (    0 => 'trailingSlash',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\TaskController::createAction',    'trailingSlash' => '/',  ),  2 =>   array (    'trailingSlash' => '[/]{0,1}',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '',      2 => '[/]{0,1}',      3 => 'trailingSlash',    ),    1 =>     array (      0 => 'text',      1 => '/tasks/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tasks_show' => array (  0 =>   array (    0 => 'id',    1 => 'trailingSlash',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\TaskController::showAction',    'trailingSlash' => '/',  ),  2 =>   array (    'trailingSlash' => '[/]{0,1}',    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '',      2 => '[/]{0,1}',      3 => 'trailingSlash',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/tasks',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'plants' => array (  0 =>   array (    0 => 'trailingSlash',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\PlantController::indexAction',    'trailingSlash' => '/',  ),  2 =>   array (    'trailingSlash' => '[/]{0,1}',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '',      2 => '[/]{0,1}',      3 => 'trailingSlash',    ),    1 =>     array (      0 => 'text',      1 => '/plants',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'plants_create' => array (  0 =>   array (    0 => 'trailingSlash',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\PlantController::createAction',    'trailingSlash' => '/',  ),  2 =>   array (    'trailingSlash' => '[/]{0,1}',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '',      2 => '[/]{0,1}',      3 => 'trailingSlash',    ),    1 =>     array (      0 => 'text',      1 => '/plants/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'plants_show' => array (  0 =>   array (    0 => 'id',    1 => 'trailingSlash',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\PlantController::showAction',    'trailingSlash' => '/',  ),  2 =>   array (    'trailingSlash' => '[/]{0,1}',    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '',      2 => '[/]{0,1}',      3 => 'trailingSlash',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/plants',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'plants_harvest' => array (  0 =>   array (    0 => 'id',    1 => 'trailingSlash',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\PlantController::harvestAction',    'trailingSlash' => '/',  ),  2 =>   array (    'trailingSlash' => '[/]{0,1}',    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '',      2 => '[/]{0,1}',      3 => 'trailingSlash',    ),    1 =>     array (      0 => 'text',      1 => '/harvest',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    3 =>     array (      0 => 'text',      1 => '/plants',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'plants_edit' => array (  0 =>   array (    0 => 'id',    1 => 'trailingSlash',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\PlantController::editAction',    'trailingSlash' => '/',  ),  2 =>   array (    'trailingSlash' => '[/]{0,1}',    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '',      2 => '[/]{0,1}',      3 => 'trailingSlash',    ),    1 =>     array (      0 => 'text',      1 => '/edit',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    3 =>     array (      0 => 'text',      1 => '/plants',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_show' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ProfileController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_edit' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ProfileController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\RegistrationController::registerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\RegistrationController::checkEmailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirm' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\RegistrationController::confirmAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/register/confirm',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirmed' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\RegistrationController::confirmedAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/confirmed',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_request' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/request',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_send_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/send-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_reset' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/resetting/reset',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_change_password' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/change-password',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
