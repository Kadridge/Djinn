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
    
function beforeSave() {
    App::uses('Sanitize','Utility');
    $this->data['Comment']['content'] = Sanitize::html($this->data['Comment']['content'], array('remove' => true));
}
    
}
?>
