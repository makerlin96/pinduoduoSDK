<?php


namespace makerlin\pinduoduoSDK\request;


use makerlin\pinduoduoSDK\BaseRequest;

class PddDdkGoodsSearchRequest extends BaseRequest
{
    private $keyword;

    private $optId;

    private $page;

    private $pageSize;

    private $sortType;

    private $withCoupon;

    private $rangeList;

    private $catId;

    private $goodsIdList;

    private $merchantType;

    private $pid;

    private $customParameters;

    private $merchantTypeList;

    private $isBrandGoods;

    /**
     * @param mixed $catId
     */
    public function setCatId($catId)
    {
        $this->catId = $catId;
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
     * @param mixed $isBrandGoods
     */
    public function setIsBrandGoods($isBrandGoods)
    {
        $this->isBrandGoods = $isBrandGoods;
    }

    /**
     * @param mixed $keyword
     */
    public function setKeyword($keyword)
    {
        $this->keyword = $keyword;
    }

    /**
     * @param mixed $merchantType
     */
    public function setMerchantType($merchantType)
    {
        $this->merchantType = $merchantType;
    }

    /**
     * @param mixed $merchantTypeList
     */
    public function setMerchantTypeList($merchantTypeList)
    {
        $this->merchantTypeList = $merchantTypeList;
    }

    /**
     * @param mixed $optId
     */
    public function setOptId($optId)
    {
        $this->optId = $optId;
    }

    /**
     * @param mixed $page
     */
    public function setPage($page)
    {
        $this->page = $page;
    }

    /**
     * @param mixed $pageSize
     */
    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;
    }

    /**
     * @param mixed $pid
     */
    public function setPid($pid)
    {
        $this->pid = $pid;
    }

    /**
     * @param mixed $rangeList
     */
    public function setRangeList($rangeList)
    {
        $this->rangeList = $rangeList;
    }

    /**
     * @param mixed $sortType
     */
    public function setSortType($sortType)
    {
        $this->sortType = $sortType;
    }

    /**
     * @param mixed $withCoupon
     */
    public function setWithCoupon($withCoupon)
    {
        $this->withCoupon = $withCoupon;
    }

    protected function getType()
    {
        // TODO: Implement getType() method.
        return 'pdd.ddk.goods.search';
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
        // TODO: Implement getParams() method.
        $params = [
            'keyword' => $this->keyword,
            'opt_id' => $this->optId,
            'page' => $this->page,
            'page_size' => $this->pageSize,
            'sort_type' => $this->sortType,
            'with_coupon' => $this->withCoupon,
            'range_list' => $this->rangeList,
            'cat_id' => $this->catId,
            'goods_id_list' => $this->goodsIdList,
            'merchant_type' => $this->merchantType,
            'pid' => $this->pid,
            'custom_parameters' => $this->customParameters,
            'merchant_type_list' => $this->merchantTypeList,
            'is_brand_goods' => $this->isBrandGoods
        ];
        return array_filter($params);
    }
}