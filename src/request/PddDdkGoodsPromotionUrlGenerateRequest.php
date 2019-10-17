<?php


namespace makerlin\pinduoduoSDK\request;


use makerlin\pinduoduoSDK\BaseRequest;

class PddDdkGoodsPromotionUrlGenerateRequest extends BaseRequest
{
    private $pid;

    private $goodsIdList;

    private $generateShortUrl;

    private $multiGroup;

    private $customParameters;

    private $generateWeappWebView;

    private $zsDuoId;

    private $generateWeApp;

    private $generateWeiboappWebview;

    private $generateMallCollectCoupon;

    private $generateSchemaUrl;

    private $generateQQApp;

    /**
     * @param mixed $zsDuoId
     */
    public function setZsDuoId($zsDuoId)
    {
        $this->zsDuoId = $zsDuoId;
    }

    /**
     * @param mixed $goodsIdList
     */
    public function setGoodsIdList($goodsIdList)
    {
        $this->goodsIdList = $goodsIdList;
    }

    /**
     * @param mixed $customParameters
     */
    public function setCustomParameters($customParameters)
    {
        $this->customParameters = $customParameters;
    }

    /**
     * @param mixed $pid
     */
    public function setPid($pid)
    {
        $this->pid = $pid;
    }

    /**
     * @param mixed $multiGroup
     */
    public function setMultiGroup($multiGroup)
    {
        $this->multiGroup = $multiGroup;
    }

    /**
     * @param mixed $generateSchemaUrl
     */
    public function setGenerateSchemaUrl($generateSchemaUrl)
    {
        $this->generateSchemaUrl = $generateSchemaUrl;
    }

    /**
     * @param mixed $generateMallCollectCoupon
     */
    public function setGenerateMallCollectCoupon($generateMallCollectCoupon)
    {
        $this->generateMallCollectCoupon = $generateMallCollectCoupon;
    }

    /**
     * @param mixed $generateQQApp
     */
    public function setGenerateQQApp($generateQQApp)
    {
        $this->generateQQApp = $generateQQApp;
    }

    /**
     * @param mixed $generateShortUrl
     */
    public function setGenerateShortUrl($generateShortUrl)
    {
        $this->generateShortUrl = $generateShortUrl;
    }

    /**
     * @param mixed $generateWeApp
     */
    public function setGenerateWeApp($generateWeApp)
    {
        $this->generateWeApp = $generateWeApp;
    }

    /**
     * @param mixed $generateWeappWebView
     */
    public function setGenerateWeappWebView($generateWeappWebView)
    {
        $this->generateWeappWebView = $generateWeappWebView;
    }

    /**
     * @param mixed $generateWeiboappWebview
     */
    public function setGenerateWeiboappWebview($generateWeiboappWebview)
    {
        $this->generateWeiboappWebview = $generateWeiboappWebview;
    }

    protected function getType()
    {
        // TODO: Implement getType() method.
        return 'pdd.ddk.goods.promotion.url.generate';
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
            'p_id'=>$this->pid,
            'goods_id_list' => $this->goodsIdList,
            'generate_short_url' => $this->generateShortUrl,
            'multi_group' => $this->multiGroup,
            'custom_parameters' => $this->customParameters,
            'generate_weapp_webview' => $this->generateWeappWebView,
            'zs_duo_id' => $this->zsDuoId,
            'generate_we_app' => $this->generateWeApp,
            'generate_weiboapp_webview' => $this->generateWeiboappWebview,
            'generate_mall_collect_coupon' => $this->generateMallCollectCoupon,
            'generate_schema_url' => $this->generateSchemaUrl,
            'generate_qq_app' => $this->generateQQApp
        ];
        return array_filter($params);
    }
}