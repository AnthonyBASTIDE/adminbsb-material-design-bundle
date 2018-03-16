<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBMaterialDesignBundle\Twig\Extension\Form;

use WBW\Bundle\AdminBSBMaterialDesignBundle\Twig\Extension\AbstractABSBMDTwigExtension;
use WBW\Library\Core\Utility\StringUtility;

/**
 * Abstract form Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBMaterialDesignBundle\Twig\Extension\Form
 * @abstract
 */
abstract class AbstractFormTwigExtension extends AbstractABSBMDTwigExtension {

    /**
     * Constructor.
     */
    final public function __construct() {
        parent::__construct();
    }

    /**
     * Displays a AdminBSB check box.
     *
     * @param string $content The checkbox content.
     * @param string $name The checkbox name.
     * @param string $id The checkbox id.
     * @param boolean $checked Checked ?
     * @param boolean $disabled Disabled ?
     * @param boolean $filledIn Filled in ?
     * @param string $class The checkbox class.
     * @return string Returns the AdminBSB checkbox.
     */
    final protected function absbmdCheckbox($content, $name, $id, $checked, $disabled, $filledIn, $class) {

        // Initialize the template.
        $template = '<input %attributes%><label for="%id%">%innerHTML%</label>';

        // Initialize the attributes.
        $attributes = [];

        $attributes["class"]    = [true === $filledIn ? "filled-in" : null, $class];
        $attributes["name"]     = $name;
        $attributes["type"]     = "checkbox";
        $attributes["id"]       = $id;
        $attributes["checked"]  = true === $checked ? "checked" : null;
        $attributes["disabled"] = true === $disabled ? "disabled" : null;

        // Check the parameters.
        $innerHTML = null !== $content ? $content : "";

        // Return the HTML.
        return StringUtility::replace($template, ["%attributes%", "%id%", "%innerHTML%"], [StringUtility::parseArray($attributes), $attributes["id"], $innerHTML]);
    }

    /**
     * Displays a AdminBSB radio button.
     *
     * @param string $content The radio button content.
     * @param string $name The radio button name.
     * @param string $id The radio button id.
     * @param boolean $checked Checked ?
     * @param boolean $disabled Disabled ?
     * @param boolean $withGap With gap ?
     * @param string $class The radio button class.
     * @return string Returns the AdminBSB radio button.
     */
    final protected function absbmdRadioButton($content, $name, $id, $checked, $disabled, $withGap, $class) {

        // Initialize the template.
        $template = '<input %attributes%><label for="%id%">%innerHTML%</label>';

        // Initialize the attributes.
        $attributes = [];

        $attributes["class"]    = [true === $withGap ? "with-gap" : null, $class];
        $attributes["name"]     = $name;
        $attributes["type"]     = "radio";
        $attributes["id"]       = $id;
        $attributes["checked"]  = true === $checked ? "checked" : null;
        $attributes["disabled"] = true === $disabled ? "disabled" : null;

        // Check the parameters.
        $innerHTML = null !== $content ? $content : "";

        // Return the HTML.
        return StringUtility::replace($template, ["%attributes%", "%id%", "%innerHTML%"], [StringUtility::parseArray($attributes), $attributes["id"], $innerHTML]);
    }

    /**
     * Displays a switch button.
     *
     * @param string $offLabel The switch button off label.
     * @param string $name The switch button name.
     * @param boolean $checked Checked switch button ?
     * @param boolean $disabled Disable switch button ?
     * @param string $onLabel The switch button on label.
     * @param array $attributes The switch button attributes.
     * @param string $class The switch button class.
     * @return string Returns the switch button.
     */
    final protected function switchButton($offLabel, $name, $checked, $disabled, $onLabel, array $attributes, $class = null) {

        // Initialize the template.
        $template = '<div class="switch"><label>%offLabel%<input %attributes%><span class="lever%class%"></span>%onLabel%</label></div>';

        // Initialize the attributes.
        $_attr = $attributes;

        $_attr["name"]     = $name;
        $_attr["type"]     = "checkbox";
        $_attr["checked"]  = true === $checked ? "checked" : null;
        $_attr["disabled"] = true === $disabled ? "disabled" : null;

        // Check the parameters.
        $_offLabel = null !== $offLabel ? $offLabel : "";
        $_class    = null !== $class ? " " . trim($class) : "";
        $_onLabel  = null !== $onLabel ? $onLabel : "";

        // Return the HTML.
        return StringUtility::replace($template, ["%offLabel%", "%attributes%", "%class%", "%onLabel%"], [$_offLabel, StringUtility::parseArray($_attr), $_class, $_onLabel]);
    }

}
