<?php
namespace makerlin\pinduoduoSDK\request;

use makerlin\pinduoduoSDK\BaseRequest;

class PddDdkGoodsPidQuery extends BaseRequest
{
    private $page;

    private $pageSize;

    private $pidList;

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
     * @param mixed $pidList
     */
    public function setPidList($pidList)
    {
        $this->pidList = $pidList;
    }

    protected function getType()
    {
        // TODO: Implement getType() method.
        return 'pdd.ddk.goods.pid.generate';
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
            'page' => $this->page,
            'page_size' => $this->pageSize,
            'pid_list' => $this->pidList
        ];
        return array_filter($params);
    }
}