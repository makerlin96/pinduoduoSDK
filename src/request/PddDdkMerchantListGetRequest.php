<?php


namespace makerlin\pinduoduoSDK\request;


use makerlin\pinduoduoSDK\BaseRequest;

class PddDdkMerchantListGetRequest extends BaseRequest
{
    private $catId;

    private $hasCltCpn;

    private $hasCoupon;

    private $mallIdList;

    private $merchantTypeList;

    private $pageNumber;

    private $pageSize;

    private $queryRangeStr;

    private $rangeVoList;

    /**
     * @param mixed $pageNumber
     */
    public function setPageNumber($pageNumber)
    {
        $this->pageNumber = $pageNumber;
    }

    /**
     * @param mixed $pageSize
     */
    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;
    }

    /**
     * @param mixed $merchantTypeList
     */
    public function setMerchantTypeList($merchantTypeList)
    {
        $this->merchantTypeList = $merchantTypeList;
    }

    /**
     * @param mixed $cartId
     */
    public function setCartId($cartId)
    {
        $this->cartId = $cartId;
    }

    /**
     * @param mixed $hasCltCpn
     */
    public function setHasCltCpn($hasCltCpn)
    {
        $this->hasCltCpn = $hasCltCpn;
    }

    /**
     * @param mixed $hasCoupon
     */
    public function setHasCoupon($hasCoupon)
    {
        $this->hasCoupon = $hasCoupon;
    }

    /**
     * @param mixed $mallIdList
     */
    public function setMallIdList($mallIdList)
    {
        $this->mallIdList = $mallIdList;
    }

    /**
     * @param mixed $queryRangeStr
     */
    public function setQueryRangeStr($queryRangeStr)
    {
        $this->queryRangeStr = $queryRangeStr;
    }

    /**
     * @param mixed $rangeVoList
     */
    public function setRangeVoList($rangeVoList)
    {
        $this->rangeVoList = $rangeVoList;
    }

    protected function getType()
    {
        // TODO: Implement getType() method.
        return 'pdd.ddk.merchant.list.get';
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
            'cat_id' => $this->catId,
            'has_clt_cpn' => $this->hasCltCpn,
            'has_coupon' => $this->hasCoupon,
            'mall_id_list' => $this->mallIdList,
            'merchant_type_list' => $this->merchantTypeList,
            'page_number' => $this->pageNumber,
            'page_size' => $this->pageSize,
            'query_range_str' => $this->queryRangeStr,
            'range_vo_list' => $this->rangeVoList
        ];
        return array_filter($params);
    }
}