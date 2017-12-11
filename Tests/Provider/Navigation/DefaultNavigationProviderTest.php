<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBMaterialDesignBundle\Tests\Provider\Navigation;

use PHPUnit_Framework_TestCase;
use WBW\Bundle\AdminBSBMaterialDesignBundle\Provider\Navigation\DefaultNavigationProvider;
use WBW\Bundle\AdminBSBMaterialDesignBundle\Provider\Navigation\NavigationProviderInterface;
use WBW\Library\Core\Navigation\Tree\NavigationTree;

/**
 * Default navigation provider test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBMaterialDesignBundle\Tests\Provider\Navigation
 * @final
 */
final class DefaultNavigationProviderTest extends PHPUnit_Framework_TestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstructor() {

		$obj = new DefaultNavigationProvider();

		$this->assertEquals(NavigationProviderInterface::DEFAULT_TEMPLATE, $obj->getTemplate());
		$this->assertInstanceOf(NavigationTree::class, $obj->getTree());
	}

}
