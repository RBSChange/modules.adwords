<?php
/**
 * @package modules.adwords.setup
 */
class adwords_Setup extends object_InitDataSetup
{
	public function install()
	{
		$ls = list_StaticlistService::getInstance();
		try
		{
			$ls->getDocumentInstanceByListId('modules_adwords/types');
		}
		catch (Exception $e)
		{
			$list = $ls->getNewDocumentInstance();
			$list->setLabel('Adwords types');
			$list->setListid('modules_adwords/types');
			$items = array(
								new list_StaticListItem('&modules.adwords.bo.general.list.Page;', 'page'),
								new list_StaticListItem('&modules.adwords.bo.general.list.Form;', 'form')
							 );
			$list->setItemvalues(serialize($items));
			$list->save(ModuleService::getInstance()->getRootFolderId('list'));
		}
	}

	/**
	 * @return array<string>
	 */
	public function getRequiredPackages()
	{
		// Return an array of packages name if the data you are inserting in
		// this file depend on the data of other packages.
		// Example:
		// return array('modules_website', 'modules_users');
		return array();
	}
}