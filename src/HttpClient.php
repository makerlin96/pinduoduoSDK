<?php


namespace makerlin\pinduoduoSDK;


use \Exception;

class HttpClient
{
    private $apiServerUrl = 'https://gw-api.pinduoduo.com/api/router';

    private $clientId;

    private $clientSecret;

    public function __construct($clientId,$clientSecret)
    {
        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;
    }

    private function uniqueParams($request, $accessToken)
    {
        $params = $request->getSignParams();
        $params['client_id'] = $this->clientId;
        if($accessToken)
        {
            $params['access_token'] = $accessToken;
        }
        return $params;
    }

    private function toUrlParams($params)
    {
        $buff = '';
        foreach ($params as $k => $v)
        {
            if($k != 'sign' && $v != '' && !is_array($v))
            {
                $buff .= $k . $v;
            }
        }
        return $buff;
    }

    private function makeSign($params)
    {
        ksort($params);
        $string = $this->toUrlParams($params);
        $string = $this->clientSecret . $string . $this->clientSecret;
        $string = md5($string);
        $result = strtoupper($string);
        return $result;
    }

    private function postCurl($params)
    {
        $ch = curl_init();
        $curlVersion = curl_version();
        $ua = 'SDK_VERSION/1.0(' . PHP_OS . ') PHP/' . PHP_VERSION . 'CURL/' . $curlVersion['version'].' '.$this->clientId;
        curl_setopt($ch,CURLOPT_TIMEOUT,30);
        curl_setopt($ch,CURLOPT_URL,$this->apiServerUrl);
        curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
        curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,0);
        curl_setopt($ch,CURLOPT_USERAGENT,$ua);

        curl_setopt($ch,CURLOPT_HEADER,false);

        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);

        curl_setopt($ch,CURLOPT_POST,true);
        curl_setopt($ch,CURLOPT_POSTFIELDS,$params);
        $raw_response = curl_exec($ch);

        $status_code = curl_getinfo($ch,CURLINFO_HTTP_CODE);

        if($raw_response) {
            curl_close($ch);
            $response = new BaseResponse();
            $response->setStatusCode($status_code);
            $response->setBody($raw_response);
            return $response;
        } else {
            $error = curl_errno($ch);
            curl_close($ch);
            throw new SDKHttpException("curl出错，错误信息：$error");
        }
    }

    public function syncInvoke($request, $accessToken = '')
    {
        $params = $this->uniqueParams($request, $accessToken);
        $sign = $this->makeSign($params);

        $params['sign'] = $sign;

        try {
            $response = $this->postCurl($params);
        } catch (SDKHttpException $e) {
            throw $e;
        }

        return $response;
    }
}