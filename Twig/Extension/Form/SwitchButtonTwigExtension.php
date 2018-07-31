<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Twig\Extension\Form;

use Twig_SimpleFunction;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\AbstractAdminBSBTwigExtension;
use WBW\Library\Core\Utility\Argument\ArrayUtility;

/**
 * Switch button Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Twig\Extension\Form
 */
class SwitchButtonTwigExtension extends AbstractFormTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.adminbsbbundle.twig.extension.form.switchbutton";

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Displays an AdminBSB basic switch button.
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB basic switch button.
     */
    public function adminBSBBasicSwitchButtonFunction(array $args = []) {
        return $this->adminBSBSwitchButton(ArrayUtility::get($args, "offLabel"), ArrayUtility::get($args, "name"), ArrayUtility::get($args, "checked", false), ArrayUtility::get($args, "disabled", false), ArrayUtility::get($args, "onLabel"), ArrayUtility::get($args, "attr", []));
    }

    /**
     * Get the Twig functions.
     *
     * @return array Returns the Twig functions.
     */
    public function getFunctions() {
        return [
            new Twig_SimpleFunction("adminBSBBasicSwitchButton", [$this, "adminBSBBasicSwitchButtonFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("adminBSBMaterialDesignSwitchButton", [$this, "adminBSBMaterialDesignSwitchButtonFunction"], ["is_safe" => ["html"]]),
        ];
    }

    /**
     * Displays an AdminBSB material designswitch button.
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB material designswitch button.
     */
    public function adminBSBMaterialDesignSwitchButtonFunction(array $args = []) {
        return $this->adminBSBSwitchButton(ArrayUtility::get($args, "offLabel"), ArrayUtility::get($args, "name"), ArrayUtility::get($args, "checked", false), ArrayUtility::get($args, "disabled", false), ArrayUtility::get($args, "onLabel"), ArrayUtility::get($args, "attr", []), AbstractAdminBSBTwigExtension::fixColor(ArrayUtility::get($args, "color", "red"), " switch-col-"));
    }

}