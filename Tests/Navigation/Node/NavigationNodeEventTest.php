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
use WBW\Bundle\AdminBSBMaterialDesignBundle\Navigation\Node\NavigationNodeEvent;

/**
  /**
 * Navigation node "Event" test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBMaterialDesignBundle\Tests\Navigation\Node
 * @final
 */
final class NavigationNodeEventTest extends PHPUnit_Framework_TestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstructor() {

		$obj = new NavigationNodeEvent("route");

		$this->assertEquals("navigation.node.event", $obj->getId(), "The method getId() does not return the expecetd value");
		$this->assertEquals("event", $obj->getIcon(), "The method getIcon() does not return the expecetd value");
		$this->assertEquals("route", $obj->getRoute(), "The method getRoute() does not return the expecetd value");
	}

}
