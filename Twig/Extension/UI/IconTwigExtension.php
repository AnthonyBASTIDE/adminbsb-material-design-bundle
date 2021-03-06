<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Twig\Extension\UI;

use Twig\TwigFunction;
use WBW\Bundle\CoreBundle\Renderer\IconRendererInterface;
use WBW\Library\Core\Argument\Helper\ArrayHelper;

/**
 * Icon Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Twig\Extension\UI
 */
class IconTwigExtension extends AbstractIconTwigExtension implements IconRendererInterface {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "wbw.adminbsb.twig.extension.ui.icon";

    /**
     * Displays an AdminBSB basic icon.
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB basic icon.
     */
    public function adminBSBIconBasicFunction(array $args = []) {
        return $this->adminBSBIcon(ArrayHelper::get($args, "name"), ArrayHelper::get($args, "style"));
    }

    /**
     * Displays an AdminBSB material design icon.
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB material design icon.
     */
    public function adminBSBIconMaterialDesignFunction(array $args = []) {
        return $this->adminBSBIcon(ArrayHelper::get($args, "name"), ArrayHelper::get($args, "style"), self::materialDesignColor(ArrayHelper::get($args, "color"), "col-"));
    }

    /**
     * Get the Twig functions.
     *
     * @return TwigFunction[] Returns the Twig functions.
     */
    public function getFunctions() {
        return [
            new TwigFunction("adminBSBIconBasic", [$this, "adminBSBIconBasicFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("adminBSBIconMaterialDesign", [$this, "adminBSBIconMaterialDesignFunction"], ["is_safe" => ["html"]]),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function renderIcon($name, $style) {
        return $this->adminBSBIconBasicFunction(["name" => $name, "style" => $style]);
    }
}
