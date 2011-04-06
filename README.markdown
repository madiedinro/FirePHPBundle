FirePHPBundle
==========

The FirePHPBundle provides simple integration FirePHP for your Symfony2 project.


## Installation

### Add FirePHPBundle to your src/Bundle dir

    git submodule add git://github.com/madiedinro/FirePHPBundle.git src/Bundle/FirePHPBundle

### Add FirePHPBundle to your application kernel

    // app/AppKernel.php
    public function registerBundles()
    {

		// ...
		if ($this->isDebug())
		{
			// ...
			$bundles[] = new Bundle\FirePHPBundle\FirePHPBundle();
		}
		return $bundles;
    }

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

