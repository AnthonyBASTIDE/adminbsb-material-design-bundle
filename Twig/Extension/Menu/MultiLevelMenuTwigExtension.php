<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Twig\Extension\Menu;

use Symfony\Component\Translation\TranslatorInterface;
use Twig_SimpleFunction;
use WBW\Bundle\BootstrapBundle\Navigation\NavigationTree;

/**
 * Multi level menu Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Twig\Extension\Menu
 */
class MultiLevelMenuTwigExtension extends AbstractMenuTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.bundle.adminbsbbundle.twig.extension.menu.multilevelmenu";

    /**
     * Constructor.
     *
     * @param TranslatorInterface $translator The translator.
     */
    public function __construct(TranslatorInterface $translator) {
        parent::__construct($translator);
    }

    /**
     * Displays an AdminBSB multi level menu.
     *
     * @param NavigationTree $tree The tree.
     * @return string Returns the AdminBSB multi level menu.
     */
    public function adminBSBMultiLevelMenuFunction(NavigationTree $tree) {
        return $this->adminBSBMenu($tree);
    }

    /**
     * Get the Twig functions.
     *
     * @return array Returns the Twig functions.
     */
    public function getFunctions() {
        return [
            new Twig_SimpleFunction("adminBSBMultiLevelMenu", [$this, "adminBSBMultiLevelMenuFunction"], ["is_safe" => ["html"]]),
        ];
    }

}