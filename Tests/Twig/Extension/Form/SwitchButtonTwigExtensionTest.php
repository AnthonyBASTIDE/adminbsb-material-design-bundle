<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Tests\Twig\Extension\Form;

use Twig\Node\Node;
use Twig\TwigFunction;
use WBW\Bundle\AdminBSBBundle\Tests\AbstractTestCase;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\Form\SwitchButtonTwigExtension;

/**
 * Switch button Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Twig\Extension\Form
 */
class SwitchButtonTwigExtensionTest extends AbstractTestCase {

    /**
     * Tests the adminBSBSwitchButtonBasicFunction() method.
     *
     * @return void
     */
    public function testAdminBSBSwitchButtonBasicFunction() {

        $obj = new SwitchButtonTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<div class="switch"><label><input type="checkbox"><span class="lever"></span></label></div>';
        $this->assertEquals($res, $obj->adminBSBSwitchButtonBasicFunction($arg));
    }

    /**
     * Tests the adminBSBSwitchButtonMaterialDesignFunction() method.
     *
     * @return void
     */
    public function testAdminBSBSwitchButtonMaterialDesignFunction() {

        $obj = new SwitchButtonTwigExtension($this->twigEnvironment);

        $arg = ["offLabel" => "offLabel", "name" => "name", "checked" => true, "disabled" => true, "onLabel" => "onLabel", "color" => "pink"];
        $res = '<div class="switch"><label>offLabel<input name="name" type="checkbox" checked="checked" disabled="disabled"><span class="lever switch-col-pink"></span>onLabel</label></div>';
        $this->assertEquals($res, $obj->adminBSBSwitchButtonMaterialDesignFunction($arg));
    }

    /**
     * Tests the adminBSBSwitchButtonMaterialDesignFunction() method.
     *
     * @return void
     */
    public function testAdminBSBSwitchButtonMaterialDesignFunctionWithChecked() {

        $obj = new SwitchButtonTwigExtension($this->twigEnvironment);

        $arg = ["checked" => true];
        $res = '<div class="switch"><label><input type="checkbox" checked="checked"><span class="lever switch-col-red"></span></label></div>';
        $this->assertEquals($res, $obj->adminBSBSwitchButtonMaterialDesignFunction($arg));
    }

    /**
     * Tests the adminBSBSwitchButtonMaterialDesignFunction() method.
     *
     * @return void
     */
    public function testAdminBSBSwitchButtonMaterialDesignFunctionWithColor() {

        $obj = new SwitchButtonTwigExtension($this->twigEnvironment);

        $arg = ["color" => "pink"];
        $res = '<div class="switch"><label><input type="checkbox"><span class="lever switch-col-pink"></span></label></div>';
        $this->assertEquals($res, $obj->adminBSBSwitchButtonMaterialDesignFunction($arg));
    }

    /**
     * Tests the adminBSBSwitchButtonMaterialDesignFunction() method.
     *
     * @return void
     */
    public function testAdminBSBSwitchButtonMaterialDesignFunctionWithDisabled() {

        $obj = new SwitchButtonTwigExtension($this->twigEnvironment);

        $arg = ["disabled" => true];
        $res = '<div class="switch"><label><input type="checkbox" disabled="disabled"><span class="lever switch-col-red"></span></label></div>';
        $this->assertEquals($res, $obj->adminBSBSwitchButtonMaterialDesignFunction($arg));
    }

    /**
     * Tests the adminBSBSwitchButtonMaterialDesignFunction() method.
     *
     * @return void
     */
    public function testAdminBSBSwitchButtonMaterialDesignFunctionWithName() {

        $obj = new SwitchButtonTwigExtension($this->twigEnvironment);

        $arg = ["name" => "name"];
        $res = '<div class="switch"><label><input name="name" type="checkbox"><span class="lever switch-col-red"></span></label></div>';
        $this->assertEquals($res, $obj->adminBSBSwitchButtonMaterialDesignFunction($arg));
    }

    /**
     * Tests the adminBSBSwitchButtonMaterialDesignFunction() method.
     *
     * @return void
     */
    public function testAdminBSBSwitchButtonMaterialDesignFunctionWithOffLabel() {

        $obj = new SwitchButtonTwigExtension($this->twigEnvironment);

        $arg = ["offLabel" => "offLabel"];
        $res = '<div class="switch"><label>offLabel<input type="checkbox"><span class="lever switch-col-red"></span></label></div>';
        $this->assertEquals($res, $obj->adminBSBSwitchButtonMaterialDesignFunction($arg));
    }

    /**
     * Tests the adminBSBSwitchButtonMaterialDesignFunction() method.
     *
     * @return void
     */
    public function testAdminBSBSwitchButtonMaterialDesignFunctionWithOnLabel() {

        $obj = new SwitchButtonTwigExtension($this->twigEnvironment);

        $arg = ["onLabel" => "onLabel"];
        $res = '<div class="switch"><label><input type="checkbox"><span class="lever switch-col-red"></span>onLabel</label></div>';
        $this->assertEquals($res, $obj->adminBSBSwitchButtonMaterialDesignFunction($arg));
    }

    /**
     * Tests the adminBSBSwitchButtonMaterialDesignFunction() method.
     *
     * @return void
     */
    public function testAdminBSBSwitchButtonMaterialDesignFunctionWithoutArguments() {

        $obj = new SwitchButtonTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<div class="switch"><label><input type="checkbox"><span class="lever switch-col-red"></span></label></div>';
        $this->assertEquals($res, $obj->adminBSBSwitchButtonMaterialDesignFunction($arg));
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $this->assertEquals("wbw.adminbsb.twig.extension.form.switch_button", SwitchButtonTwigExtension::SERVICE_NAME);

        $obj = new SwitchButtonTwigExtension($this->twigEnvironment);

        $this->assertSame($this->twigEnvironment, $obj->getTwigEnvironment());
    }

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions() {

        $obj = new SwitchButtonTwigExtension($this->twigEnvironment);

        $res = $obj->getFunctions();
        $this->assertCount(2, $res);

        $this->assertInstanceOf(TwigFunction::class, $res[0]);
        $this->assertEquals("adminBSBSwitchButtonBasic", $res[0]->getName());
        $this->assertEquals([$obj, "adminBSBSwitchButtonBasicFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[1]);
        $this->assertEquals("adminBSBSwitchButtonMaterialDesign", $res[1]->getName());
        $this->assertEquals([$obj, "adminBSBSwitchButtonMaterialDesignFunction"], $res[1]->getCallable());
        $this->assertEquals(["html"], $res[1]->getSafe(new Node()));
    }
}
