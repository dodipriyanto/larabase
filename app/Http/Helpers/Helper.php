<?php

use App\Models\Menu;

function get_breadcrumbs($url)
{
    $route = collect(\Route::getRoutes())->first(function ($route) use ($url) {
        return $route->matches(request()->create($url));
    });

    if (filled($route))
    {
        $route_name = $route->action['as'];
        $menu = Menu::withTrashed()->with('parent')->where('route_name', '=', "$route_name")->first();
        return $menu;
    }
}

function setTagColor($param)
{
    $color = '';
    switch ($param) {
        case 'URGENT':
        case 'OPEN':
            $color = 'danger';
            break;
        case 'LOW':
        case 'CLOSE' :
            $color = 'success';
            break;
        case 'MEDIUM':
        case 'PROCESS' :
            $color = 'warning';
            break;
        default :
            $color = 'danger';
    }
    return $color;
}

function getPagesAccess($current_path)
{
    $group_menu = \Illuminate\Support\Facades\Auth::user()->group()->with('group_menu')->first()->group_menu;
    $data = searchForRouteName($current_path, $group_menu);

    if ($data->is_addable == 1)
    {
        echo '<button type="button" class="btn round btn-info btn-min-width mr-2 mb-1 text-center text-bold pull-right addModal" ><i class="la la-plus-circle"></i>
                                ADD</button>';
    }else{
        echo '';
    }
}

function pg2form_date($tgl) {
    $date = date_create($tgl);
    return date_format($date, "d-m-Y");
}

function format_interval(DateInterval $interval) {
    $result = "";
    if ($interval->y) { $result .= $interval->format("%y years "); }
    if ($interval->m) { $result .= $interval->format("%m months "); }
    if ($interval->d) { $result .= $interval->format("%d days "); }
    if ($interval->h) { $result .= $interval->format("%h hours "); }
    if ($interval->i) { $result .= $interval->format("%i minutes "); }
    if ($interval->s) { $result .= $interval->format("%s seconds "); }

    return $result;
}


function pg2form_word($tgl) {
    $date = date_create($tgl);
    switch (date_format($date, "n")) {
        case 1:
            $bln = ' Januari ';
            break;
        case 2:
            $bln = ' Februari ';
            break;
        case 3:
            $bln = ' Maret ';
            break;
        case 4:
            $bln = ' April ';
            break;
        case 5:
            $bln = ' Mei ';
            break;
        case 6:
            $bln = ' Juni ';
            break;
        case 7:
            $bln = ' Juli ';
            break;
        case 8:
            $bln = ' Agustus ';
            break;
        case 9:
            $bln = ' Sepetember ';
            break;
        case 10:
            $bln = ' Oktober ';
            break;
        case 11:
            $bln = ' November ';
            break;
        case 12:
            $bln = ' Desember ';
            break;
    }
    return date_format($date, "d") . $bln . date_format($date, "Y");
}

function number_to_alphabet($number) {
    $number = intval($number);
    if ($number <= 0) {
        return '';
    }
    $alphabet = '';
    while($number != 0) {
        $p = ($number - 1) % 26;
        $number = intval(($number - $p) / 26);
        $alphabet = chr(65 + $p) . $alphabet;
    }
    return $alphabet;
}

function alphabet_to_number($string) {
    $string = strtoupper($string);
    $length = strlen($string);
    $number = 0;
    $level = 1;
    while ($length >= $level ) {
        $char = $string[$length - $level];
        $c = ord($char) - 64;
        $number += $c * (26 ** ($level-1));
        $level++;
    }
    return $number;
}



function searchForRouteName($id, $array) {
    foreach ($array as $key => $val) {
        if ($val['route_name'] === $id) {
            return $val->pivot;
        }
    }
    return null;
}


function removeSpace(array $data)
{
    $result = [];
    foreach ($data as $datum => $val)
    {
        $result[strtolower(str_replace(' ','', $datum))] = $val;
    }

    return $result;

}

?>
