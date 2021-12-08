<?php
 namespace App\Controllers;
 use App\Models\CustomersModel;


class Login extends BaseController
{
	public function index()
	{
		return view('web/pages/login');
	}

  public function register()
	{
		return view('web/pages/register');
	}

  public function save(){
		//validations
			$validation = $this->validate([
			"name" => "required",
			"email" => "required",
			"password" => "required"
		]);

		if (!$validation) {
			return view('web/pages/registe', ['validation' =>$this->validator]);
		}else {
      $customermodel = new CustomersModel();
           $data = [
               'customer_name'     => $this->request->getVar('name'),
                 // 'last_name'     => $this->request->getVar('lastname'),
                 // 'middle_name'     => $this->request->getVar('middlename'),
               'customer_email'    => $this->request->getVar('useremail'),
               'customer_password' => Hash::passwordsanitize($this->request->getVar('userpassword')),
            //'role_id'     => $this->request->getVar('account-type'),
              //'phone_number'     => $this->request->getVar('phonenumber'),
          ];

          $query = $customermodel->save($data);

          if(($query){
          $this->session->setFlashdata("successmessage", "You have registered successfully, Please log in.");
          return redirect()->to('/');
		}
	}

}
