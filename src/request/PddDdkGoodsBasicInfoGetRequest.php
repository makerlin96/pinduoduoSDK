<?php


namespace makerlin\pinduoduoSDK\request;


use makerlin\pinduoduoSDK\BaseRequest;

class PddDdkGoodsBasicInfoGetRequest extends BaseRequest
{

    private $goodsIdList;

    /**
     * @param mixed $goodsIdList
     */
    public function setGoodsIdList($goodsIdList)
    {
        $this->goodsIdList = $goodsIdList;
    }

    protected function getType()
    {
        // TODO: Implement getType() method.
        return 'pdd.ddk.goods.basic.info.get';
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
            'goods_id_list' => $this->goodsIdList
        ];
        return array_filter($params);
    }
}