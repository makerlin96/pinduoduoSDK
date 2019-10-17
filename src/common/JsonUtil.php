<?php


namespace pinduoduoSDK\common;


class JsonUtil
{
    public static function parseDoc($doc)
    {
        $pattern = '/@JsonProperty\(([\w|\<|\>|\\\\]+),[\s?]\"(\w+)\"\)/i';
        preg_match($pattern, $doc, $matches);
        if ($matches && count($matches) == 3) {
            return array($matches[1], $matches[2]);
        } else {
            return NULL;
        }
    }
}