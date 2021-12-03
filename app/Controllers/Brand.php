<?php
 namespace App\Controllers;
 use App\Models\ProductsModel;
 use App\Models\SliderModel;
 use App\Models\DiscountModel;


class Brand extends BaseController
{
	public function index()
	{
		return view('admin/pages/brand');
	}

	//--------------------------------------------------------------------

}
