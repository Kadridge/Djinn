<?php

class Like extends AppModel{
    public $belongsTo = array(
    'Post' => array(
        'className'    => 'Post',
        'counterCache' => true
    ),
    'User'
);

    
}
?>
