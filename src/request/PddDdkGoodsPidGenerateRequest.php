<?php


namespace makerlin\pinduoduoSDK\request;


use makerlin\pinduoduoSDK\BaseRequest;

class PddDdkGoodsPidGenerateRequest extends BaseRequest
{
    private $number;

    private $pIdNameList;

    /**
     * @param mixed $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }

    /**
     * @param mixed $pIdNameList
     */
    public function setPIdNameList($pIdNameList)
    {
        $this->pIdNameList = $pIdNameList;
    }

    protected function getType()
    {
        // TODO: Implement getType() method.
        return 'pdd.ddk.goods.pid.generate';
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
            'number' => $this->number,
            'p_id_name_list' => $this->pIdNameList
        ];
        return array_filter($params);
    }
}