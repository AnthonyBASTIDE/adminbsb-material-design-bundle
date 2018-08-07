<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Tests\Provider\Navigation;

use WBW\Bundle\AdminBSBBundle\Provider\Navigation\DefaultNavigationProvider;
use WBW\Bundle\AdminBSBBundle\Tests\Cases\AbstractAdminBSBFrameworkTestCase;
use WBW\Bundle\BootstrapBundle\Navigation\NavigationTree;

/**
 * Default navigation provider test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Provider\Navigation
 * @final
 */
final class DefaultNavigationProviderTest extends AbstractAdminBSBFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new DefaultNavigationProvider();

        $this->assertEquals("@ABSBMD/html/body/section/aside/div.menu.html.twig", $obj->getView());
        $this->assertInstanceOf(NavigationTree::class, $obj->getTree());
    }

}
