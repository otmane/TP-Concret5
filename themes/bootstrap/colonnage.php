<?php $this->inc('elements/header.php'); ?>
		
		   <!-- Zone 2 contient 3 colonne de 4 !-->
    
		<div class="row">
		
		                 <!-- Colonne1 de 4 !-->
						 
		    <div class="span4">
		        
				<div class="hero-unit">
				 <?php
				 $a = new Area('colonne 1');
				  $a->display($c);
				  ?>
				</div>
		
			</div>
						 <!-- Colonne2 de 4 !-->
						
			 <div class="span4">
		       <div class="hero-unit">
				 <?php
				 $a = new Area('colonne 2');
				  $a->display($c);
				  ?>
				</div>
			</div>
						 <!-- Colonne3 de 4 !-->
			 <div class="span4">
		        <div class="hero-unit">
				 <?php
				 $a = new Area('colonne 3');
				  $a->display($c);
				  ?>
				</div>
			</div>
		</div>
							<!-- Zone 2 contient 1 colonne de 12 !-->
		<div class="row">
						 <!-- Colonne bas de 12 !-->
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