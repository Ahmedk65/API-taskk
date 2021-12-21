<?php

if ( !isset($_SERVER [ 'PHP_AUTH_USER' ]))
{
    header ("WWW-Authenticate: Basic realm=\"Private Area\"");
    header ("HTTP/1.0 401 Unauthorized");
    print "Sorry, you need proper credendtials";
    exit;
}
else
{
    if (($_SERVER['PHP_AUTH_USER'] == 'bill' && ($_SERVER['PHP_AUTH_PW'] == '0000')))
    {
        print "You are in the private area";
    }
    else
    {
        header ("WWW-Authenticate: Basic realm=\"Private Area\"");
    header ("HTTP/1.0 401 Unauthorized");
    print "Sorry, you need proper credendtials";
    }
}
?>