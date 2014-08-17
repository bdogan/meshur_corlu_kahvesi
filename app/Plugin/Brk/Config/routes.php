<?php
	Router::connect('/brk', array('plugin' => 'brk', 'controller' => 'main', 'action' => 'index'));
	Router::connect('/brk/main/*', array('plugin' => 'brk', 'controller' => 'main', 'action' => 'index'));