<?php
namespace app\ecshop\controller;

use app\ecshop\model\GoodsModel;

class Goods
{

    public function getGoods()
    {
  //   	$login = "sa"; 
		// $passwd = "sa"; 
		// $connection = 'sqlsrv:Database=AIS20161116135110;Server=192.168.1.113,1433';
		// $sql = 'select * from  dbo.t_ICItemBase';

		// try{ 
		//   $db=new \pdo($connection,$login,$passwd); 
		//   foreach($db->query($sql) as $row){ 
		//   	print_r($row); 
		//   } 
		//   $db=null; 
		// }catch(pdoexception $e){ 
		// 	echo $e->getMessage();
		// }
    	//return 'kisProduct';

    	$items = GoodsModel::all();
    	foreach($items as $key => $value)
    	{
    		print_r($value->getData());
    	}
    	
    }
}
