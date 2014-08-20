<div class="container">
  <div class="row">
    <div class="col-md-4">
      <div class="contact-form">                    
        <h3>İnternetten Sipariş<br /> Çok Yakında!</h3>
      </div>
    </div>
    <div class="col-md-4">
      <h2 class="block-header animated fadeInUp">Bilgi</h2>               
      <span class="fa fa-phone"></span> (282) 685 4424<br><br>
      <span class="fa fa-fax"></span> (282) 685 4426<br><br>
      <span class="fa fa-envelope"></span>             
      <a href="mailto:info@company.com"> info@meshurcorlukahvesi.com</a><br><br>
      <span class="fa fa-home"></span>
      <p class="address">
        Çorlu Meşhur Türk Kahvesi<br> Türkgücü yolu üzeri Çorlu Gıda Sitesi No:28 Çorlu / Tekirdağ 
      </p>
      <p>
        <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-facebook')), 'http://www.facebook.com/pages/Meşhur-Çorlu-Kahvesi/1455010651431565', array('target' => 'new', 'escape' => false, 'class' => 'btn btn-social-icon btn-facebook')); ?>
      </p>
    </div>
    <div class="col-md-3">
      <h2 class="block-header">Satış Noktaları</h2>
      <div class="resellers">
        <ul>
          <?php foreach ($resellers as $key => $reseller) { ?>
            <li><a href="#" data-lat="<?php echo $reseller['Reseller']['lat']; ?>" data-lng="<?php echo $reseller['Reseller']['lng']; ?>"><i class="fa fa-map-marker"></i> <?php echo $reseller['Reseller']['name']; ?></a></li>
          <?php } ?>
        </ul>
      </div>
    </div>             
  </div>
</div>