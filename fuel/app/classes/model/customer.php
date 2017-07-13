<?php
use Orm\Model;
class Model_Customer extends Model
{
    protected static $_properties=array(
        'id',
        'name',
        'birthday',
        'address',
    );
    protected static $_table_name= 'customers';
    protected static $_primary_key=array('id');
    
}