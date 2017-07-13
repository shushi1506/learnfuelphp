<?php
class Controller_Customer extends Controller
{
    public function action_index()
    {
        $data['cus'] = Model_Customer::find('all');
        return Response::forge(View::forge('customer/index',$data));
    }
    public function action_create(){
        if(Input::post('submit'))
        {
            $customer= new Model_Customer();
            $customer ->name=Input::post('name');
            $customer ->birthday=Input::post('birthday');
            $customer ->address=Input::post('address');
            if($customer && $customer ->save()){
                Session::set_flash('success', 'Added customer #');
					Response::redirect('customer');
            }
            else{
                Session::set_flash('error', 'Error #');
					Response::redirect('customer');
            }  
        }


        return Response::forge(View::forge('customer/create'));
    }
}