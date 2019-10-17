<?php


namespace makerlin\pinduoduoSDK\request;


use makerlin\pinduoduoSDK\BaseRequest;

class PddDdkThemeListGetRequest extends BaseRequest
{
    private $pageSize;

    private $page;

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

    protected function getType()
    {
        // TODO: Implement getType() method.
        return 'pdd.ddk.theme.list.get';
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
            'page_size' => $this->pageSize,
            'page' => $this->page
        ];
        return array_filter($params);
    }
}