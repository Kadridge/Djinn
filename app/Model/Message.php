<?php

class Message extends AppModel{
    var $name = 'Message';
    var $actsAs = array('Containable');
    
    public $belongsTo = array(
     'FirstUser' => array(
        'className' => 'User',
        'foreignKey' => 'user_id',
         'fields' => array('id','username', 'filename', 'dir')
    ),
    'SecondUser' => array(
        'className' => 'User',
        'foreignKey' => 'userr_id',
        'fields' => array('id','username', 'filename', 'dir')
    ));
}
