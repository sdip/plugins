<?php
/* Generated on 14.02.18 14:28 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class FeedbackResponseCodeType extends EbatNs_FacetType
{
	const CodeType_Reply = 'Reply';
	const CodeType_FollowUp = 'FollowUp';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('FeedbackResponseCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_FeedbackResponseCodeType = new FeedbackResponseCodeType();
?>