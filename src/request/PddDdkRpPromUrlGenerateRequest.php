<?php


namespace makerlin\pinduoduoSDK\request;


use makerlin\pinduoduoSDK\BaseRequest;

class PddDdkRpPromUrlGenerateRequest extends BaseRequest
{
    private $generateShortUrl;

    private $pIdList;

    private $customParameters;

    private $generateWeappWebview;

    private $weAppWebViewShortUrl;

    private $weAppWebWiewUrl;

    private $generateWeApp;

    private $channelType;

    private $generateSchemaUrl;

    private $generateQQApp;

    /**
     * @param mixed $generateWeApp
     */
    public function setGenerateWeApp($generateWeApp)
    {
        $this->generateWeApp = $generateWeApp;
    }

    /**
     * @param mixed $generateQQApp
     */
    public function setGenerateQQApp($generateQQApp)
    {
        $this->generateQQApp = $generateQQApp;
    }

    /**
     * @param mixed $generateSchemaUrl
     */
    public function setGenerateSchemaUrl($generateSchemaUrl)
    {
        $this->generateSchemaUrl = $generateSchemaUrl;
    }

    /**
     * @param mixed $customParameters
     */
    public function setCustomParameters($customParameters)
    {
        $this->customParameters = $customParameters;
    }

    /**
     * @param mixed $generateShortUrl
     */
    public function setGenerateShortUrl($generateShortUrl)
    {
        $this->generateShortUrl = $generateShortUrl;
    }

    /**
     * @param mixed $channelType
     */
    public function setChannelType($channelType)
    {
        $this->channelType = $channelType;
    }

    /**
     * @param mixed $weAppWebViewShortUrl
     */
    public function setWeAppWebViewShortUrl($weAppWebViewShortUrl)
    {
        $this->weAppWebViewShortUrl = $weAppWebViewShortUrl;
    }

    /**
     * @param mixed $pIdList
     */
    public function setPIdList($pIdList)
    {
        $this->pIdList = $pIdList;
    }

    /**
     * @param mixed $generateWeappWebview
     */
    public function setGenerateWeappWebview($generateWeappWebview)
    {
        $this->generateWeappWebview = $generateWeappWebview;
    }

    /**
     * @param mixed $weAppWebWiewUrl
     */
    public function setWeAppWebWiewUrl($weAppWebWiewUrl)
    {
        $this->weAppWebWiewUrl = $weAppWebWiewUrl;
    }

    protected function getType()
    {
        // TODO: Implement getType() method.
        return 'pdd.ddk.rp.prom.url.generate';
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
            'generate_short_url' => $this->generateShortUrl,
            'p_id_list' => $this->pIdList,
            'custom_parameters' => $this->customParameters,
            'generate_weapp_webview' => $this->generateWeappWebview,
            'we_app_web_view_short_url' => $this->weAppWebViewShortUrl,
            'we_app_web_wiew_url' => $this->weAppWebWiewUrl,
            'generate_we_app' => $this->generateWeApp,
            'channel_type' => $this->channelType,
            'generate_schema_url' => $this->generateSchemaUrl,
            'generate_qq_app'=> $this->generateQQApp
        ];
        return array_filter($params);
    }
}