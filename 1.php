<?php 
    //获取字符串中出现三次的字符

	$str='Have you ever gone shopping and';

    function get($str){
        $len=strlen($str);
        $arr =[];
        for ($i=0; $i < $len; $i++) { 
            if (isset($arr[$str[$i]])) {
                $arr[$str[$i]]++;
            }else{
                $arr[$str[$i]]=1;
            }
            if ($arr[$str[$i]] >= 3) {
                return $str[$i];
            }
        }
        return $arr;
    }
    echo get($str);

    echo "<br><br>";

    
    $str="Hello world lt's a beautiful day";
    $arr=explode(" ",$str);     //将字符串转成数组
    print_r($arr);

    echo "<br><br>";

    $array="(1234567890)";
    $arr="(";
    $arr .=substr($array, 1,1).',';
    $arr .=substr($array, 2,3).',';
    $arr .=substr($array, 5,3).',';
    $arr .=substr($array, 8,3);
    $arr .=")";
    print_r($arr);

    echo "<br><br>";

    $db = new PDO("mysql:host=127.0.0.1;dbname=gg;charset=utf8",'root','root');
    $res=$db->query("select * from price")->fetchAll(PDO::FETCH_ASSOC);
    print_r($res);

 ?>