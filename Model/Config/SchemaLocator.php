<?php

declare(strict_types=1);

namespace Snippet\CustomXmlConfig\Model\Config;

use Magento\Framework\Config\SchemaLocatorInterface;
use Magento\Framework\Module\Dir\Reader;

class SchemaLocator implements SchemaLocatorInterface
{
    /**
     * @var Reader
     */
    private $moduleReader;

    /**
     * @param Reader $moduleReader
     */
    public function __construct(Reader $moduleReader)
    {
        $this->moduleReader = $moduleReader;
    }

    /**
     * Get path to merged config schema
     * Path to corresponding XSD file with validation rules for merged config
     *
     * @return string
     */
    public function getSchema(): string
    {
        $etcDir = $this->moduleReader->getModuleDir('etc', 'Snippet_CustomXmlConfig');
        return $etcDir . '/custom.xsd';
    }

    /**
     * Get path to pre file validation schema
     * Path to corresponding XSD file with validation rules for separate config files
     *
     * @return string
     */
    public function getPerFileSchema(): string
    {
        $etcDir = $this->moduleReader->getModuleDir('etc', 'Snippet_CustomXmlConfig');
        return $etcDir . '/custom.xsd';
    }
}
