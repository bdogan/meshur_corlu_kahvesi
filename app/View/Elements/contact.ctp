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
      <a href="mailto:info@company.com"> info@papatyatedarik.com</a><br><br>
      <span class="fa fa-home"></span>
      <p class="address">
        Çorlu Meşhur Türk Kahvesi<br> Türkgücü yolu üzeri Çorlu Gıda Sitesi No:28 Çorlu / Tekirdağ
      </p>
      <p>
        <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-facebook')), 'http://www.facebook.com/pages/Meşhur-Çorlu-Kahvesi/1455010651431565', array('target' => 'new', 'escape' => false, 'class' => 'btn btn-social-icon btn-facebook')); ?>
        <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-instagram')), 'http://instagram.com/meshurcorlukahvesi', array('target' => 'new', 'escape' => false, 'class' => 'btn btn-social-icon btn-instagram')); ?>
      </p>
    </div>
    <div class="col-md-3">
      <h2 class="block-header">Satış Noktaları</h2>
      <div class="resellers">
        <ul>
          <li><a href="#mapHolder" data-lat="41.132584" data-lng="27.858386"><i class="fa fa-map-marker"></i> Merkez Satış Ofisi</a></li>
          <?php foreach ($resellers as $key => $reseller) { ?>
            <li><a href="#mapHolder" data-lat="<?php echo $reseller['Reseller']['lat']; ?>" data-lng="<?php echo $reseller['Reseller']['lng']; ?>"><i class="fa fa-map-marker"></i> <?php echo $reseller['Reseller']['name']; ?></a></li>
          <?php } ?>
        </ul>
      </div>
    </div>
  </div>
</div>
<?php
  $this->Html->script('fontawesome-markers', array('inline' => false));
?>
<?php $this->append('script'); ?>
<script type="text/javascript">
  var resellers = [
    <?php foreach ($resellers as $key => $reseller) { ?>
    ['<?php echo $reseller['Reseller']['name']; ?>', <?php echo $reseller['Reseller']['lat']; ?>, <?php echo $reseller['Reseller']['lng']; ?>],
    <?php } ?>
  ];
  $('.resellers > ul > li > a').on('click', function(){
      var lat = $(this).attr('data-lat');
      var lng = $(this).attr('data-lng');
      if (lat.length > 0 && lng.length > 0) {
        lat = parseFloat(lat);
        lng = parseFloat(lng);
        centerMarker(lat, lng);
      }
  });
</script>
<?php $this->end(); ?>
