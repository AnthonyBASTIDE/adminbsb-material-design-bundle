<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Twig\Extension\UI;

use WBW\Bundle\AdminBSBBundle\Twig\Extension\AbstractTwigExtension;

/**
 * Abstract icon Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Twig\Extension\UI
 * @abstract
 */
abstract class AbstractIconTwigExtension extends AbstractTwigExtension {

    /**
     * Displays an AdminBSB icon.
     *
     * @param string $name The icon name.
     * @param string $style The icon style.
     * @param string $class The icon class.
     * @return string Returns the AdminBSB icon.
     */
    protected function adminBSBIcon($name, $style, $class = null) {

        $attributes = [];

        $attributes["class"] = ["material-icons", $class];
        $attributes["style"] = $style;

        $innerHTML = null !== $name ? $name : "home";

        return static::coreHTMLElement("i", $innerHTML, $attributes);
    }
}
