<?php
header("content-type:text/html;chaset=utf8");
class linearList{
	private $sequenceTable;
	private $MAXSIZE=10;
	private $error;
	private $succeMsg = array();
	private $length;
	public function __construct($size = 0){
		if(!empty($size) &&($size > 0)){
			$this -> initList();
			for($i=0;$i<$size;$i++){
				$item = mt_rand(1,1000);//生成一个随机数;
				$this -> listInsert(($i+1),$item);
			}
			
			
		}
	}

	function getTable(){
		return $this -> sequenceTable;
	}
	//初始化线性表
	function initList(){
		$this -> sequenceTable = array();
		$this -> length = 0;
	}
	//销毁线性表
	function destroyList(){
		$this -> sequenceTable = null;
		$this -> length = 0;
	}

	function clearList(){
		$this -> sequenceTable = array();
		$this -> length = 0;
	}
	function ListEmpty(){
		if(!is_array($this -> sequenceTable)){
			echo "线性表不存在";
			exit;
		}else{
			if(empty($this -> sequenceTable)){
				return TRUE;
			}else{
				return FALSE;
			}
		}
	}


	function listLength(){
		if(is_array($this -> sequenceTable)){
			return $this -> length;
		}
	}

	function getElem($pos){
		if($pos > $this -> length || $pos <0){
			echo "溢出";
			exit ;
		}else{
			return $this -> sequenceTable[$pos];
		}
	}

	function LocateItem(){

	}

	function PriorElem($pos){
		if($pos>$this -> length || $pos < 1 ){
			echo "溢出";
			exit;
		}else{
			return $this -> sequenceTable[$pos -1];
		}
	}

	function NextElem($pos){
		if($pos >= $this -> length || $pos < 0){
			echo "溢出";
			exit;
		}else{
			return $this -> sequenceTable[$pos+1];
		}
	}

	function listInsert($pos,$data){
		if($pos < 1 || $pos > $this -> length+1){
			echo "溢出";
			exit;
		}
		if($this -> length == 0){
			$this -> sequenceTable = array($data);
		}else{
			
			for($i=$this -> length;$i>=$pos;$i--){
				$this -> sequenceTable[$i] = $this -> sequenceTable[$i-1];
			}
			$this -> sequenceTable[$pos-1] = $data;
		}
		$this -> length++;

		return $this -> sequenceTable;
	}
	function listDelete($pos){
		if($pos > $this -> length || $pos < 1){
			echo "溢出";
			exit;
		}
		if(isset($this -> sequenceTable)&&(is_array($this -> sequenceTable))){
			if($i == $this -> length){
				unset($this -> sequenceTable[$pos-1]);
			}else{
				for($i=$pos;$i<$this -> length;$i++){
					$this -> sequenceTable[$i-1] = $this -> sequenceTable[$i];
				}
				unset($this -> sequenceTable[$this -> length-1]);
			}
			
		}
		$this -> length--;
		return $this -> sequenceTable;
	}

	function listSearch($data){
		$isFind = FALSE;
		for($i = 0;$i < $this -> length; $i++){
			if($this-> sequenceTable[$i] == $data){
				echo "查找到元素".$data."位于线性表的第".($i+1).'的位置<br/>';
				return $i;
				break;
			}
		}
		if($this -> isFind == FALSE){
			echo "线性表中不存在元素".$data."<br/>";
			return 0;
		}
	}
	function listTraverse(){

	}

	
}


$obj = new linearList();
//创建10个元素的线性表
$obj = new linearList(10);
$ten = $obj -> getTable();
echo "创建10个元素的线性表，线性表数据为：".implode(',', $ten)."<br/>";
$insert = $obj -> listInsert(3,15);
echo "向线性表第3个位置插入15，线性表数据为：".implode(',', $insert)."<br/>";
$delete = $obj -> listDelete(5);
echo "删除线性表中得第5个元素，线性表数据为：".implode(',', $delete)."<br/>";
echo "查找线性表中得是否存在5:";
$find = $obj -> listSearch(5);
/**
*ps:线性表中得数据为随机生成的数据
*程序运行结果:
*创建10个元素的线性表，线性表数据为：943,201,705,131,697,701,720,237,112,867
*向线性表第3个位置插入15，线性表数据为：943,201,15,705,131,697,701,720,237,112,867
*删除线性表中得第5个元素，线性表数据为：943,201,15,705,697,701,720,237,112,867
*查找线性表中得是否存在5:线性表中不存在元素5

*/
