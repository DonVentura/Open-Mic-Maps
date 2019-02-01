jQuery(document).ready(function(){
	var posttype = 'listing';
	jQuery(".lpautocomplete").on('input', function(){
		var count = jQuery(this).val().length;
		
		if(count>1){
			jQuery.ajax({
			type: "POST",
			url: ajaxurl,
			data:{
				posttype:posttype, 
				search: jQuery(this).val(), 
				action: 'search_posttype'
			},
			beforeSend: function(){
				jQuery(".lp-listing-sping").toggle();
			},
			success: function(data){
				jQuery(".lpsuggesstion-box").show();
				jQuery(".lpsuggesstion-box").html(data.data);
				jQuery(".lpautocomplete").css("background","#FFF");
				jQuery(".lp-listing-sping").toggle();
			}
			});
		}
		
	});
	
	jQuery(document).on('click', 'ul#listing-list li', function(){
		$thisText = jQuery(this).text();
		jQuery(".lpautocomplete").val($thisText);
	})
	
});

function selectListing(val,title) {
	jQuery("#lpautocompletSelec").val(val);
	jQuery(".lpsuggesstion-box").hide();
}