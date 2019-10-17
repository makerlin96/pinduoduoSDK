<?php


namespace makerlin\pinduoduoSDK\request;


use makerlin\pinduoduoSDK\BaseRequest;

class PddDdkOrderListIncrementGetRequest extends BaseRequest
{
    private $startUpdateTime;

    private $endUpdateTime;

    private $pageSize;

    private $page;

    private $returnCount;

    /**
     * @param mixed $pageSize
     */
    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;
    }

    /**
     * @param mixed $page
     */
    public function setPage($page)
    {
        $this->page = $page;
    }

    /**
     * @param mixed $endUpdateTime
     */
    public function setEndUpdateTime($endUpdateTime)
    {
        $this->endUpdateTime = $endUpdateTime;
    }

    /**
     * @param mixed $returnCount
     */
    public function setReturnCount($returnCount)
    {
        $this->returnCount = $returnCount;
    }

    /**
     * @param mixed $startUpdateTime
     */
    public function setStartUpdateTime($startUpdateTime)
    {
        $this->startUpdateTime = $startUpdateTime;
    }

    protected function getType()
    {
        // TODO: Implement getType() method.
        return 'pdd.ddk.order.list.increment.get';
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
            'start_update_time' => $this->startUpdateTime,
            'end_update_time' => $this->endUpdateTime,
            'page_size' => $this->pageSize,
            'page' => $this->page,
            'return_count' => $this->returnCount
        ];
        return array_filter($params);
    }
}