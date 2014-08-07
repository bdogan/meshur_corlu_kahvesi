<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <div class="contact-form">                    
        <form class="contact-form white_section" method="post" action="/" style="display:none;">
        <h2 class="block-header animated fadeInUp">Form</h2>
          <p class="contact-form-name animated fadeInUp">
            <label for="name">Adınız<span class="required">*</span></label>
            <input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control">
          </p>
          <p class="contact-form-email">
            <label for="email">Mail Adresiniz <span class="required">*</span></label>
            <input type="text" aria-required="true" size="30" value="" name="email" id="email" class="form-control">
          </p>
          <p class="contact-form-message">
            <label for="message">Yorum</label>
            <textarea aria-required="true" rows="5" cols="45" name="message" id="message" class="form-control"></textarea>
          </p>
          <p class="contact-form-submit text-left vertical-margin-81">
            <input type="submit" value="Gönder" id="contact_form_submit" name="contact_submit" class="btn btn-primary">
          </p>
        </form>
        <h3>İnternetten Sipariş<br /> Çok Yakında!</h3>
      </div>
    </div>
    <div class="info_block widget_text col-sm-4 white_section">
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
  </div>
</div>