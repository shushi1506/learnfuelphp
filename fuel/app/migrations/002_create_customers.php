<?php
namespace Fuel\Migrations;
class Create_customers
{
    public function up(){
        
            \DBUtil::create_table('customers',array
                (
                    'id' => array('type' => 'int','constraint' => 11,'auto_increment'=>true),
                    'name' => array('type' =>'varchar' ,'constraint' => 50),
                    'birthday' => array('type' =>'date' ),
                    'address' => array('type' =>'varchar' ,'constraint'=> 250,'null'=>true),
                ),
                array('id')
            );
        
       
    }

    public function down(){
        \DBUtil::drop_table('customers');
    }

}