<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBMaterialDesignBundle\Tests\Navigation\Node\Action;

use PHPUnit_Framework_TestCase;
use WBW\Bundle\AdminBSBMaterialDesignBundle\Navigation\Node\Action\BreadcrumbNodeNewUserAction;

/**
 * Breadcrumb node "New user" action test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBMaterialDesignBundle\Tests\Navigation\Node\Action
 * @final
 */
final class BreadcrumbNodeNewUserActionTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj = new BreadcrumbNodeNewUserAction("route");

        $this->assertEquals("navigation.node.action.new", $obj->getId());
        $this->assertEquals("person_add", $obj->getIcon());
        $this->assertEquals("route", $obj->getRoute());
    }

}
