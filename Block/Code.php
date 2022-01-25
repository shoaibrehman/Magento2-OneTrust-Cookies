<?php
/**
 * Copyright © Shoman Solutions All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Shoman\OneTrust\Block;

class Code extends \Magento\Framework\View\Element\Template
{
    /**
     * @var \Shoman\OneTrust\Helper\Data
     */
    protected $_helper;

    /**
     * Constructor
     *
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Shoman\OneTrust\Helper\Data                     $helper,
        array                                            $data = []
    )
    {
        $this->_helper = $helper;
        parent::__construct($context, $data);
    }

    /**
     * @return string
     */
    public function getSiteId()
    {
        return $this->_helper->getSiteId();
    }
}

