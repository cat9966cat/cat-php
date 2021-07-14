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
        echo "用户密码长度不得小于6位，请重新输入.\n";
    }

    //截取指定位置的字符串
    $str="祝全国人民新春快乐，万事如意，阖家欢乐，再创新高，一帆风顺，二龙戏珠，三国开泰，司马平川";
    if (mb_strlen($str) >= 30){
        echo substr($str,0,30).".....\n";
    }else{
        echo $str."\n";
    }

    //字符串比较函数,相等返回0，小于返回负数，大于返回正数
    //1、按照字节进行比较 strcmp区分大小写，strcasecmp()不区分大小写
    echo "不区分大小写是比较字符串是否相等:".strcasecmp("123abc", "123ABC")."\n";  //0
    echo "区分大小写的比较:".strcmp("123abc","123ABC")."\n"; //32

    //2、按照自然排序法对字符串进行比较
    //strnatcmp()实现自然排序法的比较,区分字母大小写
    //strnatcasecmp不区分大小写
    echo "自然排序法进行比较,区分大小写:".strnatcmp("123abc","123ABC")."\n"; //1
    echo "自然排序法进行比较，不区分大小写:".strnatcasecmp("123abc","123ABC")."\n";  //0

    //3、指定从源字符串的位置开始比较
    //strncmp() 区分大小写
    echo "从源字符串的位置2开始比较，区分大小写:".strncmp("abcgdsc","ABCGDSC",2)."\n";  //32
    echo "从源字符串的位置2开始比较，不区分大小写:".strncasecmp("sbcdhiscbksdcguwbcsj","snkcuhwoiscbksksjcbabDGGVC",8)."\n";  //-12

    //strstr（str1，str2）从前面字符串开头开始检索，搜索字符串  ,区别大小写
    //可以用于判断图片文件的后缀名，如果不合法，可以进行拦截
    $str1="我是猫猫";
    $str2="猫猫";
    echo strstr($str1, $str2)."\n";

    //strrchr（）从字符串后面开始检索搜索字符串
    //  substr_count()同于检索子串出现的次数
    $str1="我是猫猫，猫猫是我，我爱猫猫";
    $str2="猫猫";
    echo "猫猫出现的次数为：".substr_count($str1,$str2)."\n";


    //替换字符串str_ireplcae()，使用新的子串替换原来的字符串,不区分大小写
    //替换字符串str_replcae()，使用新的子串替换原来的字符串,区分大小写
    echo "将猫猫全部替换为cat:".str_ireplace($str2,"cat",$str1)."\n";  //有一个可选参数count，要被替换的次数，默认全部替换

    //字符串的替换功能一般用于在搜索引擎中将搜索到的关键字标红输出，供用户查看
    //实现一个将关键字标红的方法;
    function SetRedKey($str,$key){
        echo str_ireplace($key,"<font color='#FF0000'>".$key."</font>",$str)."\n";   //将搜索到的key替换为红色
    }
    SetRedKey($str1,$str2);

    //substr_replace()函数,用于将指定字符串中的指定位置的部分字符串进行替换
    echo "将最后面的猫猫，替换成喵喵:".substr_replace($str1,"喵喵",-6)."\n";

    //格式化字符串
    //数字字符串的格式化number_format()
    $num=17289.738472901;
    echo "格式化数字:".number_format($num,3)."\n";  //$num表示要被格式化的数字，3表示小数点后的位数，还有两个默认参数，一个表示小数点的字符，一个表示千分位的字符.



    echo "你好<br>猫猫"."\n";

    //分割、合成字符串explode()  按照指定规则进行划分，最后返回一个数组
    //explode(delimer 边界分割字符，str，被分割字符串，limit（int）到指定返回数组中的元素个数,最后一个数组包含剩余所有字符，如果为负数，返回除了最后的-limit元素外的所有元素，如果limit为0，会被当做1)
    $str="你好啊@hello@我是猫猫@我来学习php啦，@开心";
    $explode = explode("@", $str);
    print_r($explode);  //直接打印数组，输出的是一个数组列
    echo $explode[0]."\n";  //只能输出元素
    //合成字符串implode(glue,指定合成字符串中间的连接符，array strs :要被合并的字符串数组);
    $implode = implode("%", $explode);
    print_r($implode);
    echo "\n";


    //第五章 实践与练习
    //1、尝试开发一个页面，去除字符串“&&　明日编程词典　&&”首尾空格和特殊字符“&&”。
    $str="&& 明日编程词典 &&";
    $trim = trim($str, "&&  ");
    echo trim($trim)."\n";

    //2、尝试开发一个页面，验证用户输入的身份证号长度是否正确。
    $id_number="1763t81798934681928318";
    if (strlen($id_number) != 18)
        echo "请输入正确的身份证号\n";
    else
        echo "欢迎\n";

    //3、尝试开发一个页面，对检索到的用户输入的查询关键字进行加粗描红。
    $str="我是猫猫，我爱猫猫，猫猫爱我";
    $str1="喵喵";
    $str_ireplace = str_ireplace("猫猫", "<font color='#FF0000'>".$str1."</font>", $str);
    echo $str_ireplace."\n";
    //4．尝试开发一个页面，使用explode()函数对全国各省会名称以逗号进行分割
    $str="甘肃省,湖北省,陕西省,山西省,广东省,河南省,河北省";
    $explode1 = explode(",",$str);
    print_r($explode1);
    echo "\n";














