<?php
    header('Content-Type:text/html/php;charset=utf-8');
    //单行注释
    /*
     * 文档注释
     */

    /*    echo "你好";   多行注释
        echo "hello cat";*/
    echo "welcome to php" . PHP_EOL;
    $a = 20;

    echo $a;

    $str = "字符串";

    echo "\n";
    echo $str;

    $str1 = '字符串';
    echo "\n";
    echo "$str1";
    echo <<<std
    \n你好，这个与双引号没有使么区别，\$str依然会被输出。
    \$str的内容是：$str
std;




