<?php
/**
 * @package modules.adwords.tests
 */
abstract class adwords_tests_AbstractBaseUnitTest extends adwords_tests_AbstractBaseTest
{
	/**
	 * @return void
	 */
	public function prepareTestCase()
	{
		$this->resetDatabase();
	}
}