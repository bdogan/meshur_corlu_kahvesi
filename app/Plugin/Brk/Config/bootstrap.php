<?php

Configure::write('Brk.main.menu', array(
  'Müşteriler' => array(
    'link' => array(
      'controller' => 'clients',
      'action' => 'index',
      'plugin' => 'brk'
      ),
    'sub' => array(
      'Listelesene' => array(
        'link' => array(
          'controller' => 'clients',
          'action' => 'index',
          'plugin' => 'brk'
        )
      ),
      'Yeni Ekle' => array(
        'link' => array(
          'controller' => 'clients',
          'action' => 'add',
          'plugin' => 'brk'
        )
      )
    )
  ),
  'Siparişler' => array(
    'link' => array(
      'controller' => 'orders',
      'action' => 'index',
      'plugin' => 'brk'
      ),
    'sub' => array(
      'Bekleyenler' => array(
        'link' => array(
          'controller' => 'orders',
          'action' => 'pending',
          'plugin' => 'brk'
        )
      ),
      0 => 'sep',
      'Arşiv' => array(
        'link' => array(
          'controller' => 'orders',
          'action' => 'archive',
          'plugin' => 'brk'
        )
      ),
      'Hepiciği' => array(
        'link' => array(
          'controller' => 'orders',
          'action' => 'index',
          'plugin' => 'brk'
        )
      ),
      1 => 'sep',
      'Bende Oluşturabilirim' => array(
        'link' => array(
          'controller' => 'orders',
          'action' => 'add',
          'plugin' => 'brk'
        )
      )
    )
  ),
  'Envanter yada Ürünler' => array(
    'link' => array(
      'controller' => 'products',
      'action' => 'index',
      'plugin' => 'brk'
      ),
    'sub' => array(
      'Nedir Bunlar' => array(
        'link' => array(
          'controller' => 'products',
          'action' => 'index',
          'plugin' => 'brk'
        )
      ),
      'Eklesem ?' => array(
        'link' => array(
          'controller' => 'products',
          'action' => 'index',
          'plugin' => 'brk'
        )
      ),
    )
  )
));