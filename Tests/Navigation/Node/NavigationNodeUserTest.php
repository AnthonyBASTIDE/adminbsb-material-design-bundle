<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBMaterialDesignBundle\Tests\Navigation\Node;

use PHPUnit_Framework_TestCase;
use WBW\Bundle\AdminBSBMaterialDesignBundle\Navigation\Node\NavigationNodeUser;

/**
 * Navigation node "User" test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBMaterialDesignBundle\Tests\Navigation\Node
 * @final
 */
final class NavigationNodeUserTest extends PHPUnit_Framework_TestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstructor() {

		$obj = new NavigationNodeUser("route");

		$this->assertEquals("navigation.node.user", $obj->getId(), "The method getId() does not return the expecetd value");
		$this->assertEquals("person", $obj->getIcon(), "The method getIcon() does not return the expecetd value");
		$this->assertEquals("route", $obj->getRoute(), "The method getRoute() does not return the expecetd value");
	}

}