<?php
 namespace App\Controllers;
 use App\Models\ProductsModel;
 use App\Models\SliderModel;
 use App\Models\DiscountModel;


class Home extends BaseController
{
	public function index()
	{
		$products = new ProductsModel();
		$slider = new SliderModel();
		$discount = new DiscountModel();


		$data['slides'] = $slider->where('publication_status', '1')->findAll();
		$data['all_products'] = $products->where('publication_status', '1')->findAll();
		$data['new_products'] = $products->where('publication_status', '1')->orderBy('id', 'DESC')->findAll();
		$data['total_men'] = count($products->where('product_category', '1')->where('publication_status', '1')->findAll());
		$data['total_women'] = count($products->where('product_category', '2')->where('publication_status', '1')->findAll());
		$data['total_kids'] = count($products->where('product_category', '3')->where('publication_status', '1')->findAll());
		$data['total_accessories'] = count($products->where('product_category', '4')->where('publication_status', '1')->findAll());
		$data['total_cosmetics'] = count($products->where('product_category', '5')->where('publication_status', '1')->findAll());
		$data['featured_products'] = $products->where('product_feature', '1')->where('publication_status', '1')->orderBy('id', 'DESC')->limit(5, 1)->findAll();
		$data['discount'] = $discount->where('discount_status', '1')->findAll();
		return view('web/pages/home', $data );
	}

  public function Category($id){
    $products = new ProductsModel();
    //$category = $products->findAll();

    $data = [];    

    return view('web/pages/category', $data);
  }

  public function ShopCart(){
    return view('web/pages/shop-cart');
  }

	//--------------------------------------------------------------------

}
