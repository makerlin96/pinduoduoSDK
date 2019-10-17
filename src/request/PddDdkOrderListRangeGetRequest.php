<?php


namespace makerlin\pinduoduoSDK\request;


use makerlin\pinduoduoSDK\BaseRequest;

class PddDdkOrderListRangeGetRequest extends BaseRequest
{
    private $startTime;

    private $lastOrderId;

    private $pageSize;

    private $endTime;

    /**
     * @param mixed $pageSize
     */
    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;
    }

    /**
     * @param mixed $endTime
     */
    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;
    }

    /**
     * @param mixed $lastOrderId
     */
    public function setLastOrderId($lastOrderId)
    {
        $this->lastOrderId = $lastOrderId;
    }

    /**
     * @param mixed $startTime
     */
    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;
    }

    protected function getType()
    {
        // TODO: Implement getType() method.
        return 'pdd.ddk.order.list.range.get';
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
            'start_time' => $this->startTime,
            'last_order_id' => $this->lastOrderId,
            'page_size' => $this->pageSize,
            'end_time' => $this->endTime
        ];
        return array_filter($params);
    }
}