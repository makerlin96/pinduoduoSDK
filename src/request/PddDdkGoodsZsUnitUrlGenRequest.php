<?php


namespace makerlin\pinduoduoSDK\request;


use makerlin\pinduoduoSDK\BaseRequest;

class PddDdkGoodsZsUnitUrlGenRequest extends BaseRequest
{
    private $sourceUrl;

    private $pid;

    /**
     * @param mixed $pid
     */
    public function setPid($pid)
    {
        $this->pid = $pid;
    }

    /**
     * @param mixed $sourceUrl
     */
    public function setSourceUrl($sourceUrl)
    {
        $this->sourceUrl = $sourceUrl;
    }

    protected function getType()
    {
        // TODO: Implement getType() method.
        return 'pdd.ddk.goods.zs.unit.url.gen';
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
            'source_url' => $this->sourceUrl,
            'pid' => $this->pid
        ];
        return array_filter($params);
    }
}