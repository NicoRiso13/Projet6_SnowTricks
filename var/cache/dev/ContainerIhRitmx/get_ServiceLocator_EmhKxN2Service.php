<?php

namespace ContainerIhRitmx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_EmhKxN2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.EmhKxN2' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.EmhKxN2'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\HomeController::home' => ['privates', '.service_locator.4ZU5zm2', 'get_ServiceLocator_4ZU5zm2Service', true],
            'App\\Controller\\LoginController::login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.W1hlQDJ', 'get_ServiceLocator_W1hlQDJService', true],
            'App\\Controller\\RegistrationController::verifyUserEmail' => ['privates', '.service_locator.mzjt3rI', 'get_ServiceLocator_Mzjt3rIService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Controller\\HomeController:home' => ['privates', '.service_locator.4ZU5zm2', 'get_ServiceLocator_4ZU5zm2Service', true],
            'App\\Controller\\LoginController:login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.W1hlQDJ', 'get_ServiceLocator_W1hlQDJService', true],
            'App\\Controller\\RegistrationController:verifyUserEmail' => ['privates', '.service_locator.mzjt3rI', 'get_ServiceLocator_Mzjt3rIService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
        ], [
            'App\\Controller\\HomeController::home' => '?',
            'App\\Controller\\LoginController::login' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\RegistrationController::verifyUserEmail' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\HomeController:home' => '?',
            'App\\Controller\\LoginController:login' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\RegistrationController:verifyUserEmail' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}