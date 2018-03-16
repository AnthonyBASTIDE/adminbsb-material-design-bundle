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
 * Checkbox form Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBMaterialDesignBundle\Twig\Extension\Form
 * @final
 */
final class CheckboxFormTwigExtension extends AbstractFormTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.bundle.adminbsbmaterialdesignbundle.twig.extension.form.checkbox";

    /**
     * Displays a basic checkbox.
     *
     * @param array $args The arguments.
     * @return string Returns the basic checkbox.
     */
    public function basicCheckboxFunction(array $args = []) {
        return $this->checkbox(ArrayUtility::get($args, "content"), ArrayUtility::get($args, "name"), ArrayUtility::get($args, "id"), ArrayUtility::get($args, "checked", false), ArrayUtility::get($args, "disabled", false), ArrayUtility::get($args, "filledIn", false), ArrayUtility::get($args, "class"));
    }

    /**
     * Get the Twig functions.
     *
     * @return array Returns the Twig functions.
     */
    public function getFunctions() {
        return [
            new Twig_SimpleFunction("basicCheckbox", [$this, "basicCheckboxFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("materialDesignCheckbox", [$this, "materialDesignCheckboxFunction"], ["is_safe" => ["html"]]),
        ];
    }

    /**
     * Displays a material design checkbox.
     *
     * @param array $args The arguments.
     * @return string Returns the material design checkbox.
     */
    public function materialDesignCheckboxFunction(array $args = []) {
        return $this->checkbox(ArrayUtility::get($args, "content"), ArrayUtility::get($args, "name"), ArrayUtility::get($args, "id"), ArrayUtility::get($args, "checked", false), ArrayUtility::get($args, "disabled", false), ArrayUtility::get($args, "filledIn", false), ArrayUtility::get($args, "class", "") . $this->getColor(ArrayUtility::get($args, "color", "red"), " chk-col-"));
    }

}
