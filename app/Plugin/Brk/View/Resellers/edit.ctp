<div class="container">
	<div class="row">
		<div class="col col-xs-12">
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->Form->create('Reseller', array('class' => 'form-signin', 'autocomplate' => 'off')); ?>
			
			<?php echo $this->Form->input('Reseller.id', array('type' => "hidden")); ?>
			<?php echo $this->Form->input('Reseller.lat', array('type' => "hidden", 'id' => 'latbox')); ?>
			<?php echo $this->Form->input('Reseller.lng', array('type' => "hidden", 'id' => 'lonbox')); ?>

 			<?php echo $this->Form->input('Reseller.name', array('label' => "Başlık", 'div' => array('class' => 'form-group'), 'class' => 'form-control')); ?>

 			<div class="panel panel-default">
				  <div class="panel-heading">
				    <h3 class="panel-title">Konum Ayarlayın</h3>
				  </div>
				<div class="panel-body">
			        <?php echo $this->Form->input('address', array('id' => 'locater', 'label' => false, 'div' => array('class' => 'form-group'), 'class' => 'form-control', 'placeholder' => 'Bir yer arayarak başlayın (Misal: Çorlu)', 'autocomplate' => 'off')); ?>
	      			
	 				<div id="map_canvas" style="width: 100%; height: 380px"></div>
 				</div>
 			</div>
			<?php echo $this->Form->button('Kaydet', array('type' => 'submit', 'class' => 'btn btn-primary')); ?>
			<?php echo $this->Form->end(null); ?>
		</div>
	</div>
</div>

<?php

	$this->Html->script('http://maps.google.com/maps?file=api&v=2', array('inline' => false));

?>
<?php $this->append('script'); ?>
   <script type="text/javascript">
 
    var geocoder;
    var map;
    var marker = undefined;

    $(document).ready(function(){ initialize(); });
 
    function initialize() {
		if (GBrowserIsCompatible()) {
			geocoder = new GClientGeocoder();
			map = new GMap2(document.getElementById("map_canvas"));
			map.setCenter(new GLatLng(37.4419, -122.1419), 2);
			map.addControl(new GSmallMapControl());
			map.addControl(new GMapTypeControl());
			map.enableScrollWheelZoom();
			$('#locater').val("");
			var lat = document.getElementById("latbox").value;
			var lng = document.getElementById("lonbox").value;
			if (lat.length > 0 && lng.length > 0) {
				lat = parseFloat(lat);
				lng = parseFloat(lng);
				var point = new GLatLng(lat, lng);
				marker = new GMarker(point, {draggable: true});
				GEvent.addListener(marker, "dragend", function() {
					var latlng = marker.getLatLng();
					document.getElementById("latbox").value = latlng.lat();
					document.getElementById("lonbox").value = latlng.lng();
				});
				map.addOverlay(marker);
				map.setCenter(point, 13);
			}
		}
    }

    function showAddress(address) {
      geocoder.getLatLng(
        address,
        function(point) {
          if (!point) {
            alert(address + " yok boyle yer!");
          } else {
            
            map.setCenter(point, 13);
            if (!marker) {
            	marker = new GMarker(point, {draggable: true});
	            GEvent.addListener(marker, "dragend", function() {
	              var latlng = marker.getLatLng();
	              document.getElementById("latbox").value = latlng.lat();
	              document.getElementById("lonbox").value = latlng.lng();
	            });
	            map.addOverlay(marker);
            } else {
            	marker.setPoint(point);
            }
            var latlng = marker.getLatLng();
        	document.getElementById("latbox").value = latlng.lat();
        	document.getElementById("lonbox").value = latlng.lng();
          }
        }
      );
    }

    $('#locater').on('keydown', function(e){
    	if (e.keyCode == 13) {
    		e.preventDefault();
    		showAddress($(this).val());
    		return false;
    	}
    });

    </script>
<?php $this->end(); ?>