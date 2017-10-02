<h1>Update Users</h1>
<?php
echo $this->Form->create('User');
echo $this->Form->input('name');
echo $this->Form->input('username');
echo $this->Form->input('password');
echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->end('Save Post');
?>