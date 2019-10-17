<?php


namespace pinduoduoSDK;


class SDKHttpException extends \Exception
{
    public function errorMessage()
    {
        return $this->getMessage();
    }
}