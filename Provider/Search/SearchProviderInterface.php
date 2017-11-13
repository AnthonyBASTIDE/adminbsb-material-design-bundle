<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBMaterialDesignBundle\Provider\Search;

/**
 * Search provider interface.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBMaterialDesignBundle\Provider\Search
 */
interface SearchProviderInterface {

	/**
	 * Default template.
	 */
	const DEFAULT_TEMPLATE = "@ABSBMD/html/body/div.search-bar.html.twig";

	/**
	 * Service name.
	 */
	const SERVICE_NAME = "webeweb.bundle.adminbsbmaterialdesignbundle.provider.search";

	/**
	 * Get the template.
	 *
	 * @return string Returns the template name.
	 */
	public function getTemplate();
}