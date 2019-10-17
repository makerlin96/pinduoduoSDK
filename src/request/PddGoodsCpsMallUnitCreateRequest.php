<?php


namespace makerlin\pinduoduoSDK\request;


use makerlin\pinduoduoSDK\BaseRequest;

class PddGoodsCpsMallUnitCreateRequest extends BaseRequest
{
    private $rate;

    private $erpCode;

    /**
     * @param mixed $rate
     */
    public function setRate($rate)
    {
        $this->rate = $rate;
    }

    /**
     * @param mixed $erpCode
     */
    public function setErpCode($erpCode)
    {
        $this->erpCode = $erpCode;
    }

    protected function getType()
    {
        // TODO: Implement getType() method.
        return 'pdd.goods.cps.mall.unit.create';
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
            'rate' => $this->rate,
            'erp_code' => $this->erpCode
        ];
        return array_filter($params);
    }
}