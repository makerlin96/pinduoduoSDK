<?php


namespace makerlin\pinduoduoSDK\request;


use makerlin\pinduoduoSDK\BaseRequest;

class PddDdkCmsPromUrlGenerateRequest extends BaseRequest
{
    private $generateSortUrl;

    private $generateMobile;

    private $multiGroup;

    private $customParameters;

    private $generateWeappWebview;

    private $weAppWebViewShortUrl;

    private $weAppWebViewUrl;

    private $channelType;

    private $pIdList;

    private $generateSchemaUrl;

    /**
     * @param mixed $customParameters
     */
    public function setCustomParameters($customParameters)
    {
        $this->customParameters = $customParameters;
    }

    /**
     * @param mixed $channelType
     */
    public function setChannelType($channelType)
    {
        $this->channelType = $channelType;
    }

    /**
     * @param mixed $generateMobile
     */
    public function setGenerateMobile($generateMobile)
    {
        $this->generateMobile = $generateMobile;
    }

    /**
     * @param mixed $generateSchemaUrl
     */
    public function setGenerateSchemaUrl($generateSchemaUrl)
    {
        $this->generateSchemaUrl = $generateSchemaUrl;
    }

    /**
     * @param mixed $generateSortUrl
     */
    public function setGenerateSortUrl($generateSortUrl)
    {
        $this->generateSortUrl = $generateSortUrl;
    }

    /**
     * @param mixed $generateWeappWebview
     */
    public function setGenerateWeappWebview($generateWeappWebview)
    {
        $this->generateWeappWebview = $generateWeappWebview;
    }

    /**
     * @param mixed $multiGroup
     */
    public function setMultiGroup($multiGroup)
    {
        $this->multiGroup = $multiGroup;
    }

    /**
     * @param mixed $pIdList
     */
    public function setPIdList($pIdList)
    {
        $this->pIdList = $pIdList;
    }

    /**
     * @param mixed $weAppWebViewShortUrl
     */
    public function setWeAppWebViewShortUrl($weAppWebViewShortUrl)
    {
        $this->weAppWebViewShortUrl = $weAppWebViewShortUrl;
    }

    /**
     * @param mixed $weAppWebViewUrl
     */
    public function setWeAppWebViewUrl($weAppWebViewUrl)
    {
        $this->weAppWebViewUrl = $weAppWebViewUrl;
    }

    protected function getType()
    {
        // TODO: Implement getType() method.
        return 'V1';
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
            'generate_short_url' => $this->generateSortUrl,
            'generate_mobile' => $this->generateMobile,
            'multi_group' => $this->multiGroup,
            'custom_parameters' => $this->customParameters,
            'generate_weapp_webview' => $this->generateWeappWebview,
            'we_app_web_view_short_url' => $this->weAppWebViewShortUrl,
            'we_app_web_view_url' => $this->weAppWebViewUrl,
            'channel_type' => $this->channelType,
            'pid_list' => $this->pIdList,
            'generate_schema_url' => $this->generateSchemaUrl
        ];
        return array_filter($params);
    }
}