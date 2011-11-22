<?php
/**
 * videos_DisplayYoutubeVideoBoAction
 * @package modules.videos.actions
 */
class videos_DisplayYoutubeVideoBoAction extends change_Action
{
	/**
	 * @param change_Context $context
	 * @param change_Request $request
	 */
	public function _execute($context, $request)
	{
		$request->setParameter("video", $this->getDocumentInstanceFromRequest($request));
		return 'Success';
	}
}