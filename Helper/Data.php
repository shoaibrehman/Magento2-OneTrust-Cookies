<?php
/**
 * Copyright © Shoman Solutions All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Shoman\OneTrust\Helper;

use Magento\Framework\App\Helper\AbstractHelper;

class Data extends AbstractHelper
{

    /**
     * @param \Magento\Framework\App\Helper\Context $context
     */
    public function __construct(
        \Magento\Framework\App\Helper\Context $context
    )
    {
        parent::__construct($context);
    }

    /**
     * @return bool
     */
    public function isEnabled()
    {
        return $this->scopeConfig->getValue('onetrust/general/enabled',
            \Magento\Store\Model\ScopeInterface::SCOPE_WEBSITE);
    }

    /**
     * @return mixed
     */
    public function getSiteId()
    {
        return $this->scopeConfig->getValue('onetrust/general/siteid',
            \Magento\Store\Model\ScopeInterface::SCOPE_WEBSITE);
    }
}


