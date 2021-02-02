<?php

defined('_JEXEC') or die;

class PlgContentLinkrel extends JPlugin
{

	public function onContentPrepare($context, &$row, &$params)
	{
		// Don't run this plugin when the content is being indexed
		if ($context === 'com_finder.indexer')
		{
			return true;
		}
        $params = $this->params;

        $text = str_replace($params->get('suchbegriff'),$params->get('rels'), $row->text);

		return $row->text = $text;

	}

}
