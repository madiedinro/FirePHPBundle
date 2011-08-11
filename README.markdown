FirePHPBundle
==========

The FirePHPBundle provides simple integration FirePHP for your Symfony2 project.


## Installation

### Add FirePHPBundle to your src/Bundle dir

#### Use deps file
Add the following lines to de /deps file

    ; Debugging
    [FirePHPBundle]
        git=git://github.com/Jehu/FirePHPBundle.git
        target=/bundles/FirePHPBundle

#### Use submodule

    git submodule add git://github.com/Jehu/FirePHPBundle.git vendor/bundles/FirePHPBundle

### Add FirePHPBundle to your application kernel

    // app/AppKernel.php
    public function registerBundles()
    {

		// ...
		if (in_array($this->getEnvironment(), array('dev', 'test')) || (strpos($this->getEnvironment(), 'dev_') === 0)) {
		{
			// ...
			$bundles[] = new FirePHPBundle\FirePHPBundle();
		}

		return $bundles;
    }


### Add FireBugBundle to your autoload.php

    // app/autoload.php
    $loader = new UniversalClassLoader();
    $loader->registerNamespaces(array(
        // ...
        'FirePHP'          => __DIR__.'/../vendor/bundles',
    ));


### Add FirePHPBundle to your application config

    // app/config/config.yml

	// ...

	fire_php: ~


## Usage

For available methods see (http://www.firephp.org/HQ/Use.htm)

### From controller

    public function indexAction()
    {
		$fb = $this->get('fire_php');
		$fb->log(array(1,2,3));

        // ...
    }

