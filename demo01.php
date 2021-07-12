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

    $num0=0x1234567890;  //十六进制
    $num1=1234567890;   //十进制

    echo "数字1234567890的不同输出结果\n";
    echo "$num0\n";
    echo "$num1\n";

    $array=array(1,2,3,4);
    $array1[0]=3;
    $array2=array(0=>1, 1=>2,2=>3);
    for ($i=0;$i<4;$i++)
        echo $array[$i];

    $str2=null;   //赋值为控制
    $str3=$str1;
    echo "$str2\n";
    if (!isset($str2))  //判断是否被设置
        echo "str2=null\n";
    else
        echo "str2未被赋值";

    echo "$str3\n";  //未被unset之前
    unset($str3);    //对str3进行unset，其实也就是null
   // echo  "$str3";  //Undefined variable '$str3' ,当unset之后，这个变量就不存在了






