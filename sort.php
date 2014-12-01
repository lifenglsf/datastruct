<?php
header("content-type:text/html;chaset=utf8");
class sort{
	/*
*@author 李峰
*@param <array> $arr
*@return <array>
*直接插入排序
*/
public function directInsertSort($arr){
	$len = count($arr);
	for($i=1;$i<=$len-1;$i++){
		
	}
	return $arr;
}

	/*
*@author 李峰
*@param <array> $arr
*@return <array>
*希尔排序
*/
public function xillSort($arr){
	$len = count($arr);
	for($i=0;$i<=$len-1;$i++){
		for($j=$i+1;$j<$len;$j++){
			if($arr[$i] > $arr[$j]){
				$temp = $arr[$i];
				$arr[$i] = $arr[$j];
    				$arr[$j] = $temp; 
			}
		}
	}
	return $arr;
}

/*
*@author 李峰
*@param <array> $arr
*@return <array>
*冒泡排序
*/
public function bubbleSort($arr){
	$len = count($arr);
	for($i=0;$i<=$len-1;$i++){
		for($j=$i+1;$j<$len;$j++){
			if($arr[$i] > $arr[$j]){
				$temp = $arr[$i];
				$arr[$i] = $arr[$j];
    				$arr[$j] = $temp; 
			}
		}
	}
	return $arr;
}
/*
*@author 李峰
*@param <array> $arr
*@return <array>
*快速排序
*/
public function quickSort($arr){
	$len = count($arr);
	if($len > 1){
		$key = $arr[0];
		$low = array();
		$high = array();
		for($i=1;$i<$len;$i++){
			if($arr[$i] > $key){
				$high[] = $arr[$i];
			}else{
				$low[] = $arr[$i];
			}
		}
		$high = $this -> quickSort($high);//比轴大的数据排序
		$low = $this -> quickSort($low);//比轴小的数据排序
		return array_merge($low,array($key),$high);
		
	}
	return $arr;
}
/*
*@author 李峰
*@param <array> $arr
*@return <array>
*简单选择排序
*/
public function simpleSelectSort($arr){
	$len = count($arr);
	$k = 0;
	for($i =0 ;$i<$len;$i++){
		$k = $i;
		for($j=$i+1;$j<$len;$j++){
			if($arr[$k] > $arr[$j]){
				$k = $j;//交换最小位置
			}
		}
		if($k != $j){//取得最小值
			$temp = $arr[$i];
			$arr[$i] = $arr[$k];
			$arr[$k] = $temp;
		}
			

		
	}
	return $arr;
}
}
$sort = new sort();
echo "输入数据12,35,36,10,8,90,83.95,28,74十个数据<br/>";
$bubble = $sort -> bubbleSort(array(12,35,36,10,8,90,83,95,28,74));
echo "冒泡排序的结果为:".implode(',', $bubble)."<br/>";
$quick = $sort -> quickSort(array(12,35,36,10,8,90,83,95,28,74));
echo "快速排序的结果为:".implode(',', $quick)."<br/>";
$simpleSelectSort = $sort -> simpleSelectSort(array(12,35,36,10,8,90,83,95,28,74));
echo "简单选择排序的结果为:".implode(',', $simpleSelectSort)."<br/>";

/**
*运行结果
*输入数据12,35,36,10,8,90,83.95,28,74十个数据
*冒泡排序的结果为:8,10,12,28,35,36,74,83,90,95
*快速排序的结果为:8,10,12,28,35,36,74,83,90,95
*简单选择排序的结果为:8,10,12,28,35,36,74,83,90,95
*
*/
