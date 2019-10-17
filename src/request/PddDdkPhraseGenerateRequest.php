<?php


namespace makerlin\pinduoduoSDK\request;


use makerlin\pinduoduoSDK\BaseRequest;

class PddDdkPhraseGenerateRequest extends BaseRequest
{
    private $pId;

    private $goodsIdList;

    private $multiGroup;

    private $customParameters;

    private $zsDuoId;

    private $style;

    /**
     * @param mixed $multiGroup
     */
    public function setMultiGroup($multiGroup)
    {
        $this->multiGroup = $multiGroup;
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
     * @param mixed $zsDuoId
     */
    public function setZsDuoId($zsDuoId)
    {
        $this->zsDuoId = $zsDuoId;
    }

    /**
     * @param mixed $pId
     */
    public function setPId($pId)
    {
        $this->pId = $pId;
    }

    /**
     * @param mixed $style
     */
    public function setStyle($style)
    {
        $this->style = $style;
    }

    protected function getType()
    {
        // TODO: Implement getType() method.
        return 'pdd.ddk.phrase.generate';
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
            'p_id' => $this->pId,
            'goods_id_list' => $this->goodsIdList,
            'multi_group' =>$this->multiGroup,
            'custom_parameters' => $this->customParameters,
            'zs_duo_id' => $this->zsDuoId,
            'style' => $this->style
        ];
        return array_filter($params);
    }
}