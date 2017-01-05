<?php
namespace app\kis\controller;

use app\kis\model\ItemBase;
use app\kis\model\Item;
use think\Db;

class Kis
{

    public function getProduct()
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

    	// $items = ItemBase::all();

    	// foreach($items as $key => $value)
    	// {
    	// 	$datas[] = $value->getData();
    	// }
    	
    	$items = Db::table('t_Item')
		->where('FItemClassID', 4)
		->where('FDetail', 1)
		->select();	 

    	$json = json_encode($items);
    	echo $json;
    }

    public function getCategorys()
    {		
		$categorys = Db::table('t_Item')
		->where('FItemClassID', 4)
		->where('FDetail', 0)
		->select();	 

		$json = json_encode($categorys);
    	echo $json;
    }  	

    public function getItem($id)
    {		

		$item = Db::table('t_Item')
		->where('FItemClassID', 4)
		->where('FDetail', 1)
		->where('FItemID', $id)
		->select();	 

		$json = json_encode($item);
    	echo $json;
    }  
}
