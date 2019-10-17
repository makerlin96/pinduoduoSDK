<?php


namespace makerlin\pinduoduoSDK;


class SDKHttpException extends \Exception
{
    public function errorMessage()
    {
        return $this->getMessage();
    }
}