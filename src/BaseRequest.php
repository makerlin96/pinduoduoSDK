<?php


namespace pinduoduoSDK;

abstract class BaseRequest
{
    private $timestamp;
    protected abstract function getType();
    protected abstract function getDataType();
    protected abstract function getVersion();
    protected function getTimestamp()
    {
        if ($this->timestamp === null || trim($this->timestamp) === '')
        {
            $this->timestamp = time();
        }
        return $this->timestamp;
    }
    protected abstract function getUserParams();

    public function getSignParams()
    {
        $params = $this->getUserParams();
        $params['version'] = $this->getVersion();
        $params['data_type'] = $this->getDataType();
        $params['type'] = $this->getType();
        $params['timestamp'] = $this->getTimestamp();
        return $params;
    }
}