<?php
	class A{
		private $n1;
		private $n2;
		private $n3;
		
		//ʹ��__set������������������
		public function __set($pro_name,$pro_val){
			$this->pro_name=$pro_val;
		}
		
		//ʹ��__get���Ի�ȡ���е�����
		public function __get($pro_name){
			if(isset($pro_name)){
				return $this->pro_name;
			}else{
				return null;
			}
		}
	}
	
	$a1=new A();
	$a1->n1="hello";
	echo $a1->n1;
	
	/*
	//�̳�ϸ��
	1���������ֻ�ܼ̳�һ������(ֱ�Ӽ̳�)
	2�������ǿ��Լ̳и����µ���public protected���εĳ�Ա���Ժͳ�Ա����
	3��PHP������� Ĭ��������ǲ���ȥ���ø����µĹ��캯�� parent::__contruct
	4: ����ȥ���ʸ���Ĺ��췽���ͳ�Ա���� Ҫ����Ĺ��캯���ͳ�Ա������������
	public �� protected�������� Ҳ����ֱ��ʹ�� ������::������  parent::������
	5��������д*/

?>






