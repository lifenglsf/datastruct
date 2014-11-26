<?php
Class Find{
	private $isFind = FALSE;
	public function __construct(){

	}

	//监视哨查找
	public function monitorFind($source,$needle){
		array_unshift($source, $needle);
		for($i=count($source)-1;$i>=0;$i--){
			if($source[$i] == $needle){
				$key = $i;
				$this -> isFind = TRUE;
				break;
			}
		}
		if($this -> isFind ===FALSE || $key == 0){
			echo "监视哨查找未找到".$needle."元素";
		}else{
			echo "监视哨查找找到元素".$needle."为第".($i)."个位置";
		}

	}

	//二分法查找，假设数据为已经排序过得
	public function halfFind($source,$needle){
		$len = count($source);
		$low = 1;
		$high = $len;
		while ($low<=$high) {
			$mid = intval(($low+$high)/2);
			if($source[$mid] == $needle){
				echo "二分法查找找到".$needle."为第".($mid+1)."个位置";
				$this -> isFind = TRUE;
				break;
			}elseif($source[$mid] < $needle){
				$low = $mid + 1;
			}else{
				$high = $mid - 1;
			}
		}
		if($this -> isFind == FALSE){
			echo "二分法查找未找到".$needle."元素";
		}
		
		

	}
}
$find = new Find();
$find ->monitorFind(array(1,2,3,4,5),2);
//执行结果：
//监视哨找到元素2为第2个位置

$find ->halfFind(array(1,2,3,4,5),2);
//执行结果：
//找到元素2为第2个位置

