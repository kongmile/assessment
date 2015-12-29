<?php
	header("Content-type:text/html;charset=utf-8");
	class Date{
		public $sql;//操作命令
		public $opearKind;//操作类型
		public $failFlag;//是否操作成功

		//添加或推荐，$state为0用户为推荐，1为管理员添加
		public function upload($name, $url, $kind, $state=0){
			$this->sql = "INSERT INTO nav(name, url, kind, state) VALUES ('".$name."','".$url."','".$kind."', '".$state."')";
			if($state==1){
				$this->opearKind = "add";					
			}else{
				$this->opearKind = "recommend";
			}
			$this->opera();
		}

		//更新
		public function update($name, $url, $kind, $id, $state=1){
			$this->sql = "UPDATE nav SET name = '$name',url = '$url',state = '1',kind = '$kind' WHERE id='$id'";
			$this->opearKind = "update";
			$this->opera();
		}

		//删除
		public function delete($id){
			$this->sql = "DELETE FROM nav WHERE id = '$id'";
			$this->opearKind = "delete";
			$this->opera();
		}
		
		//操作
		public function opera(){
		    $dsn = 'mysql:host=localhost;dbname=base'; //主机名字，数据库名
			$username = 'root'; //用户名
				 $passwd = ''; //密码
			try{
		    	$dbh = new PDO($dsn,$username,$passwd,array( PDO :: ATTR_PERSISTENT=> true));//长连接
		    	$dbh -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);//报错会中断进行事物，并回滚
		    	$dbh->exec('set names utf8');
		    }catch( PDOException   $e){//抓错误
		        die($e->getMessage());
		    }
			if($dbh->query($this->sql)){
				$this->failFlag=1;
			}else{
				$this->failFlag=0;
			}
		}

		/*反馈 
		$failFlag 	是否成功标志
		$successTip 成功提示语
		$failTip	失败提示语
		$sucURL		成功时返回地址
		$FailURL	失败时返回地址
		*/
		public function Tip(){
			switch ($this->opearKind) {
				case "add":
					$successTip = "已添加";
					$failTip = "请重试";
					$sucURL = '../../back.php';
					$FailURL = 'back.add.php';
					break;
				case "recommend":
					$successTip = "推荐成功，请耐心等待管理员审核";
					$failTip = "请重试";
					$sucURL = '../../nav.php';
					$FailURL = '../../recommend.php';
					break;
				case "update":
					$successTip = "修改成功";
					$failTip = "修改失败";
					$sucURL = '../../back.php';
					$FailURL = '../../back.php';
					break;
				case "delete":
					$successTip = "已删除";
					$failTip = "删除失败";
					$sucURL = '../../back.php';
					$FailURL = '../../back.php';
				default:
					
					break;
			}
			if($this->failFlag==1){
				echo "<script>alert('{$successTip}');window.location.href='{$sucURL}';</script>";
			}else{
				echo "<script>alert('{$failTip}');window.location.href='{$FailURL}';</script>";
			}
		}


	}