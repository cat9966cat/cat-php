<?php
    echo "welcome to php";
    $a="abc";
    $b="abc";
    echo "\n";
    echo '$a';   //单引号直接输出变量名
    echo "\n";
    echo "$b";  //双引号会将字符串变换为实际值
    $string="显示本行内容";
    echo <<<std
        可以输出变量，也可以输出变量值，\$string的值是:$string
std;

    //整数
    $num1=16726381890;
    $num2=0x765627819;
    $num3=01657113671;
    echo "\n".$num1;
    echo "\n".$num2;
    echo "\n".$num3;

    //浮点数
    echo "\n"."pi()=".pi();
    echo "\n".'3.1415926';
    echo "\n".'31415926E-11='.'31415926E-11';

    //数组array
    echo "\n";
    $array=array(1,2,3,4,2,5,6);
    echo $array[5];
    echo "\n";
    $array1=array(0=>1,1=>2,2=>9,3=>4);

    for ($i=0;$i<3;$i++)
        echo $array1[$i];

    echo "\n";
    echo $array1[2];
    $array2[0]="abc";
    $array2[1]="sbkcjc";
    echo "\n";
    echo $array2[0];
    echo $array2[1];

    echo "\n";
    $string1=null;
    echo "\$string1直接被赋值为null".$string1;
    $cat1=20;   //定义全局变量
    function example($num){
        $num1=10;   //局部变量
        $num=$num*$num;
        echo "\n".$num;
        echo "\n".$num1;
        global $cat1;   //在自定义函数外面的全局变量在函数内部不可用，如果使用必须要global声明才可以
        echo "\n".$cat1."\n";
    }
    example(10);
    function example1($m){
        echo "\$m= ".($m+5*6);
        echo "这是函数内部的值\n";
    }
    $m=1;
    example1($m);
    echo "\$m= ".$m."这是函数外部的值\n";

    //使用引用传参的方式来传递参数，意味着函数内部参数的变化，会影响到函数外部实参的变化
    $m=90;
    function example2(& $m){
        $m=($m+5*6);
        echo "\$m= ".$m."这是函数内部的值\n";
    }
    example2($m);
    echo "\$m= ".$m."这是函数外部的值\n";

    function values($price,$tax=0){
        $value=$price-$price*$tax;
        echo $value."\n";
        return $value;  //函数每次只能返回一个值，如果需要多个返回需要创建一个数组，将所有返回值都添加进去
    }

    $values = values(10, 0.25);  //当可选参数税率为0.25时的价值
    $values1 = values(10);  //当可选参数税率为0.25时的价值
//变量函数，通过变量来访问不同的函数
    function come($name){
        echo $name." come\n";
    }
    function go($name){
        echo $name." go\n";
    }
    function back($name){
        echo $name." back\n";
    }
    $func="come";
    $func("cat");
    $func="go";
    $func("tom");
    $func="back";
    $func("lucy");

    //第三章实践与练习
     //第一题  动态网页的特点是能够人机交互，但有时却需要限制用户的输入。使用PHP函数判断输入（这里先假定一个变量）数据是否符合下列要求：输入必须为全数字，输入数字的长度不允许超过25，并且输入不允许为空。注：获取字符串长度函数为strlen(string)

    function IsRight($input){
        if (strlen($input) <=25 && $input != null && is_numeric($input) )
            return true;
        return false;
    }

    $isRight = IsRight("5678829939");
    echo $isRight."\n";

    $isRight = IsRight("58efbjsd989");
    echo $isRight."\n";


    //第二题 获取当前访问者的计算机信息，如IP、端口号等
    //预定义变量

    echo "当前代码的行数是:".__LINE__."\n";
    echo "当前文件名称是:".__FILE__."\n";
    echo "当前运行脚本的服务器ip地址是:";
    var_dump($_SERVER['SERVER_ADDR']);
    echo "当前运行脚本的服务器名称是:";
    var_dump($_SERVER['SERVER_NAME']);

    //第三题 PHP的输出语句有echo、print、printf、print_r。尝试使用这4个语句输出数据，看它们之间有什么不同。
    echo  "hello cat\n";
    print "hello cat\n";
    print_r("hello cat\n");
    printf("%d %s",189,"hello cat\n");



