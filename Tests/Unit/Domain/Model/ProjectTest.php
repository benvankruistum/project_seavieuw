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
 *  the Free Software Foundation; either version 2 of the License, or
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
 * Test case for class Tx_Projectseavieuw_Domain_Model_Project.
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @package TYPO3
 * @subpackage project_seavieuw
 *
 * @author Ben van Kruistum <ben@u-creations.nl>
 */
class Tx_Projectseavieuw_Domain_Model_ProjectTest extends Tx_Extbase_Tests_Unit_BaseTestCase {
	/**
	 * @var Tx_Projectseavieuw_Domain_Model_Project
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new Tx_Projectseavieuw_Domain_Model_Project();
	}

	public function tearDown() {
		unset($this->fixture);
	}

	/**
	 * @test
	 */
	public function getTitleReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setTitleForStringSetsTitle() { 
		$this->fixture->setTitle('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getTitle()
		);
	}
	
	/**
	 * @test
	 */
	public function getMediaReturnsInitialValueForObjectStorageContainingTx_Projectseavieuw_Domain_Model_Media() { 
		$newObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getMedia()
		);
	}

	/**
	 * @test
	 */
	public function setMediaForObjectStorageContainingTx_Projectseavieuw_Domain_Model_MediaSetsMedia() { 
		$medium = new Tx_Projectseavieuw_Domain_Model_Media();
		$objectStorageHoldingExactlyOneMedia = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneMedia->attach($medium);
		$this->fixture->setMedia($objectStorageHoldingExactlyOneMedia);

		$this->assertSame(
			$objectStorageHoldingExactlyOneMedia,
			$this->fixture->getMedia()
		);
	}
	
	/**
	 * @test
	 */
	public function addMediumToObjectStorageHoldingMedia() {
		$medium = new Tx_Projectseavieuw_Domain_Model_Media();
		$objectStorageHoldingExactlyOneMedium = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneMedium->attach($medium);
		$this->fixture->addMedium($medium);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneMedium,
			$this->fixture->getMedia()
		);
	}

	/**
	 * @test
	 */
	public function removeMediumFromObjectStorageHoldingMedia() {
		$medium = new Tx_Projectseavieuw_Domain_Model_Media();
		$localObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$localObjectStorage->attach($medium);
		$localObjectStorage->detach($medium);
		$this->fixture->addMedium($medium);
		$this->fixture->removeMedium($medium);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getMedia()
		);
	}
	
}
?>