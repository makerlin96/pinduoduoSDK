<?php


namespace makerlin\pinduoduoSDK\request;


use makerlin\pinduoduoSDK\BaseRequest;

class PddDdkMallGoodsListGetRequest extends BaseRequest
{
    private $mallId;

    private $pageNumber;

    private $pageSize;

    /**
     * @param mixed $pageSize
     */
    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;
    }

    /**
     * @param mixed $mallId
     */
    public function setMallId($mallId)
    {
        $this->mallId = $mallId;
    }

    /**
     * @param mixed $pageNumber
     */
    public function setPageNumber($pageNumber)
    {
        $this->pageNumber = $pageNumber;
    }

    protected function getType()
    {
        // TODO: Implement getType() method.
        return 'pdd.ddk.mall.goods.list.get';
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
            'mall_id' => $this->mallId,
            'page_number' => $this->pageNumber,
            'page_size' => $this->pageSize
        ];
        return array_filter($params);
    }
}