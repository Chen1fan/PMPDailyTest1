<?php
/**
 * Created by PhpStorm.
 * User: Shinelon
 * Date: 2019/5/15
 * Time: 8:41
 */

class math
{
	public static function order_array($arr){
		for ($i=0;$i<count($arr);$i++){
			//循环判断每一个元素
			if ($arr[$i]%2!=0){
				//所有奇数放入数组a
				$a[] = $arr[$i];
			}else{
				//所有偶数放入数组b
				$b[] = $arr[$i];
			}
		}
		//合并数组，并返回结果
		return array_merge($a,$b);
	}
}
$arr = [1,2,3,4,5,6];
print_r(math::order_array($arr));