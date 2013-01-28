<?php $this->inc('elements/header.php'); ?>
		
		   
    
		<div class="row">
		    <div class="span4">
		        
				<div class="hero-unit">
				 <?php
				 $a = new Area('colonne 1');
				  $a->display($c);
				  ?>
				</div>
		
			</div>
			 <div class="span4">
		       <div class="hero-unit">
				 <?php
				 $a = new Area('colonne 2');
				  $a->display($c);
				  ?>
				</div>
			</div>
			 <div class="span4">
		        <div class="hero-unit">
				 <?php
				 $a = new Area('colonne 3');
				  $a->display($c);
				  ?>
				</div>
			</div>
		</div>
		<div class="row">
		    <div class="span12">
		       <div class="hero-unit">
				 <?php
				 $a = new Area('colonne bas ');
				  $a->display($c);
				  ?>
				</div>
			</div>
			 
		</div>

			
		      
			
				
<?php $this->inc('elements/footer.php'); ?>