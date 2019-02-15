<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\Extension\UI;

use WBW\Bundle\AdminBSBBundle\Tests\AbstractTestCase;
use WBW\Bundle\AdminBSBBundle\Tests\Fixtures\Twig\Extension\UI\TestButtonTwigExtensionTrait;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\UI\ButtonTwigExtension;

/**
 * Button Twig extension trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package Twig\Extension\UI
 */
class ButtonTwigExtensionTraitTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new TestButtonTwigExtensionTrait();

        $this->assertNull($obj->getButtonTwigExtension());
    }

    /**
     * Tests the setButtonTwigExtension() method.
     *
     * @return void
     */
    public function testSetButtonTwigExtension() {

        // Set a Button Twig extension mock.
        $buttonTwigExtension = new ButtonTwigExtension($this->twigEnvironment);

        $obj = new TestButtonTwigExtensionTrait();

        $obj->setButtonTwigExtension($buttonTwigExtension);
        $this->assertSame($buttonTwigExtension, $obj->getButtonTwigExtension());
    }
}