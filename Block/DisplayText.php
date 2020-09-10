<?php
namespace Commersys\AnnouncementBar\Block;

class DisplayText extends \Magento\Framework\View\Element\Template
{
    protected $_helperData;
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Commersys\AnnouncementBar\Helper\Data $helperData
    )
    {
        $this->_helperData = $helperData;
        parent::__construct($context);

    }

    /**
     * @param $config_id
     * @return mixed
     *
     */
    public function getConfigurationData($config_id)
    {
        return $this->_helperData->getGeneralConfig($config_id);
    }
}