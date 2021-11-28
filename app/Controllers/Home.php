<?php
 namespace App\Controllers;
 use App\Models\ProductsModel;
 use App\Models\SliderModel;
 use App\Models\DiscountModel;


class Home extends BaseController
{
	public function index()
	{
		$produsts = new ProductsModel();
		$slider = new SliderModel();
		$discount = new DiscountModel();


		$data['slides'] = $slider->where('publication_status', '1')->findAll();
		$data['all_products'] = $produsts->where('publication_status', '1')->findAll();
		$data['new_products'] = $produsts->where('publication_status', '1')->orderBy('product_id', 'DESC')->findAll();
		$data['total_men'] = count($produsts->where('product_category', '1')->where('publication_status', '1')->findAll());
		$data['total_women'] = count($produsts->where('product_category', '2')->where('publication_status', '1')->findAll());
		$data['total_kids'] = count($produsts->where('product_category', '3')->where('publication_status', '1')->findAll());
		$data['total_accessories'] = count($produsts->where('product_category', '4')->where('publication_status', '1')->findAll());
		$data['total_cosmetics'] = count($produsts->where('product_category', '5')->where('publication_status', '1')->findAll());
		$data['featured_products'] = $produsts->where('product_feature', '1')->where('publication_status', '1')->orderBy('product_id', 'DESC')->limit(5, 1)->findAll();
		$data['discount'] = $discount->where('discount_status', '1')->findAll();
		return view('web/pages/home', $data );
	}

	//--------------------------------------------------------------------

}
