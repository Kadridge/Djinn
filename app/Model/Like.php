<?php

class Like extends AppModel{
    public $belongsTo = array(
    'Post',
    'User'
);

    
}
?>
