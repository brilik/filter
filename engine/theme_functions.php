<?php

function the_view($view_name, $args = [])
{
    $t = new engine\Theme(1.0);
    $t->the_view($view_name, $args);
    unset($t);
}

function get_product($url = '')
{
    global $wpdb;
    
    // create request to db
    $where = get_param();
    
    return $wpdb->get_results("SELECT * FROM `{$wpdb->prefix}products` WHERE $where ORDER BY `title` ASC;");
}

function get_param()
{
    $url = json_encode($_SERVER['REQUEST_URI']); // remove
    
    // get array param
    $uqp = parse_url($url, PHP_URL_QUERY);
    parse_str($uqp, $res);
    unset($uqp);
    
    $where = (string)'';
    
    foreach ($res as $k => $i) {
        $str = explode(',', $i);
        
        foreach ($str as $key => $item) {
            if ($k === 'price_basic') {
                $price = preg_replace('/%22/', '', urlencode($item));
                $price = preg_replace('/%3A/', ':', $price);
                if (preg_match('/-/', $price)) {
                    $price = ' < ' . preg_replace('/-/', '', $price);
                } elseif (preg_match('/\+/', $price)) {
                    $price = ' > ' . preg_replace('/\+/', '', $price);
                } elseif (preg_match('/:/', $price)) {
                    $price = ' BETWEEN ' . preg_replace('/:/', ' AND ', $price);
                }
                $str[$key] = '`' . $k . '`' . $price;
            } else {
                $str[$key] = "`{$k}` = '{$item}'";
            }
        }
        
        $str = implode(' OR ', $str);
        
        $where .= "({$str})";
        
        if ($res[$k] != end($res)) {
            $where .= ' AND ';
        }
    }
    
    unset($res);
    
    return $where;
}