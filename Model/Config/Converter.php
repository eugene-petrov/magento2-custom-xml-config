<?php

declare(strict_types=1);

namespace Snippet\CustomXmlConfig\Model\Config;

use Magento\Framework\Config\ConverterInterface;

class Converter implements ConverterInterface
{
    /**
     * @inheridoc
     */
    public function convert($source): array
    {
        $output = [];
        /** @var \DOMNode $node */
        foreach ($source->getElementsByTagName('custom_node') as $node) {
            // @todo: implement your changes here
            $output[] = $node->textContent;
        }

        return $output;
    }
}
