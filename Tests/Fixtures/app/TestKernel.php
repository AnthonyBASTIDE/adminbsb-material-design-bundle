<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use WBW\Bundle\CoreBundle\Tests\AbstractKernel;

/**
 * Test kernel.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\JQuery\DataTablesBundle\Tests\Fixtures\App
 */
class TestKernel extends AbstractKernel {

    /**
     * {@inheritdoc}
     */
    public function getTestsDir() {
        return __DIR__ . "/../..";
    }

    /**
     * {@inheritdoc}
     */
    public function registerBundles() {
        $bundles = [
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new FOS\UserBundle\FOSUserBundle,
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new WBW\Bundle\AdminBSBBundle\WBWAdminBSBBundle(),
            new WBW\Bundle\BootstrapBundle\WBWBootstrapBundle(),
            new WBW\Bundle\CoreBundle\WBWCoreBundle(),
            new WBW\Bundle\JQuery\DataTablesBundle\WBWJQueryDataTablesBundle(),
        ];
        return $bundles;
    }
}
