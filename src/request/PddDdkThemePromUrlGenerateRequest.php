<?php


namespace makerlin\pinduoduoSDK\request;


use makerlin\pinduoduoSDK\BaseRequest;

class PddDdkThemePromUrlGenerateRequest extends BaseRequest
{
    private $pid;

    private $themeIdList;

    private $generateShortUrl;

    private $generateMobile;

    private $customParameters;

    private $generateWeappWebView;

    private $weAppWebViewShortUrl;

    private $weAppWebWiewUrl;

    private $generateWeApp;

    private $generateSchemaUrl;

    private $generateQQApp;

    /**
     * @param mixed $weAppWebWiewUrl
     */
    public function setWeAppWebWiewUrl($weAppWebWiewUrl)
    {
        $this->weAppWebWiewUrl = $weAppWebWiewUrl;
    }

    /**
     * @param mixed $weAppWebViewShortUrl
     */
    public function setWeAppWebViewShortUrl($weAppWebViewShortUrl)
    {
        $this->weAppWebViewShortUrl = $weAppWebViewShortUrl;
    }

    /**
     * @param mixed $generateShortUrl
     */
    public function setGenerateShortUrl($generateShortUrl)
    {
        $this->generateShortUrl = $generateShortUrl;
    }

    /**
     * @param mixed $customParameters
     */
    public function setCustomParameters($customParameters)
    {
        $this->customParameters = $customParameters;
    }

    /**
     * @param mixed $generateSchemaUrl
     */
    public function setGenerateSchemaUrl($generateSchemaUrl)
    {
        $this->generateSchemaUrl = $generateSchemaUrl;
    }

    /**
     * @param mixed $generateQQApp
     */
    public function setGenerateQQApp($generateQQApp)
    {
        $this->generateQQApp = $generateQQApp;
    }

    /**
     * @param mixed $generateWeApp
     */
    public function setGenerateWeApp($generateWeApp)
    {
        $this->generateWeApp = $generateWeApp;
    }

    /**
     * @param mixed $pid
     */
    public function setPid($pid)
    {
        $this->pid = $pid;
    }

    /**
     * @param mixed $generateWeappWebView
     */
    public function setGenerateWeappWebView($generateWeappWebView)
    {
        $this->generateWeappWebView = $generateWeappWebView;
    }

    /**
     * @param mixed $generateMobile
     */
    public function setGenerateMobile($generateMobile)
    {
        $this->generateMobile = $generateMobile;
    }

    /**
     * @param mixed $themeIdList
     */
    public function setThemeIdList($themeIdList)
    {
        $this->themeIdList = $themeIdList;
    }

    protected function getType()
    {
        // TODO: Implement getType() method.
        return 'pdd.ddk.theme.prom.url.generate';
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
            'pid' => $this->pid,
            'theme_id_list' => $this->themeIdList,
            'generate_short_url' => $this->generateShortUrl,
            'generate_mobile' => $this->generateMobile,
            'custom_parameters' => $this->customParameters,
            'generate_weapp_webview' => $this->generateWeappWebView,
            'we_app_web_view_short_url' => $this->weAppWebViewShortUrl,
            'we_app_web_wiew_url' => $this->weAppWebWiewUrl,
            'generate_we_app' => $this->generateWeApp,
            'generate_schema_url' => $this->generateSchemaUrl,
            'generate_qq_app' => $this->generateQQApp
        ];
        return array_filter($params);
    }
}