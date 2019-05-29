<?php
/**
 * Created by PhpStorm.
 * User: Shinelon
 * Date: 2019/5/29
 * Time: 8:40
 */

class Math
{
	public static  function Combine($arr_A, $arr_B) {
		foreach ($arr_A as $v){
			$arr[] = $v;
		}
		foreach ($arr_B as $v){
			$arr[] = $v;
		}
//		$temp='';
		for ($i=0;$i<count($arr);$i++){
			for ($j=0;$j<count($arr)-1;$j++){
				if ($arr[$j+1]<$arr[$j]){
					$temp = $arr[$j];
					$arr[$j]=$arr[$j+1];
					$arr[$j+1]=$temp;
				}
			}
		}
		return $arr;
	}
}

$arr_A=[1,3,6,9];
$arr_B=[2,4,5,8,20];
var_dump(Math::Combine($arr_A,$arr_B));
