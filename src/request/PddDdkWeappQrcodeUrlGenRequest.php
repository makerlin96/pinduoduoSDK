<?php


namespace makerlin\pinduoduoSDK\request;


use makerlin\pinduoduoSDK\BaseRequest;

class PddDdkWeappQrcodeUrlGenRequest extends BaseRequest
{
    private $pid;

    private $goodsIdList;

    private $customParameters;

    private $zsDuoId;

    private $generateMallCollectCoupon;

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
     * @param mixed $zsDuoId
     */
    public function setZsDuoId($zsDuoId)
    {
        $this->zsDuoId = $zsDuoId;
    }

    /**
     * @param mixed $goodsIdList
     */
    public function setGoodsIdList($goodsIdList)
    {
        $this->goodsIdList = $goodsIdList;
    }

    /**
     * @param mixed $generateMallCollectCoupon
     */
    public function setGenerateMallCollectCoupon($generateMallCollectCoupon)
    {
        $this->generateMallCollectCoupon = $generateMallCollectCoupon;
    }

    protected function getType()
    {
        // TODO: Implement getType() method.
        return 'pdd.ddk.weapp.qrcode.url.gen';
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
            'p_id'=>$this->pid,
            'goods_id_list' => $this->goodsIdList,
            'custom_parameters' => $this->customParameters,
            'zs_duo_id' => $this->zsDuoId,
            'generate_mall_collect_coupon' => $this->generateMallCollectCoupon
        ];
        return array_filter($params);
    }
}