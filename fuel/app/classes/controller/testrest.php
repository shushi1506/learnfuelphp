<?php 
class Controller_Test_Rest extends Controller_Rest
{
    public function get_list(){
        return $this ->response(array(
            'foo' =>Input::get('foo'),
            'baz' => array(3,4,8),
            'temp' =>null
        ));
    }
}