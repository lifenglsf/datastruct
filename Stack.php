<?php
Class Stack{
	private $MAXSIZE=10;
	private $data;
	private $size;
	private $top;
	
	function __construct(){
		$this -> initStack();
	}
	//初始化栈
	function initStack(){
		$this -> data = array();
		$this -> size = 0;
		$this -> top = -1;
	}
	//销毁栈
	function DestroyStack(){
		$this -> data = null;
		$this -> size = 0;
		$this -> top = -1;
	}
	//清空栈
	function ClearStack(){
		$this -> data = array();
		$this -> size = 0;
		$this -> top = -1;
	}
	//判断栈是否为空
	function StackEmpty(){
		if($this -> top == -1){
			return TRUE;
		}
		return FALSE;
	}
	//取得栈的长度
	function StackLength(){
		return $this -> size;
	}

	//取得栈顶元素
	function getTop(){
		if($this -> top == -1){
			return "ERROR";
		}

		return $this -> data[$this -> top];
	}

	function StackTraverse(){

	}
	//元素进栈
	function push($data){
		//echo $this -> top.'--';
		if($this -> top == $this -> MAXSIZE){
			return "ERROR";
		}
		$this -> top++;
		//echo $this -> top;
		$this -> data[$this -> top] = $data;
	}
	
	//元素出栈
	function pop(){
		if($this -> top == -1){
			return "ERROR";
		}
		$tmp = $this -> data[$this-> top];
		$this -> data[$this -> top] == null;
		$this -> top--;
		return $tmp;

	}

	//10进制转8进制
	function decToOct($temp){
		while($temp){
			$tmp = $temp%8;
			$this -> push($tmp);
			$temp = intval($temp/8);
		}

		$val = "";
		while(!$this -> StackEmpty()){
			$val.=$this -> pop();
		}
		return $val;
	}

}
$stack = new Stack();
$octVal = $stack -> decToOct(52);
echo "52的8进制为:".$octVal;
//运行结果
//52的8进制为:64