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
    public function action_view($id =null){
        is_null($id) and Response::redirect('customer');

        if(! $data['cus'] = Model_Customer::find($id)){
            Session::set_flash('error','Khong tim thay');
            Response::redirect('customer');
        }
        return Response::forge(View::forge('customer/view',$data));
    }

    public function action_edit($id =null){
        is_null($id) and Response::redirect('customer');

        if ( ! $cus  = Model_Customer::find($id))
		{
			Session::set_flash('error', 'Could not find post #'.$id);
			Response::redirect('customer');
		}

        if(Input::post('submit'))
        {   
            
            $cus ->name = Input::post('name');
            $cus ->birthday =Input::post('birthday');
            $cus ->address =Input::post('address');

            if($cus ->save()){
                Session::set_flash('success','Edit success');
                Response::redirect('customer');
            }
            else{
                Session::set_flash('error', 'Edit error');
                Response::redirect('customer');
            }
        }
        else View::set_global('cus',$cus,false);
        return Response::forge(View::forge('customer/edit')); 
    }
    public function action_delete($id=null){

        is_null($id) and Response::redirect('customer');
        if(!$cus= Model_Customer::find($id)){
            Session::set_flash('error','Error delete');
            
        }else{
            if($cus ->delete()){
                 Session::set_flash('success','Delete success');
            }
            else{
                 Session::set_flash('error', 'Edit error');
            }
        }
        Response::redirect('customer');
    }
}