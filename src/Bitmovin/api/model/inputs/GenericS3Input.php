<?php

namespace Bitmovin\api\model\inputs;

use JMS\Serializer\Annotation as JMS;

class GenericS3Input extends Input
{
    /**
     * @JMS\Type("string")
     * @var string
     */
    private $bucketName;

    /**
     * @JMS\Type("string")
     * @var string
     */
    private $accessKey;

    /**
     * @JMS\Type("string")
     * @var string
     */
    private $secretKey;

    /**
     * @JMS\Type("string")
     * @var string
     */
    private $host;

    /**
     * @JMS\Type("integer")
     * @var int
     */
    private $port;

    /**
     * GenericS3Input constructor.
     * @param string $bucketName
     * @param string $accessKey
     * @param string $secretKey
     * @param string $host
     * @param int $port
     */
    public function __construct($bucketName, $accessKey, $secretKey, $host, $port)
    {
        $this->bucketName = $bucketName;
        $this->accessKey = $accessKey;
        $this->secretKey = $secretKey;
        $this->host = $host;
        $this->port = $port;
    }

    /**
     * @return string
     */
    public function getBucketName()
    {
        return $this->bucketName;
    }

    /**
     * @param string $bucketName
     */
    public function setBucketName($bucketName)
    {
        $this->bucketName = $bucketName;
    }

    /**
     * @return string
     */
    public function getAccessKey()
    {
        return $this->accessKey;
    }

    /**
     * @param string $accessKey
     */
    public function setAccessKey($accessKey)
    {
        $this->accessKey = $accessKey;
    }

    /**
     * @return string
     */
    public function getSecretKey()
    {
        return $this->secretKey;
    }

    /**
     * @param string $secretKey
     */
    public function setSecretKey($secretKey)
    {
        $this->secretKey = $secretKey;
    }

    /**
     * @return string
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * @param string $host
     */
    public function setHost($host)
    {
        $this->host = $host;
    }

    /**
     * @return int
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * @param int $port
     */
    public function setPort($port)
    {
        $this->port = $port;
    }
}