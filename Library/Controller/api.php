<?php
/**
 * Created by PhpStorm.
 * User: touko
 * Date: 16-8-25
 * Time: 上午12:32
 */

namespace Controller;

use Core\Template;

class api{
    /**
     * @DynamicRoute /api/encrypt/{string}
     * @param $pass
     */
    function dynamicRouteTest($pass)
    {
        echo $pass;
    }

}
