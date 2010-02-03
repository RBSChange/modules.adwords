<?php
/**
 * @package modules.adwords.tests
 */
abstract class adwords_tests_AbstractBaseFunctionalTest extends adwords_tests_AbstractBaseTest
{
	/**
	 * @return void
	 */
	public function prepareTestCase()
	{
		$this->loadSQLResource('functional-test.sql', true, false);
	}
}