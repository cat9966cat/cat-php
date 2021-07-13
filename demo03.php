<?php
//第四章练习
/*    $num=rand(1,67);
    if ($num % 2 == 0)
        echo "\$num是偶数:".$num."\n";
    echo "<br>\$num是奇数:".$num."\n";*/

    //switch

    //获取超链接传递的变量
    //switch可以用来设计网站的布局，将网站头、尾文件设置为固定的区域，导航条也作为固定的区域，在显示区中根据超链接中传递的织补同，显示不同的内容
    switch (isset($_GET['lmbs'])?$_GET['lmbs']:" "){
        case "最新内容": echo "最新内容部分\n";break;
        case "顶部":"页面置顶部分\n"; break;
        case "版权":"页面尾部\n"; break;
        default:echo "默认页面\n";break;
    }
    //循环控制结构
    $num=1;
    while ($num <= 10){
        if ($num % 2 ==0){
            echo "\$num是偶数".$num."\n";
            $num+=1;
        }else
            $num+=1;
    }

    //do ... while
    $num=1;
    while ($num != 1){   //条件为假时，
        echo "while循环";  //不会输出
    }
    do{
        echo "do...while循环";  //会输出
    }while($num != 1);

    //for循环计算100的阶乘
    $sum=1;
    for ($i=1;$i<=100;$i++){
        $sum*=$i;
    }
    echo "\n100!=".$sum."\n";

    //break和continue都可以指定跳出几层循环，break跳出循环，continue时跳出当前循环

    //第四章 实践与练习
    //第一题 使用循环语句输出任意一个二维数组
    $arr1=array(1,2,3,4);
    $arr2=array(3,4,1,5);
    $array=array($arr1,$arr2);
    foreach ($array as $value){
        foreach ($value as $key)
            echo $key."\t";
        echo "\n";
    }

    //第二题 输出杨辉三角,
    //首先创建一个杨辉三角的数组保存数据，接下来在进行输出
    $array[0]=array(1);
    $array[1]=array(1,1);
    for ($i=2;$i<10;$i++){
        $arraysolo=array();
        $arraysolo[0]=1;
        for ($j=1;$j<$i;$j++){
            $arraysolo[$j]=$array[$i-1][$j-1]+$array[$i-1][$j];
        }
        $arraysolo[$i]=1;
        $array[$i]=$arraysolo;
    }
    //输出杨辉三角
    foreach ($array as $value){
        foreach ($value as $key)
            echo $key."\t";
        echo "\n";
    }

    //使用while循环和预定义变量，获取多个参数。参数的个数未定，如：http://localhost/1.php?name=tm&password=111&date=20080424&id=1…。

    $url="http://localhost/1.php?name=tm&password=111&date=20080424&id=1";
    $test=pathinfo($url);
    print_r($test);



