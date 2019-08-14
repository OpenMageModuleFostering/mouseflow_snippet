<?php

/**
 * Mouseflow Snippet
 *
 * @category Mouseflow
 * @package Mouseflow_Snippet
 * @author Mouseflow (http://mouseflow.com)
 *
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class Mouseflow_Snippet_Helper_Data extends Mage_Core_Helper_Abstract
{
    const XML_PATH_ENABLED   = 'mouseflow_snippet/general/enabled';
    const XML_PATH_CODE   = 'mouseflow_snippet/general/tracking_code';

    /**
     * check is module enable in configuration page
     *
     * @return bool
     */
    public function isEnable()
    {
        return (bool) Mage::getStoreConfig( self::XML_PATH_ENABLED );
    }

    /**
     * tracking code
     *
     * @return string
     */
    public function getTrackingCode()
    {
        return (string) Mage::getStoreConfig( self::XML_PATH_CODE );
    }
}