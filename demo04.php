<?php
//字符串函相关函数
    //使用trim过滤非法字符
    $str="  \r\r(:@_@ 双图书文学伟业  驿站行风 @_@:)";
    echo trim($str)."\n";  //去除两边的空格,默认情况下\r等制表符回车符都会被去除
    echo trim($str,"\r\r(: :)")."\n";  //去除两边的特殊字符
    //ltrim
    //rtrim

    //字符串的转义
    //对于简单字符串进行手动转义，如果是复杂字符串就进行自动转转义。
    $str="ksdbciuwusnl's'c]q.;'";
    $addslashes = addslashes($str);
    echo "转义后的字符串:".$addslashes."\n";//其实就是给原来的特殊字符前面全部加了\
    $stripcslashes = stripcslashes($addslashes);
    echo "还原后的字符串:".$stripcslashes."\n";

    //对于字符串中的置指定字符进行转义
    $str="姐就是女王";
    $addcslashes = addcslashes($str, "姐就是女王");  //对其进行转义
    echo $addcslashes."\n";
    $stripcslashes1 = stripcslashes($addcslashes);  //对转义后的字符串进行还原
    echo $stripcslashes1."\n";
    $strlen = strlen($str);
    echo "字符串为:".$str."\n";
    echo "字符串的长度为:".$strlen."\n";  //15  在utf-8的编码集情况下，一个字符占三个字节，因此需要mb_strlen来准确地获取字符串的长度，尤其在中英文混排的情况下
    echo "字符串的长度为:".mb_strlen($str)."\n";  //5
    $str="bcksn你好，猫猫";
    echo "字符串为：".$str."\n";
    echo "字符串长度为：".strlen($str)."\n";
    echo "字符串长度为:".mb_strlen($str)."\n";

    //一个小案例，对用户输入的密码长度进行校验，密码长度小于6，否则弹出提示信息
    $password="abjchn";
    if (strlen($password) < 6){
        echo "密码长度必须大于等于6\n";
    }




