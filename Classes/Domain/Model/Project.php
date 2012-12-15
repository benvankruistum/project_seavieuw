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
class Tx_Projectseavieuw_Domain_Model_Project extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * title
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $title;

	/**
	 * media
	 *
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_Projectseavieuw_Domain_Model_Media>
	 */
	protected $media;

	/**
	 * __construct
	 *
	 * @return void
	 */
	public function __construct() {
		//Do not remove the next line: It would break the functionality
		$this->initStorageObjects();
	}

	/**
	 * Initializes all Tx_Extbase_Persistence_ObjectStorage properties.
	 *
	 * @return void
	 */
	protected function initStorageObjects() {
		/**
		 * Do not modify this method!
		 * It will be rewritten on each save in the extension builder
		 * You may modify the constructor of this class instead
		 */
		$this->media = new Tx_Extbase_Persistence_ObjectStorage();
	}

	/**
	 * Returns the title
	 *
	 * @return string $title
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * Sets the title
	 *
	 * @param string $title
	 * @return void
	 */
	public function setTitle($title) {
		$this->title = $title;
	}

	/**
	 * Adds a Media
	 *
	 * @param Tx_Projectseavieuw_Domain_Model_Media $medium
	 * @return void
	 */
	public function addMedium(Tx_Projectseavieuw_Domain_Model_Media $medium) {
		$this->media->attach($medium);
	}

	/**
	 * Removes a Media
	 *
	 * @param Tx_Projectseavieuw_Domain_Model_Media $mediumToRemove The Media to be removed
	 * @return void
	 */
	public function removeMedium(Tx_Projectseavieuw_Domain_Model_Media $mediumToRemove) {
		$this->media->detach($mediumToRemove);
	}

	/**
	 * Returns the media
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_Projectseavieuw_Domain_Model_Media> $media
	 */
	public function getMedia() {
		return $this->media;
	}

	/**
	 * Sets the media
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_Projectseavieuw_Domain_Model_Media> $media
	 * @return void
	 */
	public function setMedia(Tx_Extbase_Persistence_ObjectStorage $media) {
		$this->media = $media;
	}

}
?>