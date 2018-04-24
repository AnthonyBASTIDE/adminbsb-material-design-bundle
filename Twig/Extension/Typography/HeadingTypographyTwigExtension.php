<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBMaterialDesignBundle\Twig\Extension\Typography;

use Twig_SimpleFunction;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Typography\HeadingTypographyTwigExtension as BaseTypographyTwigExtension;

/**
 * Heading typography Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBMaterialDesignBundle\Twig\Extension\Typography
 */
class HeadingTypographyTwigExtension extends AbstractTypographyTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.bundle.adminbsbmaterialdesignbundle.twig.extension.typography.heading";

    /**
     * Get the Twig functions.
     *
     * @return array Returns the Twig functions.
     */
    public function getFunctions() {
        return [
            new Twig_SimpleFunction("absbmdHeading1", [$this, "absbmdHeading1Function"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("absbmdHeading2", [$this, "absbmdHeading2Function"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("absbmdHeading3", [$this, "absbmdHeading3Function"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("absbmdHeading4", [$this, "absbmdHeading4Function"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("absbmdHeading5", [$this, "absbmdHeading5Function"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("absbmdHeading6", [$this, "absbmdHeading6Function"], ["is_safe" => ["html"]]),
        ];
    }

    /**
     * Displays an AdminBSB heading 1.
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB heading 1.
     */
    public function absbmdHeading1Function(array $args = []) {
        return (new BaseTypographyTwigExtension())->bootstrapHeading1Function($args);
    }

    /**
     * Displays an AdminBSB heading 2.
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB heading 2.
     */
    public function absbmdHeading2Function(array $args = []) {
        return (new BaseTypographyTwigExtension())->bootstrapHeading2Function($args);
    }

    /**
     * Displays an AdminBSB heading 3.
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB heading 3.
     */
    public function absbmdHeading3Function(array $args = []) {
        return (new BaseTypographyTwigExtension())->bootstrapHeading3Function($args);
    }

    /**
     * Displays an AdminBSB heading 4.
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB heading 4.
     */
    public function absbmdHeading4Function(array $args = []) {
        return (new BaseTypographyTwigExtension())->bootstrapHeading4Function($args);
    }

    /**
     * Displays an AdminBSB heading 5.
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB heading 5.
     */
    public function absbmdHeading5Function(array $args = []) {
        return (new BaseTypographyTwigExtension())->bootstrapHeading5Function($args);
    }

    /**
     * Displays an AdminBSB heading 6.
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB heading 6.
     */
    public function absbmdHeading6Function(array $args = []) {
        return (new BaseTypographyTwigExtension())->bootstrapHeading6Function($args);
    }

}
