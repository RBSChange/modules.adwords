<?php
/**
 * @package modules.adwords.tests
 */
abstract class adwords_tests_AbstractBaseIntegrationTest extends adwords_tests_AbstractBaseTest
{
	/**
	 * @return void
	 */
	public function prepareTestCase()
	{
		$this->loadSQLResource('integration-test.sql', true, false);
	}
}