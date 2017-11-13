<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBMaterialDesignBundle\Twig\Extension\UI;

use Twig_SimpleFunction;

/**
 * Badge UI Twig extension.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBMaterialDesignBundle\Twig\Extension\UI
 * @final
 */
final class BadgeUITwigExtension extends AbstractUITwigExtension {

	/**
	 * Service name.
	 */
	const SERVICE_NAME = "webeweb.bundle.adminbsbmaterialdesignbundle.twig.extension.ui.badge";

	/**
	 * Displays a button badge Danger.
	 *
	 * @param array $args The arguments.
	 * @return string Returns a button badge Danger.
	 */
	public function buttonBadgeDangerFunction(array $args = []) {
		return $this->badge($this->_arg($args, "content"), $this->_arg($args, "label"), $this->_arg($args, "large", false), "btn-danger");
	}

	/**
	 * Displays a button badge Default.
	 *
	 * @param array $args The arguments.
	 * @return string Returns a button badge Default.
	 */
	public function buttonBadgeDefaultFunction(array $args = []) {
		return $this->badge($this->_arg($args, "content"), $this->_arg($args, "label"), $this->_arg($args, "large", false), "btn-default");
	}

	/**
	 * Displays a button badge Info.
	 *
	 * @param array $args The arguments.
	 * @return string Returns a button badge Info.
	 */
	public function buttonBadgeInfoFunction(array $args = []) {
		return $this->badge($this->_arg($args, "content"), $this->_arg($args, "label"), $this->_arg($args, "large", false), "btn-info");
	}

	/**
	 * Displays a button badge Primary.
	 *
	 * @param array $args The arguments.
	 * @return string Returns a button badge Primary.
	 */
	public function buttonBadgePrimaryFunction(array $args = []) {
		return $this->badge($this->_arg($args, "content"), $this->_arg($args, "label"), $this->_arg($args, "large", false), "btn-primary");
	}

	/**
	 * Displays a button badge Success.
	 *
	 * @param array $args The arguments.
	 * @return string Returns a button badge Success.
	 */
	public function buttonBadgeSuccessFunction(array $args = []) {
		return $this->badge($this->_arg($args, "content"), $this->_arg($args, "label"), $this->_arg($args, "large", false), "btn-success");
	}

	/**
	 * Displays a button badge Warning.
	 *
	 * @param array $args The arguments.
	 * @return string Returns a button badge Warning.
	 */
	public function buttonBadgeWarningFunction(array $args = []) {
		return $this->badge($this->_arg($args, "content"), $this->_arg($args, "label"), $this->_arg($args, "large", false), "btn-warning");
	}

	/**
	 * Get the Twig functions.
	 *
	 * @return array Returns the Twig functions.
	 */
	public function getFunctions() {
		return [
			new Twig_SimpleFunction("buttonBadgeDanger", [$this, "buttonBadgeDangerFunction"], ["is_safe" => ["html"]]),
			new Twig_SimpleFunction("buttonBadgeDefault", [$this, "buttonBadgeDefaultFunction"], ["is_safe" => ["html"]]),
			new Twig_SimpleFunction("buttonBadgeInfo", [$this, "buttonBadgeInfoFunction"], ["is_safe" => ["html"]]),
			new Twig_SimpleFunction("buttonBadgePrimary", [$this, "buttonBadgePrimaryFunction"], ["is_safe" => ["html"]]),
			new Twig_SimpleFunction("buttonBadgeSuccess", [$this, "buttonBadgeSuccessFunction"], ["is_safe" => ["html"]]),
			new Twig_SimpleFunction("buttonBadgeWarning", [$this, "buttonBadgeWarningFunction"], ["is_safe" => ["html"]]),
			new Twig_SimpleFunction("listBadge", [$this, "listBadgeFunction"], ["is_safe" => ["html"]]),
			new Twig_SimpleFunction("materialDesignButtonBadge", [$this, "materialDesignButtonBadgeFunction"], ["is_safe" => ["html"]]),
		];
	}

	/**
	 * Displays a list badge.
	 *
	 * @param array $args The arguments.
	 * @return string Returns a list badge.
	 */
	public function listBadgeFunction(array $args = []) {
		return $this->badge($this->_arg($args, "content"), $this->_arg($args, "label"), false, $this->_color($this->_arg($args, "color", "red"), "bg-"), true, $this->_arg($args, "link"));
	}

	/**
	 * Displays a material design button badge.
	 *
	 * @param array $args The arguments.
	 * @return string Returns a material design button badge.
	 */
	public function materialDesignButtonBadgeFunction(array $args = []) {
		return $this->badge($this->_arg($args, "content"), $this->_arg($args, "label"), $this->_arg($args, "large", false), $this->_color($this->_arg($args, "color", "red"), "bg-"));
	}

}
