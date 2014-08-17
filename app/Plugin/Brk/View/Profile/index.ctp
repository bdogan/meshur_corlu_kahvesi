<div class="container">
    <div class="row">
        <div class="col-xs-12" >
            <div class="page-header">
                <h4>
                    <?php echo $user['User']['name'] . ' ' . $user['User']['lastname']; ?>
                    <br />
                    <small>
                        <?php echo $user['User']['mail']; ?>
                    </small>
                    <div class="btn-group btn-group-sm pull-right">
                        <?php echo $this->Html->link('Profil Düzenle', array('action' => 'edit', $user['User']['id']), array('class' => 'btn btn-default')); ?>
                        <?php echo $this->Html->link('Çıkış Yap', array('plugin' => 'brk', 'controller' => 'users', 'action' => 'logout'), array('class' => 'btn btn-default')); ?>
                    </div>
                </h4>
            </div>
       
            <div class="row">
                <?php echo $this->Session->flash(); ?>
                <div class="col-xs-12 col-sm-3" align="center">
                    <img alt="User Pic" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=100" class="img-circle">
                </div>
            
                <div class=" col-xs-12 col-sm-9"> 
                    <table class="table table-user-information">
                        <tbody>
                            <tr>
                                <td>Mail Adresi</td>
                                <td><?php echo $user['User']['mail']; ?></td>
                            </tr>
                            <tr>
                                <td>Hesap Oluşum tarihi</td>
                                <td><?php echo $this->Time->i18nformat($user['User']['created'], '%d %B %Y %A - Saat %H:%m\'da oluşturuldu'); ?></td>
                            </tr>
                            <tr>
                                <td>Hesap Düzenleme tarihi</td>
                                <td><?php echo $user['User']['modified'] ? $this->Time->i18nformat($user['User']['modified'], '%d %B %Y %A - Saat %H:%m\'da düzenlendi') : 'Düzenleme yok'; ?></td>
                            </tr>
                        </tbody>
                    </table>          
                </div>
            </div>
        </div>
    </div>
</div>

<?php

  $this->Html->css(array(
    'profile'
  ), array('inline' => false));

?>
<?php $this->append('script'); ?>
    <script type="text/javascript">

    </script>
<?php $this->end('script'); ?>