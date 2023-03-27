<?php

namespace Signifyd\Connect\Model\System\Config\Source\Options;

class PolicyName implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => 'POST_AUTH', 'label' => __('Post auth')],
            ['value' => 'PRE_AUTH', 'label' => __('Pre auth')]
        ];
    }

    /**
     * Get options in "key-value" format
     *
     * @return array
     */
    public function toArray()
    {
        return ['POST_AUTH' => __('Post auth'), 'PRE_AUTH' => __('Pre auth')];
    }
}
