<?php

declare(strict_types=1);

namespace Snippet\CustomXmlConfig\Api;

interface ConfigInterface
{
    /**
     * @return array
     */
    public function getCustomNodeInfo(): array;
}
