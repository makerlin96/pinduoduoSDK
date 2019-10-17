<?php


namespace makerlin\pinduoduoSDK\request;


use makerlin\pinduoduoSDK\BaseRequest;

class PddDdkFinanceCpaQueryRequest extends BaseRequest
{

    private $dateEnd;

    private $dateStart;

    private $pid;

    private $sourceType;

    /**
     * @param mixed $pid
     */
    public function setPid($pid)
    {
        $this->pid = $pid;
    }

    /**
     * @param mixed $dateEnd
     */
    public function setDateEnd($dateEnd)
    {
        $this->dateEnd = $dateEnd;
    }

    /**
     * @param mixed $dateStart
     */
    public function setDateStart($dateStart)
    {
        $this->dateStart = $dateStart;
    }

    /**
     * @param mixed $sourceType
     */
    public function setSourceType($sourceType)
    {
        $this->sourceType = $sourceType;
    }

    protected function getType()
    {
        // TODO: Implement getType() method.
        return 'pdd.ddk.finance.cpa.query';
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
            'date_end' => $this->dateEnd,
            'date_start' => $this->dateStart,
            'pid' => $this->pid,
            'source_type' => $this->sourceType
        ];
        return array_filter($params);
    }
}