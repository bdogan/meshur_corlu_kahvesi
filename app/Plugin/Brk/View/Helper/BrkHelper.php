<?php

App::uses('BrkAppHelper', 'Brk.View/Helper');

class BrkHelper extends BrkAppHelper {

  public $helpers = array('Html');

  function generateMenu() {
    $out = "";
    if (!Configure::read('Brk.main.menu')) return $out;
    foreach (Configure::read('Brk.main.menu') as $mainName => $mainOptions) {
      $liNode = "";
      if (!isset($mainOptions['sub'])) {
        $liNode .= $this->Html->link($mainName, $mainOptions['link'], array('escape' => false));
      } else {
        $liNode .= $this->Html->link($mainName . ' <span class="caret"></span>', $mainOptions['link'], array('escape' => false, 'data-toggle' => 'dropdown', 'class' => 'dropdown-toggle'));
        $subUlNode = "";
        foreach ($mainOptions['sub'] as $subName => $subOptions) {
          $subLiNode = "";
          if (is_string($subOptions) && $subOptions == "sep") {
            $subLiNode = '<li class="divider"></li>';
          } else {
            $subLiNode = $this->Html->link($subName, $subOptions['link'], array('escape' => false));
          }
          $subLiNode = $this->Html->tag('li', $subLiNode);
          $subUlNode .= $subLiNode;
        }
        $subUlNode = $this->Html->tag('ul', $subUlNode, array('class' => 'dropdown-menu', 'role' => 'menu'));
        $liNode .= $subUlNode;
        $liNode = $this->Html->tag('li', $liNode);
      }
      $out .= $liNode;
    }
    $out = $this->Html->tag('ul', $out, array('class' => 'nav navbar-nav'));
    return $out;
  }

}