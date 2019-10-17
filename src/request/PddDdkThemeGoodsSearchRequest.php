<?php


namespace makerlin\pinduoduoSDK\request;


use makerlin\pinduoduoSDK\BaseRequest;

class PddDdkThemeGoodsSearchRequest extends BaseRequest
{
    private $themeId;

    /**
     * @param mixed $themeId
     */
    public function setThemeId($themeId)
    {
        $this->themeId = $themeId;
    }

    protected function getType()
    {
        // TODO: Implement getType() method.
        return 'pdd.ddk.theme.goods.search';
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
            'theme_id' => $this->themeId
        ];
        return array_filter($params);
    }
}