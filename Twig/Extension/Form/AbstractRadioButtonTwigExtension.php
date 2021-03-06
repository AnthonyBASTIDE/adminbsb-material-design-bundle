<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Twig\Extension\Form;

use WBW\Bundle\AdminBSBBundle\Twig\Extension\AbstractTwigExtension;
use WBW\Library\Core\Argument\Helper\StringHelper;

/**
 * Abstract radio button Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Twig\Extension\Form
 * @abstract
 */
abstract class AbstractRadioButtonTwigExtension extends AbstractTwigExtension {

    /**
     * Displays a AdminBSB radio button.
     *
     * @param string $content The content.
     * @param string $name The name.
     * @param string $id The id.
     * @param bool $checked Checked ?
     * @param bool $disabled Disabled ?
     * @param bool $withGap With gap ?
     * @param string $class The class.
     * @return string Returns the AdminBSB radio button.
     */
    protected function adminBSBRadioButton($content, $name, $id, $checked, $disabled, $withGap, $class) {

        $template = "<input %attributes%>%innerHTML%";

        $attributes = [];

        $attributes["class"]    = [true === $withGap ? "with-gap" : null, $class];
        $attributes["name"]     = $name;
        $attributes["type"]     = "radio";
        $attributes["id"]       = $id;
        $attributes["checked"]  = true === $checked ? "checked" : null;
        $attributes["disabled"] = true === $disabled ? "disabled" : null;

        $innerHTML = static::coreHTMLElement("label", $content, ["for" => $attributes["id"]]);

        return str_replace(["%attributes%", "%innerHTML%"], [StringHelper::parseArray($attributes), $innerHTML], $template);
    }
}
