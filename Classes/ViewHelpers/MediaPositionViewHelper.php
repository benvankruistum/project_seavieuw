<?php
/*                                                                        *
 * This script is part of the TYPO3 project - inspiring people to share!  *
 *                                                                        *
 * TYPO3 is free software; you can redistribute it and/or modify it under *
 * the terms of the GNU General Public License version 2 as published by  *
 * the Free Software Foundation.                                          *
 *                                                                        *
 * This script is distributed in the hope that it will be useful, but     *
 * WITHOUT ANY WARRANTY; without even the implied warranty of MERCHAN-    *
 * TABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General      *
 * Public License for more details.                                       *
 *                                                                        */

class Tx_Projectseavieuw_ViewHelpers_MediapositionViewHelper extends Tx_Fluid_Core_ViewHelper_AbstractTagBasedViewHelper {

	public function initializeArguments(){
		$this->registerArgument('position', 'int', 'returns image from media array', TRUE);
		$this->registerArgument('media', 'array', 'returns image from media array', FALSE);
	}

	/**
	 * Renders the HTML span tag
	 * @return string html tag
	 */
	public function render() {
		return $this->arguments['media'][$this->arguments['position']];
	}
}
?>