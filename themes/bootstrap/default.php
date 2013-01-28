<?php $this->inc('elements/header.php'); ?>
		
		    <div class="container">
    
		<div class="row">
								<!-- Création d'une Colonne (Contenu) de 10  !-->
		    <div class="span10">                            
	                              
		        <div class="hero-unit">
				 <?php
				$a=new Area ('contenu');
				$a->display ($c);
				?>
				</div>
		      
		      <div class="row">
								<!-- Création d'une Colonne (bas gauche) de 5  !-->
		      	<div class="span5"> 
				                   
		      		<?php
				$a=new Area ('bas gauche');
				$a->display ($c);
				?>
		      	</div>	      	
								<!-- Création d'une Colonne (bas droite) de 5  !-->
		      	<div class="span5">		    
				                    
		      		<?php
				$a=new Area ('bas droite');
				$a->display ($c);
				?>
		      	</div>
		      </div>
		      
		    </div>
		    <div class="span2">				<!-- Création d'une Colonne (lateral) de 12  !-->
		    	<div class="well well-small">
					<?php
				$a=new Area ('lateral');
				$a->display ($c);
				?>
				</div>
		    </div>
	    </div>
			
				
<?php $this->inc('elements/footer.php'); ?>