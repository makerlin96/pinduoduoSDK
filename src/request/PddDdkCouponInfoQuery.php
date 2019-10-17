<?php


namespace makerlin\pinduoduoSDK\request;


use makerlin\pinduoduoSDK\BaseRequest;

class PddDdkCouponInfoQuery extends BaseRequest
{
    private $couponIds;

    protected function getType()
    {
        // TODO: Implement getType() method.
        return 'pdd.ddk.coupon.info.query';
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
            'coupon_ids' => $this->couponIds
        ];
        array_filter($params);
    }
}