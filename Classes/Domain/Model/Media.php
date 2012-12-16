<?php

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2012 Ben van Kruistum <ben@u-creations.nl>, u-creations
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
 *
 *
 * @package projectseavieuw
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class Tx_Projectseavieuw_Domain_Model_Media extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * layout
	 *
	 * @var string
	 */
	protected $layout;

	/**
	 * media
	 *
	 * @var string
	 */
	protected $media;

	/**
	 * youtubeKey
	 *
	 * @var string
	 */
	protected $youtubeKey;

	/**
	 * text
	 *
	 * @var string
	 */
	protected $text;

	/**
	 * uploadFolderPath
	 *
	 * @var string
	 */
	protected $uploadFolderPath = 'uploads/tx_projects_seavieuw/';

	/**
	 * Returns the layout
	 *
	 * @return string $layout
	 */
	public function getLayout() {
		return $this->layout;
	}

	/**
	 * Sets the layout
	 *
	 * @param string $layout
	 * @return void
	 */
	public function setLayout($layout) {
		$this->layout = $layout;
	}

	/**
	 * Returns the media
	 *
	 * @return array $media
	 */
	public function getMedia() {
		return Tx_Projectseavieuw_Utility_ToolBox::mediaStringToArray($this->media,$this->uploadFolderPath);
	}

	/**
	 * Sets the media
	 *
	 * @param string $media
	 * @return void
	 */
	public function setMedia($media) {
		$this->media = $media;
	}

	/**
	 * Returns the youtubeKey
	 *
	 * @return string $youtubeKey
	 */
	public function getYoutubeKey() {
		return $this->youtubeKey;
	}

	/**
	 * Sets the youtubeKey
	 *
	 * @param string $youtubeKey
	 * @return void
	 */
	public function setYoutubeKey($youtubeKey) {
		$this->youtubeKey = $youtubeKey;
	}

	/**
	 * Returns the text
	 *
	 * @return string $text
	 */
	public function getText() {
		return $this->text;
	}

	/**
	 * Sets the text
	 *
	 * @param string $text
	 * @return void
	 */
	public function setText($text) {
		$this->text = $text;
	}

}
?>