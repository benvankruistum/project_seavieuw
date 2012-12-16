<?php
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2012 Ben van Kruistum <ben@ooip.nl>, OOiP
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * @package projectseavieuw
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */

class Tx_Projectseavieuw_Utility_ToolBox {

	/**
	 * Creates an array based on the contents from the media field
	 * @param string $mediaString
	 * @param string $uploadFolder
	 * @param array $supportedExtension
	 * @return array
	 */
	public function mediaStringToArray($mediaString = '' ,$uploadFolder = '' , $supportedExtension = array()){

		//Set boolean so array count is done once not in every foreach
		$extensionCheck = FALSE;

		if(count($supportedExtension) > 0){
			$extensionCheck = TRUE;
		}

		//Set the default media directory where page resources are stored
		$mediaArray = t3lib_div::trimExplode(',', $mediaString , TRUE);

		//Set return array
		$media = array();

		foreach ($mediaArray as $key => $medium) {

			//Check if media is an image first found image is used
			$ext = pathinfo($uploadFolder . $medium, PATHINFO_EXTENSION);
			if ($extensionCheck && in_array($ext, $this->supportedImages)) {
				$media[] = $uploadFolder . $medium;
			}
			else {
				$media[] = $uploadFolder . $medium;
			}
		}
		return $media;
	}
}