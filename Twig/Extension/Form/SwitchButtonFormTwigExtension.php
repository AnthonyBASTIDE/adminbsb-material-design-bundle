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

use Twig_SimpleFunction;
use WBW\Library\Core\Utility\ArrayUtility;

/**
 * Switch button form Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBMaterialDesignBundle\Twig\Extension\Form
 * @final
 */
final class SwitchButtonFormTwigExtension extends AbstractFormTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.bundle.adminbsbmaterialdesignbundle.twig.extension.form.switchbutton";

    /**
     * Displays a basic switch button.
     *
     * @param array $args The arguments.
     * @return string Returns the basic switch button.
     */
    public function basicSwitchButtonFunction(array $args = []) {
        return $this->switchButton(ArrayUtility::get($args, "offLabel"), ArrayUtility::get($args, "name"), ArrayUtility::get($args, "checked", false), ArrayUtility::get($args, "disabled", false), ArrayUtility::get($args, "onLabel"), ArrayUtility::get($args, "attr", []));
    }

    /**
     * Get the Twig functions.
     *
     * @return array Returns the Twig functions.
     */
    public function getFunctions() {
        return [
            new Twig_SimpleFunction("basicSwitchButton", [$this, "basicSwitchButtonFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("materialDesignSwitchButton", [$this, "materialDesignSwitchButtonFunction"], ["is_safe" => ["html"]]),
        ];
    }

    /**
     * Displays a material design switch button.
     *
     * @param array $args The arguments.
     * @return string Returns the material design switch button.
     */
    public function materialDesignSwitchButtonFunction(array $args = []) {
        return $this->switchButton(ArrayUtility::get($args, "offLabel"), ArrayUtility::get($args, "name"), ArrayUtility::get($args, "checked", false), ArrayUtility::get($args, "disabled", false), ArrayUtility::get($args, "onLabel"), ArrayUtility::get($args, "attr", []), $this->getColor(ArrayUtility::get($args, "color", "red"), " switch-col-"));
    }

}
