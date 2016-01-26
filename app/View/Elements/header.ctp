<div class="navbar navbar-default hidden-sm hidden-xs" id="nav" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="#intro" class="navbar-brand" title="Meşhur Çorlu Kahvesi">
        <?php echo $this->Html->image('meshur_corlu_kahvesi_dark.png', array('class' => 'logo')); ?>
      </a>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#story">Hakkımızda</a></li>
        <li><a href="#products">Ürünler</a></li>
        <li><a href="#contact">İletişim & Satış Noktaları</a></li>
      </ul>
        <div class="social panel pull-right">
          <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-facebook')), 'http://www.facebook.com/pages/Meşhur-Çorlu-Kahvesi/1455010651431565', array('target' => 'new', 'escape' => false, 'class' => 'btn btn-social-icon btn-facebook')); ?>
          <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-instagram')), 'http://instagram.com/meshurcorlukahvesi', array('target' => 'new', 'escape' => false, 'class' => 'btn btn-social-icon btn-instagram')); ?>
          <a href="http://www.trakyalezzetleri59.com" target="new" class="btn btn-success"><i class="fa fa-shopping-cart" style="font-size: 20px;margin-right: 4px;margin-left: -2px;vertical-align: -2px;"></i> Sanal Mağaza</a>
        </div>
    </div>
  </div>
</div>
