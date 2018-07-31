<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Tests\DependencyInjection;

use WBW\Bundle\AdminBSBBundle\DependencyInjection\AdminBSBExtension;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\Form\CheckboxTwigExtension;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\Form\RadioButtonFormTwigExtension;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\Form\SwitchButtonFormTwigExtension;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\Menu\MultiLevelMenuTwigExtension;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\Typography\ItalicTypographyTwigExtension;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\Typography\OverlinedTypographyTwigExtension;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\Typography\StrikethroughTypographyTwigExtension;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\Typography\UnderlinedTypographyTwigExtension;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\UI\BadgeUITwigExtension;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\UI\ButtonUITwigExtension;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\UI\ColorUITwigExtension;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\UI\IconUITwigExtension;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\UI\ModalUITwigExtension;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\UI\PreloaderUITwigExtension;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\UI\ProgressBarUITwigExtension;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\Widget\CardWidgetTwigExtension;
use WBW\Bundle\BootstrapBundle\Tests\Cases\AbstractBootstrapFrameworkTestCase;

/**
 * AdminBSB extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Tests\DependencyInjection
 * @final
 */
final class AdminBSBExtensionTest extends AbstractBootstrapFrameworkTestCase {

    /**
     * {@inheritdoc}
     */
    protected function setUp() {
        parent::setUp();
    }

    /**
     * Tests the load() method.
     *
     * @return void
     */
    public function testLoad() {

        $obj = new AdminBSBExtension();

        $obj->load([], $this->containerBuilder);

        // Form
        $this->assertInstanceOf(CheckboxTwigExtension::class, $this->containerBuilder->get(CheckboxTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(RadioButtonFormTwigExtension::class, $this->containerBuilder->get(RadioButtonFormTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(SwitchButtonFormTwigExtension::class, $this->containerBuilder->get(SwitchButtonFormTwigExtension::SERVICE_NAME));

        // Menu
        $this->assertInstanceOf(MultiLevelMenuTwigExtension::class, $this->containerBuilder->get(MultiLevelMenuTwigExtension::SERVICE_NAME));

        // Typography
        $this->assertInstanceOf(ItalicTypographyTwigExtension::class, $this->containerBuilder->get(ItalicTypographyTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(OverlinedTypographyTwigExtension::class, $this->containerBuilder->get(OverlinedTypographyTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(StrikethroughTypographyTwigExtension::class, $this->containerBuilder->get(StrikethroughTypographyTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(UnderlinedTypographyTwigExtension::class, $this->containerBuilder->get(UnderlinedTypographyTwigExtension::SERVICE_NAME));

        // UI
        $this->assertInstanceOf(BadgeUITwigExtension::class, $this->containerBuilder->get(BadgeUITwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(ButtonUITwigExtension::class, $this->containerBuilder->get(ButtonUITwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(ColorUITwigExtension::class, $this->containerBuilder->get(ColorUITwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(IconUITwigExtension::class, $this->containerBuilder->get(IconUITwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(ModalUITwigExtension::class, $this->containerBuilder->get(ModalUITwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(PreloaderUITwigExtension::class, $this->containerBuilder->get(PreloaderUITwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(ProgressBarUITwigExtension::class, $this->containerBuilder->get(ProgressBarUITwigExtension::SERVICE_NAME));

        // Widget
        $this->assertInstanceOf(CardWidgetTwigExtension::class, $this->containerBuilder->get(CardWidgetTwigExtension::SERVICE_NAME));
    }

}
