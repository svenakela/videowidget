<?php
namespace Primenta\VideoWidget\Model;
 
class VideoSource implements \Magento\Framework\Option\ArrayInterface
{
    public function toOptionArray()
    {
        return [
            ['value' => 0, 'label' => 'Youtube'],
            ['value' => 1, 'label' => 'Vimeo']
        ];
    }
}

?>
