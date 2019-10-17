<?php


namespace makerlin\pinduoduoSDK\request;


use makerlin\pinduoduoSDK\BaseRequest;

class PddDdkTopGoodsListQueryRequest extends BaseRequest
{
    private $pid;

    private $offset;

    private $sortType;

    private $limit;

    /**
     * @param mixed $pid
     */
    public function setPid($pid)
    {
        $this->pid = $pid;
    }

    /**
     * @param mixed $limit
     */
    public function setLimit($limit)
    {
        $this->limit = $limit;
    }

    /**
     * @param mixed $offset
     */
    public function setOffset($offset)
    {
        $this->offset = $offset;
    }

    /**
     * @param mixed $sortType
     */
    public function setSortType($sortType)
    {
        $this->sortType = $sortType;
    }

    protected function getType()
    {
        // TODO: Implement getType() method.
        return 'pdd.ddk.top.goods.list.query';
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
            'p_id' => $this->pid,
            'offset' => $this->offset,
            'sort_type' => $this->sortType,
            'limit' => $this->limit
        ];
        return array_filter($params);
    }
}