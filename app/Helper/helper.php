<?php

namespace App\Helper;

use Illuminate\Support\Facades\URL;
use DB;
use Exception;

use App\User;
use Auth;
use DateTime;
use Mail;
use Session;

class Helper
{


    public static function getCustomerID($id)
    {
        $result = date('Y') . '-';

        for ($i = 0; $i < 5 - strlen($id); $i++) $result .= '0';

        $result .= $id;

        return $result;
    }


    public static function getOrderNumber($order_id)
    {
        $order_number = '#';

        for ($i = 0; $i < 7 - strlen($order_id); $i++) $order_number .= '0';

        $order_number .= $order_id;

        return $order_number;
    }
}
