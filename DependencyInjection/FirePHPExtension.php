<?php

namespace Bundle\FirePHPBundle\DependencyInjection;

use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;

class FirePHPExtension extends Extension
{
	public function load(array $config, ContainerBuilder $container)
	{
        if (!$container->hasDefinition('fire_php')) {
            $loader = new XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
            $loader->load('service.xml');
        }
	}
	
	public function getXsdValidationBasePath()
	{
		return __DIR__ . '/../Resources/config/';
	}
	
	public function getNamespace()
	{
		return 'http://madie.ru/symfony/schema/';
	}

	public function getAlias()
	{
		return 'fire_php';
	}

}
