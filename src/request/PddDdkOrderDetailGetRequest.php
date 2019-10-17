<?php


namespace makerlin\pinduoduoSDK\request;


use makerlin\pinduoduoSDK\BaseRequest;

class PddDdkOrderDetailGetRequest extends BaseRequest
{
    private $orderSn;

    /**
     * @param mixed $orderSn
     */
    public function setOrderSn($orderSn)
    {
        $this->orderSn = $orderSn;
    }

    protected function getType()
    {
        // TODO: Implement getType() method.
        return 'pdd.ddk.order.detail.get';
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
            'order_sn' => $this->orderSn
        ];
        return array_filter($params);
    }
}