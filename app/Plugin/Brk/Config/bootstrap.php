<?php

Configure::write('Brk.main.menu', array(
  'Tanımlamalar' => array(
    'link' => array(
      'controller' => 'settings',
      'action' => 'index',
      'plugin' => 'brk'
      ),
    'sub' => array(
      'Nokta-i Satış' => array(
        'link' => array(
          'controller' => 'resellers',
          'action' => 'index',
          'plugin' => 'brk'
        )
      ),
      'Yeni Satış Nokt.' => array(
        'link' => array(
          'controller' => 'resellers',
          'action' => 'add',
          'plugin' => 'brk'
        )
      )
    )
  )
));