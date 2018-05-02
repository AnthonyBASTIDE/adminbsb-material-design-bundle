<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Tests\Twig\Extension\Menu;

use PHPUnit_Framework_TestCase;
use Twig_Node;
use Twig_SimpleFunction;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\Menu\MultiLevelMenuTwigExtension;
use WBW\Bundle\BootstrapBundle\Navigation\BreadcrumbNode;
use WBW\Bundle\BootstrapBundle\Navigation\NavigationNode;
use WBW\Bundle\BootstrapBundle\Navigation\NavigationTree;

/**
 * Multi level menu Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Twig\Extension\Menu
 */
class MultiLevelMenuTwigExtensionTest extends PHPUnit_Framework_TestCase {

    /**
     * Navigation tree.
     *
     * @var NavigationTree
     */
    private $navigationTree;

    /**
     * {@inheritdoc}
     */
    protected function setUp() {
        parent::setUp();

        // Set a Navigation tree mock.
        $this->navigationTree = new NavigationTree();

        $this->navigationTree->addNode(new NavigationNode("Users", "person", null));
        $this->navigationTree->getLastNode()->setEnable(true);

        $this->navigationTree->getLastNode()->addNode(new NavigationNode("New", "add_circle_outline", null));
        $this->navigationTree->getLastNode()->getLastNode()->setEnable(true);
        $this->navigationTree->getLastNode()->getLastNode()->setUrl("/app/users/new");

        $this->navigationTree->getLastNode()->addNode(new NavigationNode("List", "view_list", null));
        $this->navigationTree->getLastNode()->getLastNode()->setEnable(true);
        $this->navigationTree->getLastNode()->getLastNode()->setUrl("/app/users/index");

        $this->navigationTree->getLastNode()->addNode(new BreadcrumbNode("Edit", "pencil", null));
        $this->navigationTree->getLastNode()->getLastNode()->setEnable(true);
        $this->navigationTree->getLastNode()->getLastNode()->setUrl("/app/users/edit");
    }

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions() {

        $obj = new MultiLevelMenuTwigExtension();

        $res = $obj->getFunctions();

        $this->assertCount(1, $res);

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[0]);
        $this->assertEquals("adminBSBMultiLevelMenu", $res[0]->getName());
        $this->assertEquals([$obj, "adminBSBMultiLevelMenuFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()));
    }

    /**
     * Tests the adminBSBMultiLevelMenuFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testAdminBSBMultiLevelMenuFunction() {

        $obj = new MultiLevelMenuTwigExtension();

        $res0 = '<li class="menu-header">tree</li>
<li>
<a class="menu-toggle"><i class="material-icons">person</i><span>Users</span></a>
<ul class="ml-menu">
<li>
<a href="/app/users/new"><i class="material-icons">add_circle_outline</i><span>New</span></a>
</li>
<li>
<a href="/app/users/index"><i class="material-icons">view_list</i><span>List</span></a>
</li>
</ul>
</li>';
        $this->assertEquals($res0, $obj->adminBSBMultiLevelMenuFunction($this->navigationTree));

        $this->navigationTree->getLastNode()->getFirstNode()->setActive(true);
        $res9 = '<li class="menu-header">tree</li>
<li>
<a class="menu-toggle"><i class="material-icons">person</i><span>Users</span></a>
<ul class="ml-menu">
<li class="active">
<a href="/app/users/new"><i class="material-icons">add_circle_outline</i><span>New</span></a>
</li>
<li>
<a href="/app/users/index"><i class="material-icons">view_list</i><span>List</span></a>
</li>
</ul>
</li>';
        $this->assertEquals($res9, $obj->adminBSBMultiLevelMenuFunction($this->navigationTree));
    }

}
