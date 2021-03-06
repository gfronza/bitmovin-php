<?php


namespace Bitmovin\api\container;


use Bitmovin\api\ApiClient;
use Bitmovin\api\model\Transferable;
use Bitmovin\api\model\transfers\AbstractTransfer;

class TransferContainer
{
    /**
     * @var ApiClient
     */
    private $apiClient;

    /**
     * @var Transferable
     */
    public $transferableResource;

    /**
     * @var  AbstractTransfer
     */
    public $transfer;

    /**
     * @var \Bitmovin\api\model\Status
     */
    public $statusObject = null;

    /**
     * @var  string
     */
    public $status;

    /**
     * TransferContainer constructor.
     * @param ApiClient    $apiClient
     * @param Transferable $resource
     */
    public function __construct(ApiClient $apiClient, Transferable $resource)
    {
        $this->apiClient = $apiClient;
        $this->transferableResource = $resource;
    }

    public function getTransferOutputPath(TransferJobContainer $transferJobContainer)
    {
        return $this->combinePath($transferJobContainer->getOutputPath());
    }

    /**
     * @param string[] ...$paths
     * @return string
     */
    private function combinePath(...$paths)
    {
        $path = '';
        foreach ($paths as $item)
        {
            if (substr($item, 0, 1) != '/' && substr($path, -1) != '/')
            {
                $path .= '/';
            }
            $path .= $item;
        }
        return $path;
    }
}