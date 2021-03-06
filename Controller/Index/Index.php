<?php

declare(strict_types=1);

namespace Snippet\CustomXmlConfig\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\Controller\Result\RawFactory;
use Magento\Framework\Controller\ResultInterface;
use Snippet\CustomXmlConfig\Api\ConfigInterface;

class Index implements ActionInterface
{
    /**
     * @var ConfigInterface
     */
    private $customConfig;

    /**
     * @var RawFactory
     */
    private $rawFactory;

    /**
     * @param ConfigInterface $customConfig
     * @param RawFactory $rawFactory
     */
    public function __construct(ConfigInterface $customConfig, RawFactory $rawFactory)
    {
        $this->rawFactory = $rawFactory;
        $this->customConfig = $customConfig;
    }

    /**
     * @return ResultInterface
     */
    public function execute(): ResultInterface
    {
        $myNodes = $this->customConfig->getCustomNodeInfo();
        $result = $this->rawFactory->create();
        $result->setContents(implode("<br>", $myNodes));

        return $result;
    }
}
