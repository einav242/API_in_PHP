<?php
class BaseController
{

/** 
* Get querystring params. 
* 
* @return array 
*/
    protected function getQueryStringParams()
    {
        return parse_str($_SERVER['QUERY_STRING'], $query);
    }
}