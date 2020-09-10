<?php
namespace Commersys\AnnouncementBar\Block\Adminhtml\System\Config\Form\Field;

class TextPosition
{
    public function toOptionArray()
    {
        return [
            ['value' => 'header', 'label' => __('Header (Default)')],
            ['value' => 'header_fixed', 'label' => __('Header Fixed')],
            ['value' => 'footer', 'label' => __('Footer')],
            ['value' => 'footer_fixed', 'label' => __('Footer Fixed')]
        ];
    }
}