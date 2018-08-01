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
use WBW\Bundle\AdminBSBBundle\Twig\Extension\AbstractAdminBSBTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\ProgressBarTwigExtension as BaseTwigExtension;
use WBW\Library\Core\Utility\Argument\ArrayUtility;

/**
 * Progress bar Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Twig\Extension\UI
 */
class ProgressBarTwigExtension extends BaseTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.adminbsbbundle.twig.extension.ui.progressbar";

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Displays an AdminBSB progress bar "Material design".
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB progress bar "Material design".
     */
    public function adminBSBProgressBarMaterialDesignFunction(array $args = []) {
        return $this->bootstrapProgressBar(ArrayUtility::get($args, "content"), ArrayUtility::get($args, "value", 50), ArrayUtility::get($args, "min", 0), ArrayUtility::get($args, "max", 100), ArrayUtility::get($args, "striped", false), ArrayUtility::get($args, "animated", false), AbstractAdminBSBTwigExtension::fixColor(ArrayUtility::get($args, "color", "red"), "bg-"));
    }

    /**
     * Get the Twig functions.
     *
     * @return array Returns the Twig functions.
     */
    public function getFunctions() {
        return [
            new Twig_SimpleFunction("adminBSBProgressBarMaterialDesign", [$this, "adminBSBProgressBarMaterialDesignFunction"], ["is_safe" => ["html"]]),
        ];
    }

}