<?php
class Comment extends AppModel{
    var $name = 'Comment';
    public $belongsTo = array(
    'Post' => array(
        'className'    => 'Post'
    ),
    'User' => array(
        'className'    => 'User'
    )
);
}
?>
