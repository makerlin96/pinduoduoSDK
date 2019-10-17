<?php


namespace makerlin\pinduoduoSDK\request;


use makerlin\pinduoduoSDK\BaseRequest;

class PddDdkGoodsDetailRequest extends BaseRequest
{
    private $goodsIdList;

    private $pid;

    private $customParameters;

    private $zsDuoId;

    private $planType;

    /**
     * @param mixed $pid
     */
    public function setPid($pid)
    {
        $this->pid = $pid;
    }

    /**
     * @param mixed $customParameters
     */
    public function setCustomParameters($customParameters)
    {
        $this->customParameters = $customParameters;
    }

    /**
     * @param mixed $goodsIdList
     */
    public function setGoodsIdList($goodsIdList)
    {
        $this->goodsIdList = $goodsIdList;
    }

    /**
     * @param mixed $planType
     */
    public function setPlanType($planType)
    {
        $this->planType = $planType;
    }

    /**
     * @param mixed $zsDuoId
     */
    public function setZsDuoId($zsDuoId)
    {
        $this->zsDuoId = $zsDuoId;
    }

    protected function getType()
    {
        // TODO: Implement getType() method.
        return 'pdd.ddk.goods.detail';
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
            'goods_id_list' => $this->goodsIdList,
            'pid' => $this->pid,
            'custom' => $this->customParameters,
            'zs_duo_id' => $this->zsDuoId,
            'plan_type' => $this->planType,
        ];
        return array_filter($params);
    }
}