<?php
global $init_ary, $tag_x, $tag_y;
$init_ary=array_fill(0,4,[0,0,0,0,0,0]);
$tag_x = 1;
$tag_y = 2;
$total = 0;
system("clear");
echo "total=".$total."\n";
rander();//渲染原始矩阵
system("clear");
for($i_step = 0; $i_step < 4; $i_step++){
    for($j_step = 0; $j_step < 6 ; $j_step++){
        if($i_step == $j_step){//不要方形
            continue;
        }
        for($i = 0; $i < 4; $i++){
            $get_ary = [];
            for($j = 0; $j < 6; $j++){
                if($j + $j_step < 6 && $i + $i_step < 4){//判断越界
                    //判断是否有黄点
                    $get_ary["x"] = range($i, $i + $i_step);
                    $get_ary["y"] = range($j, $j + $j_step);
                    if(!in_array($tag_x,$get_ary["x"]) || !in_array($tag_y,$get_ary["y"])){
                        system("clear");
                        $total++;
                        echo "total=".$total."\n";
                        rander($get_ary);
                    }
                }
            }
        }
    }
}
function rander($get_ary = []){
    global $init_ary, $tag_x, $tag_y;
    foreach($init_ary as $key=>$val){
        foreach($val as $k=>$v){
            if(count($get_ary)!=0&&in_array($key,$get_ary["x"]) && in_array($k,$get_ary["y"])){
                echo "\033[37;5;1m▆\033[0m  ";
                continue;
            }
            if($key == $tag_x && $k == $tag_y){
                echo "\033[33;5;1m▆\033[0m  ";
            }else{
                echo "\033[32;5;1m▆\033[0m  ";
            }
        }
        echo "\n";
    }
    usleep(200000);
}
?>