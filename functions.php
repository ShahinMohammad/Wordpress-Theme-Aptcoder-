<?php




	function this_is_custom_post_type(){
    	$labels   = array(

   				'name'		=>'pactice',

    		);


      $pactice = array(
   		'labels'		=> $labels,
   		'public'		=> true,


      	);

     register_post_type('pactice',$pactice);

  
   $ars = array(
       'labels'		=> array(

       		'name'		=> 'kisu',
       	),
   		'piblic'		=>true,
   		'hierarchical'		=>true
   	);

register_taxonomy('advert_tag',array('pactice'),$ars);
	}
	

add_action('init','this_is_custom_post_type');


// function this_is_shortcode(){
//   echo "This is k";


// }
// add_shortcode('kkkk','this_is_shortcode');

