<?php

// 単位変換
function number_unit($int)
{
    $unit = array('万','億','兆','京');
    krsort($unit);

    if (is_numeric($int)) {
        $tmp = '';
        $count = strlen($int);
        foreach ($unit as $k => $v) {
            if ($count > (4 * ($k + 1))) {
                if ($int!==0) {
                    $tmp .= number_format(floor($int /pow(10000, $k+1))).$v;
                }
                $int = $int % pow(10000, $k+1);
            }
        }
        if ($int!==0) {
            $tmp .= number_format($int % pow(10000, $k+1));
        }
        return $tmp;
    } else {
        return false;
    }
}

// 新着物件取得
function get_build_data($page)
{
    $url = 'http://officebank-p.com/api/v1/room/new?page='.$page;
    $json = file_get_contents($url);
    $json = mb_convert_encoding($json, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
    $arr = json_decode($json, true);
    return $arr;
}

// 検索条件(全て)
function search_build_data($page = 1, $max = 100000, $min = 0, $detailed = 0, $area = '')
{
    $url = 'https://officebank-p.com/api/v1/room/search?page='.$page.'&rent1='.$min.'&rent2='.$max;
    if ($area !== '') {
        $url .= '&area='.$area;
    }
    if ($detailed !== 0) {
        $url .= '&preferences='.(int)$detailed;
    }
    $json = file_get_contents($url);
    $json = mb_convert_encoding($json, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
    $arr = json_decode($json, true);
    return $arr;
}

function set_area($sort)
{
    switch ($sort) {
        case '新着':
            $area = '';
            break;
        case '丸の内':
            $area = '丸の内：marunouchi';
            break;
        case '伏見駅':
            $area = 'fushimi';
            break;
        case '栄駅':
            $area = 'sakae';
            break;
        case '名古屋駅':
            $area = 'nagoyast';
            break;
        case '久屋大通駅':
            $area = 'hisaya';
            break;
        case '金山駅':
            $area = 'kanayama';
            break;
        case 'その他':
            $area = 'other';
            break;
        default:
            $area = '';
            break;
    }
    return $area;
}

// 物件ページ送り
function pager($c = 1, $t, $parameter = '')
{
    $current_page = $c;
    $total_rec = $t;
    $page_rec = 12;
    $total_page = ceil($total_rec / $page_rec);
    $show_nav = 5;
    $path = '?pages=';

    if ($total_page < $show_nav) {
        $show_nav = $total_page;
    }
    if ($total_page <= 1 || $total_page < $current_page) {
        return;
    }
    $show_navh = floor($show_nav / 2);
    $loop_start = $current_page - $show_navh;
    $loop_end = $current_page + $show_navh;
    if ($loop_start <= 0) {
        $loop_start  = 1;
        $loop_end = $show_nav;
    }
    if ($loop_end > $total_page) {
        $loop_start  = $total_page - $show_nav +1;
        $loop_end =  $total_page;
    } ?>
    <div class="pagination">
        <ul>
            <?php
            if ($current_page > 2) {
                echo '<li class="prev"><a href="'. $path .'1'.$parameter.'">&laquo;</a></li>';
            }
    if ($current_page > 1) {
        echo '<li class="prev"><a href="'. $path . ($current_page-1).$parameter.'">&lsaquo;</a></li>';
    }
    for ($i=$loop_start; $i<=$loop_end; $i++) {
        if ($i > 0 && $total_page >= $i) {
            if ($i == $current_page) {
                echo '<li class="active">';
            } else {
                echo '<li>';
            }
            echo '<a href="'. $path . $i.$parameter.'">'.$i.'</a>';
            echo '</li>';
        }
    }
    if ($current_page < $total_page) {
        echo '<li class="next"><a href="'. $path . ($current_page+1).$parameter.'">&rsaquo;</a></li>';
    }
    if ($current_page < $total_page - 1) {
        echo '<li class="next"><a href="'. $path . $total_page.$parameter.'">&raquo;</a></li>';
    } ?>
        </ul>
    </div>
    <?php
}

// 物件詳細取得
function get_property_detail($id)
{
    $url = 'http://officebank-p.com/api/v1/room/'.$id;
    $json = file_get_contents($url);
    $json = mb_convert_encoding($json, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
    $arr = json_decode($json, true);
    return $arr;
}