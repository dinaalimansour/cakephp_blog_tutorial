<?php

class Post extends AppModel {

	public $validate = array(
        'title' => array(
            'role' => 'notBlank'
        ),
        'body' => array(
            'role' => 'notBlank'
        ),
        'Name' => array(
            'role' => 'notBlank'
        ),
    );

    public function isOwnedBy($post, $user) {
	    return $this->field('id', array('id' => $post, 'user_id' => $user)) !== false;
	}
}