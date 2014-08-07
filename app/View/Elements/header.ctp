<div class="navbar navbar-default" id="nav" role="navigation">
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
        <li><a href="#contact">İletişim</a></li>
      </ul>
        <div class="social panel pull-right">
          <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-facebook')) . 'Bizi facebooktan takip edin', 'https://www.facebook.com/pages/Me%C5%9Fhur-%C3%87orlu-Kahvesi', array('target' => 'new', 'escape' => false, 'class' => 'btn btn-social btn-facebook')); ?>
        </div>
    </div>
  </div>
</div>