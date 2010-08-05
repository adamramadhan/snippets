<?php
/** 
 * get_request.php
 * from www.something.com/something.php?key=value to $request[key] = value;
 * @copyright	Copyright (c) 2009-2010 DAMSnetworks INDONESIA.
 * @author		Adam Ramadhan at adamramadhan@live.com
 * @version		2010-08-05 at 22:55:10
 */

function request() 
{
    $url_query = parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY);
    $request = array();
    parse_str($url_query, $request);
    
    return $request;
}
?>
