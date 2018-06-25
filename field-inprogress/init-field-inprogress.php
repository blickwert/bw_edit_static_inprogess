<?php 
    

function cookie_element(){
    // vars
    $title  =  '<h2>'.get_field('inprogress_title', 'options').'</h2>';
    $text  =  get_field('inprogress_text', 'options');
    $is_inprogress  =  ( get_field('inprogress_condition', 'options') == 'true' ? true : false);
    $is_cookie  =  ( $_COOKIE["inprogress"] == 'true' ? true : false );

    if ( !$is_inprogress) return false;
    if ( $is_cookie ) return false;
    ?>

    <div class="field-inprogress">
    	<div class="container field-section">
    		<?php echo $title; ?>
    		<?php echo $text; ?>
    		<div class="close">OK</div>
    	</div>
    </div>

<?php 
}



	  

// load cookie element
cookie_element();

