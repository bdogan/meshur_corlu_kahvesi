<div class="container">
    <div class="row">
        <?php echo $this->Form->create('User', array('class' => 'form-signin')); ?>
            <?php echo $this->Form->input('User.id', array('type' => 'hidden')); ?>
            <div class="col-xs-12" >
                <div class="page-header">
                    <h4>
                        <?php echo $this->request->data['User']['name'] . ' ' . $this->request->data['User']['lastname']; ?>
                        <br />
                        <small>
                            <?php echo $this->request->data['User']['mail']; ?>
                        </small>
                        <div class="btn-group btn-group-sm pull-right">
                            <?php echo $this->Form->button('Kaydet', array('type' => 'submit', 'class' => 'btn btn-default')); ?>
                            <?php echo $this->Html->link('İptal', array('action' => 'index', $this->request->data['User']['id']), array('class' => 'btn btn-default')); ?>
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
                                    <td>Mail</td>
                                    <td>
                                        <?php echo $this->Form->input('User.mail', array('label' => false, 'type' => 'text', 'class' => 'form-control dateSel')); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Şifre (Boş kalırsa değişmez korkmayın)</td>
                                    <td>
                                        <?php echo $this->Form->input('User.password', array('label' => false, 'type' => 'text', 'class' => 'form-control dateSel')); ?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>          
                    </div>
                </div>
            </div>
        <?php echo $this->Form->end(null); ?>
    </div>
</div>