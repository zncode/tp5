<?php
namespace app\ecshop\controller;

use app\ecshop\model\GoodsModel;
use think\Request;
use think\Db;

class Goods
{

    public function getGood()
    {
    	$request 	= Request::instance();
    	$param		= $request->param();
    	$productId 	= $param['product_id'];
    	$object 	= Db::table('ecs_goods')->where('goods_id', $productId)->select();

    	if($object)
    	{
	    	$data = array(
	    		'code' 		=> 0,
	    		'message'	=> 'succes',
	    		'data'		=>	$object[0],
	    	);
    	}else{
    		$data = array(
	    		'code' 		=> 1,
	    		'message'	=> 'failed',
	    		'data'		=>	[],
    		);
    	}

    	echo json_encode($data);
    }

    public function getGoods()
    {
    	$request 	= Request::instance();
    	$param		= $request->param();
    	$page 		= $param['page'];
    	$page_size 	= $param['page_size'];

		$objects = Db::table('ecs_goods')->limit($page, $page_size)->select();
    	
    	if($objects)
    	{
	    	$data = array(
	    		'code' 		=> 0,
	    		'message'	=> 'succes',
	    		'data'		=>	$objects,
	    	);
    	}else{
    		$data = array(
	    		'code' 		=> 1,
	    		'message'	=> 'failed',
	    		'data'		=>	[],
    		);
    	}

    	echo json_encode($data);
    }
}
