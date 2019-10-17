<?php


namespace makerlin\pinduoduoSDK\request;


use makerlin\pinduoduoSDK\BaseRequest;

class PddGoodsCpsMallUnitChange extends BaseRequest
{
    private $rate;

    /**
     * @param mixed $rate
     */
    public function setRate($rate)
    {
        $this->rate = $rate;
    }

    protected function getType()
    {
        // TODO: Implement getType() method.
        return 'pdd.goods.cps.mall.unit.change';
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
        $params = ['rate' => $this->rate];
        return array_filter($params);
    }
}