<?php


namespace makerlin\pinduoduoSDK\request;


use makerlin\pinduoduoSDK\BaseRequest;

class PddDdkGoodsRecommendGetRequest extends BaseRequest
{
    private $offset;
    private $limit;
    private $channelType;
    private $pid;
    private $customParameters;

    /**
     * @param mixed $offset
     */
    public function setOffset($offset)
    {
        $this->offset = $offset;
    }

    /**
     * @param mixed $limit
     */
    public function setLimit($limit)
    {
        $this->limit = $limit;
    }

    /**
     * @param mixed $channelType
     */
    public function setChannelType($channelType)
    {
        $this->channelType = $channelType;
    }

    /**
     * @param mixed $customParameters
     */
    public function setCustomParameters($customParameters)
    {
        $this->customParameters = $customParameters;
    }

    /**
     * @param mixed $pid
     */
    public function setPid($pid)
    {
        $this->pid = $pid;
    }

    protected function getType()
    {
        // TODO: Implement getType() method.
        return 'pdd.ddk.goods.recommend.get';
    }

    protected function getDataType()
    {
        // TODO: Implement getDataType() method.
        return 'JSON';
    }

    protected function getVersion()
    {
        // TODO: Implement getVersion() method.
        return 'V1';
    }

    protected function getUserParams()
    {
        // TODO: Implement getUserParams() method.
        $params = [
            'offset' => $this->offset,
            'limit' => $this->limit,
            'channel_type' => $this->channelType,
            'pid' => $this->pid,
            'custom_parameters' =>$this->customParameters
        ];
        return array_filter($params);
    }
}