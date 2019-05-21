<?php
/**
 * Created by PhpStorm.
 * User: Shinelon
 * Date: 2019/5/21
 * Time: 8:37
 */

class math
{
	public static function FindNumsAppearOnce($array){
		//统计数组中元素出现的次数
		$arr = array_count_values($array);
		//循环遍历，将出现的一次的元素放入新数组
		foreach ($arr as $key=>$v){
			if ($v==1){
				$arr1[] = $key;
			}
		}
		return $arr1;
	}
}
$array = [2,4,3,6,3,2,5,5];
print_r(math::FindNumsAppearOnce($array));