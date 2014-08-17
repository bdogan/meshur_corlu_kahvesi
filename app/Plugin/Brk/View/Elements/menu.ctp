<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
<div class="container">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Menü</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <?php echo $this->Html->link('<i class="fa fa-slack" style="vertical-align:-2px;"></i> Brk', array('plugin' => 'brk', 'controller' => 'main', 'action' => 'index'), array('class' => 'navbar-brand', 'escape' => false)); ?>
  </div>

  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <?php echo $this->Brk->generateMenu(); ?>

    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
        <?php echo $this->Html->link($this->Session->read('User.full_name') . ' <span class="caret"></span>', '#', array('escape' => false, 'class' => 'dropdown-toggle', 'data-toggle' => 'dropdown')); ?>
        <ul class="dropdown-menu" role="menu">
          <li>
            <?php echo $this->Html->link('Who am i?', array('plugin' => 'brk', 'controller' => 'profile', 'action' => 'index')); ?>
          </li>
          <li>
            <?php echo $this->Html->link('Others', array('plugin' => 'brk', 'controller' => 'users', 'action' => 'admin')); ?>
          </li>
          <li class="divider"></li>
          <li>
            <?php echo $this->Html->link('Terk-i Diyar', array('plugin' => 'brk', 'controller' => 'users', 'action' => 'logout')); ?>
          </li>
        </ul>
      </li>
    </ul>
  </div><!-- /.navbar-collapse -->
</div><!-- /.container -->
</nav>