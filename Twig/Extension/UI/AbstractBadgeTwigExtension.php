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
use WBW\Library\Core\Argument\Helper\StringHelper;

/**
 * Abstract badge Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Twig\Extension\UI
 * @abstract
 */
abstract class AbstractBadgeTwigExtension extends AbstractTwigExtension {

    /**
     * Displays an AdminBSB badge.
     *
     * @param string $content The content.
     * @param string $label The label.
     * @param bool $large Large ?
     * @param string $class The class.
     * @param bool $list List ?
     * @param string $link The link.
     * @return string Returns the AdminBSB badge.
     */
    protected function adminBSBBadge($content, $label, $large, $class, $list = false, $link = null) {

        $template = '<button %attributes%>%innerHTML%<span class="badge">%label%</span></button>';
        if (true === $list) {
            $template = '<a class="list-group-item" href="%href%"><span %attributes%>%innerHTML%</span>%label%</a>';
        }

        $attributes = [];

        if (true === $list) {
            $attributes["class"] = ["badge", $class];
        } else {
            $attributes["class"]   = ["btn", $class, "btn-block", "waves-effect"];
            $attributes["class"][] = true === $large ? "btn-lg" : null;
            $attributes["type"]    = "button";
        }

        $innerHTML = null !== $content ? $content : "";
        $spanLabel = null !== $label ? $label : "";
        $href      = null !== $link ? $link : self::DEFAULT_HREF;

        return str_replace(["%attributes%", "%innerHTML%", "%label%", "%href%"], [StringHelper::parseArray($attributes), $innerHTML, $spanLabel, $href], $template);
    }
}
