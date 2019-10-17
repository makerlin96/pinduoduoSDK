<?php


namespace makerlin\pinduoduoSDK\request;


use makerlin\pinduoduoSDK\BaseRequest;

class PddDdkGoodsUnitQueryRequest extends BaseRequest
{
    private $goodsId;

    private $zsDuoId;

    protected function getType()
    {
        // TODO: Implement getType() method.
        return 'pdd.ddk.goods.unit.query';
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
            'goods_id' => $this->goodsId,
            'zs_duo_id' => $this->zsDuoId
        ];
        return array_filter($params);
    }
}