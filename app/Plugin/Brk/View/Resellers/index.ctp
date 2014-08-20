<div class="container">
  <div class="pm-main-page">
    <?php echo $this->Session->flash(); ?>
    <table class="table table-striped">
      <thead>
        <tr>
          <th><?php echo $this->Paginator->sort('name', 'Satış Noktası'); ?></th>
          <th style='text-align:right;'>İşlemler</th>
        </tr>
      </thead>
      <tbody>
      	<?php foreach ($resellers as $key => $reseller) { ?>
          <tr>
	          <td>
	          	<?php echo $reseller['Reseller']['name']; ?>
	          </td>
	          <td class="text-right">
	          	<?php echo $this->Html->link("Düzenle", array('action' => 'edit', $reseller['Reseller']['id'])); ?> - 
	          	<?php echo $this->Html->link("Sil", array('action' => 'delete', $reseller['Reseller']['id'])); ?>
	          </td>
        	</tr>
      	<?php } ?>
      </tbody>
    </table>
	<ul class="pagination pagination-large">
		<?php
			echo $this->Paginator->first(__('İlk'), array('tag' => 'li'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
			echo $this->Paginator->prev(__('Önceki'), array('tag' => 'li'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
			echo $this->Paginator->numbers(array('separator' => '','currentTag' => 'a', 'currentClass' => 'active','tag' => 'li','first' => 1));
			echo $this->Paginator->next(__('Sonraki'), array('tag' => 'li','currentClass' => 'disabled'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
			echo $this->Paginator->last(__('Son'), array('tag' => 'li'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
		?>
	</ul>
  </div>
</div><!-- /.container -->