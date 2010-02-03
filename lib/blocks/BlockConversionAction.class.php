<?php

class adwords_BlockConversionAction extends block_BlockAction
{
	/**
   * @param block_BlockContext $context
   * @param block_BlockRequest $request
   * @return String view name
	 */
	public function execute($context, $request)
	{
		$type = $this->getParameter('convtype');

		$isSubmitted = false;
		if($type == 'form')
		{
			$formParams = $context->getGlobalRequest()->getModuleParameters('form');
			foreach ($formParams as $name => $value)
			{
				if(StringUtils::beginsWith($name, 'submit_'))
				{
					$isSubmitted = true;
				}
			}
		}

		if($type == 'page' || ($type == 'form' && $isSubmitted == true))
		{
			$params = array();
			$params['label'] = $this->getParameter('convlibelle');
			$params['id'] = $this->getParameter('convid');
			$params['format'] = $this->getParameter('convformat');
			$params['color'] = $this->getParameter('convcolor');
			$params['value'] = $this->getParameter('convvalue');
			$params['code'] = $this->getParameter('convcode');
			$params['lang'] = $context->getLang();

			$this->setParameter('params', $params);

			return block_BlockView::SUCCESS ;
		}
		return block_BlockView::NONE ;
	}

	/**
   * @param block_BlockContext $context
   * @param block_BlockRequest $request
   * @return String view name
	 */
	public function executeBackoffice($context, $request)
	{
		return block_BlockView::DUMMY ;
	}
}
