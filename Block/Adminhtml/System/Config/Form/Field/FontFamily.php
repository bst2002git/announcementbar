<?php
namespace Commersys\AnnouncementBar\Block\Adminhtml\System\Config\Form\Field;

class FontFamily
{
    public function toOptionArray()
    {
        return [
            ['value' => 'inherit', 'label' => __('Default')],
            ['value' => 'Times, "Times New Roman", serif', 'label' => __('Times, "Times New Roman", serif')],
            ['value' => 'Helvetica, Arial, sans-serif', 'label' => __('Helvetica, Arial, sans-serif')]
        ];
    }
}