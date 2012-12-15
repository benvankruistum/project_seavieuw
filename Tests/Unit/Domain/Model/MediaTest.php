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
 * Test case for class Tx_Projectseavieuw_Domain_Model_Media.
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
class Tx_Projectseavieuw_Domain_Model_MediaTest extends Tx_Extbase_Tests_Unit_BaseTestCase {
	/**
	 * @var Tx_Projectseavieuw_Domain_Model_Media
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new Tx_Projectseavieuw_Domain_Model_Media();
	}

	public function tearDown() {
		unset($this->fixture);
	}

	/**
	 * @test
	 */
	public function getLayoutReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setLayoutForStringSetsLayout() { 
		$this->fixture->setLayout('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getLayout()
		);
	}
	
	/**
	 * @test
	 */
	public function getMediaReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setMediaForStringSetsMedia() { 
		$this->fixture->setMedia('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getMedia()
		);
	}
	
	/**
	 * @test
	 */
	public function getYoutubeKeyReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setYoutubeKeyForStringSetsYoutubeKey() { 
		$this->fixture->setYoutubeKey('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getYoutubeKey()
		);
	}
	
	/**
	 * @test
	 */
	public function getTextReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setTextForStringSetsText() { 
		$this->fixture->setText('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getText()
		);
	}
	
}
?>