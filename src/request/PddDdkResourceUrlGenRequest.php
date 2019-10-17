<?php


namespace makerlin\pinduoduoSDK\request;


use makerlin\pinduoduoSDK\BaseRequest;

class PddDdkResourceUrlGenRequest extends BaseRequest
{
    private $customParameters;

    private $generateWeApp;

    private $pid;

    private $resourceType;

    private $url;

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
     * @param mixed $resourceType
     */
    public function setResourceType($resourceType)
    {
        $this->resourceType = $resourceType;
    }

    /**
     * @param mixed $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    protected function getType()
    {
        // TODO: Implement getType() method.
        return 'pdd.ddk.resource.url.gen';
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
            'custom_parameters' => $this->customParameters,
            'generate_we_app' => $this->generateWeApp,
            'pid' => $this->pid,
            'resource_type' => $this->resourceType,
            'url' => $this->url,
            'generate_schema_url' => $this->generateSchemaUrl,
            'generate_qq_app' => $this->generateQQApp
        ];
        return array_filter($params);
    }
}