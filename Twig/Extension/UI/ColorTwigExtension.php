<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Twig\Extension\UI;

use Twig_SimpleFunction;
use WBW\Library\Core\Argument\ArrayHelper;

/**
 * Color Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Twig\Extension\UI
 */
class ColorTwigExtension extends AbstractColorTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.adminbsb.twig.extension.ui.color";

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Displays an AdminBSB color "Material design".
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB color "Material design".
     */
    public function adminBSBColorMaterialDesignFunction(array $args = []) {
        return $this->adminBSBColor(ArrayHelper::get($args, "name"), ArrayHelper::get($args, "code", "500"), ArrayHelper::get($args, "out", "class"));
    }

    /**
     * Get the Twig functions.
     *
     * @return array Returns the Twig functions.
     */
    public function getFunctions() {
        return [
            new Twig_SimpleFunction("adminBSBColorMaterialDesign", [$this, "adminBSBColorMaterialDesignFunction"], ["is_safe" => ["html"]]),
        ];
    }

}
