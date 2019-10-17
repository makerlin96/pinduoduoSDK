<?php


namespace makerlin\pinduoduoSDK\request;


use makerlin\pinduoduoSDK\BaseRequest;

class PddDdkLotteryUrlGenRequest extends BaseRequest
{
    private $pidList;

    private $generateWeappWebView;

    private $generateShortUrl;

    private $multiGroup;

    private $customParameters;

    private $generateWeApp;

    private $generateSchemaUrl;

    private $generateQQApp;

    /**
     * @param mixed $customParameters
     */
    public function setCustomParameters($customParameters)
    {
        $this->customParameters = $customParameters;
    }

    /**
     * @param mixed $generateWeappWebView
     */
    public function setGenerateWeappWebView($generateWeappWebView)
    {
        $this->generateWeappWebView = $generateWeappWebView;
    }

    /**
     * @param mixed $generateWeApp
     */
    public function setGenerateWeApp($generateWeApp)
    {
        $this->generateWeApp = $generateWeApp;
    }

    /**
     * @param mixed $generateShortUrl
     */
    public function setGenerateShortUrl($generateShortUrl)
    {
        $this->generateShortUrl = $generateShortUrl;
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
     * @param mixed $multiGroup
     */
    public function setMultiGroup($multiGroup)
    {
        $this->multiGroup = $multiGroup;
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
        return 'pdd.ddk.lottery.url.gen';
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
            'pid_list' => $this->pidList,
            'generate_weapp_webview' => $this->generateWeappWebView,
            'multi_group' => $this->multiGroup,
            'custom_parameters' => $this->customParameters,
            'generate_we_app' => $this->generateWeApp,
            'generate_schema_url' => $this->generateSchemaUrl,
            'generate_qq_app' => $this->generateQQApp
        ];
        return array_filter($params);
    }
}