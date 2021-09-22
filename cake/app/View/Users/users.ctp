<?php
print ("User Details");
print($this->Form->create("Users"));
print($this->Form->input("name"));
print($this->Form->input("role"));
print($this->Form->input("email"));
print($this->Form->end("ok"));

