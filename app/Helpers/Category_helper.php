<?php
function getCategory($category_id){

  $product_cat = new \App\Models\CategoryModel;

   $category = $product_cat->where('publication_status','1')->findAll();

   foreach($category as $data){

    return $data["category_name"];

 }

}
?>
