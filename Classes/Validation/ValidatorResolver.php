<?php
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2011 Sebastian Fischer <typo3@evoweb.de>
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
 * Validator resolver to automatically find a validator for a given subject
 *
 * @package Extbase
 * @subpackage Validation
 * @version $Id: ValidatorResolver.php 1790 2010-01-18 22:27:37Z jocrau $
 */
class Tx_SfRegister_Validation_ValidatorResolver extends Tx_Extbase_Validation_ValidatorResolver {
	/**
	 * Get the parsed options given in @validate annotations.
	 *
	 * @param string $validateValue
	 * @return array
	 */
	public function getParsedValidatorAnnotation($validateValue) {
		return $this->parseValidatorAnnotation($validateValue);
	}
}

?>