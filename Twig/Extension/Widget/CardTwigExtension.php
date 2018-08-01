<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Twig\Extension\Widget;

use Twig_SimpleFunction;
use WBW\Bundle\BootstrapBundle\Twig\Extension\CSS\TypographyTwigExtension;
use WBW\Library\Core\Utility\Argument\ArrayUtility;

/**
 * Card Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Twig\Extension\Widget
 */
class CardTwigExtension extends AbstractCardTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.adminbsbbundle.twig.extension.widget.card";

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct(new TypographyTwigExtension());
    }

    /**
     * Displays an AdminBSB card header.
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB card header.
     */
    public function adminBSBCardHeaderFunction(array $args = []) {
        return $this->adminBSBCardHeader(ArrayUtility::get($args, "content", ""), ArrayUtility::get($args, "description"), ArrayUtility::get($args, "icon"));
    }

    /**
     * Get the Twig functions.
     *
     * @return array Returns the Twig functions.
     */
    public function getFunctions() {
        return [
            new Twig_SimpleFunction("adminBSBCardHeader", [$this, "adminBSBCardHeaderFunction"], ["is_safe" => ["html"]]),
        ];
    }

}