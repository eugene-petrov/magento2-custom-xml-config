<?php

declare(strict_types=1);

namespace Snippet\CustomXmlConfig\Model;

use Magento\Framework\Config\Data;
use Snippet\CustomXmlConfig\Api\ConfigInterface;

class Config extends Data implements ConfigInterface
{
    /**
     * @inheridoc
     */
    public function getCustomNodeInfo(): array
    {
        return $this->get();
    }
}
