<?php
	//�������-->�������
	//��Ͷ���
	//1: public ��ȫ��  �����ڱ��ࡢ���ⲿ�������з���
	//2: private ���ܵ�˽�� ֻ���ڱ����б�����
	//3: protected ������ �����ڱ���������з���
	
	class Person{
		private $name;
		public function __construct($name){
			$this->name=$name;
			//$this->load->model("user_model");
		}
		//��Ա������Ӧ�÷�Χ(public private protected)
		/*
		���������ζ���
		����---��Ա��������̬��Ա����
		����---��Ա��������̬��Ա����
		
		���캯��---��ʼ���ĳ�Ա�����ͳ�Ա����
		��������
		
		���������ε��ó�Ա�����ͳ�Ա����*/
		
		
		protected function sing(){
			echo "singing";	
		}
		
		public function ec(){
			echo $this->name;
			
			
			//$this->load->model('user_model');
			//$this->user_model->get_by_name();
		}
		
		public function cry(){
			echo "aaaaaa";
		}
		
		
		
	}
	
	
	class Laoshan extends Person{
		public function __construct(){
			//parent::__construct();
			
		}
		
		public function cry(){
			echo "lalalala";
		}
		
		public function add(){
			echo "456";
		}
	}
	
	
	$Laoshan=new Laoshan();
	$Laoshan->sing();
	//$person=new Person('laoshan');
	//$person->cry();
	//$person->ec();
	
	
	
	
	
	
	
	
	
	
	
	

?>