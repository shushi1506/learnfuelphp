<?php
class Controller_Customer extends Controller
{
    public function action_index()
    {
        $data['cus'] = Model_Customer::find('all');
        return Response::forge(View::forge('customer/index',$data));
    }
}