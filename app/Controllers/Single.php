<?php
 namespace App\Controllers;
 use App\Models\ProductsModel;
 use App\Models\SliderModel;
 use App\Models\DiscountModel;


class Single extends BaseController
{
  public function index($id = null){
    $products = new ProductsModel();
		$data['single_product'] = $products->find($id);
    return view('web/pages/single', $data);
  }  

	//--------------------------------------------------------------------

}
