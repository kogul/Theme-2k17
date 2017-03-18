jQuery(document).ready(navHeight);
function navHeight(){
	var winH = jQuery(window).height();
	jQuery('.nav-side').height(winH);
}
jQuery(document).ready(iconWid);
function iconWid(){
	var divH = jQuery('.menuIcon').height();
	jQuery('.menuIcon').width(divH);
}
jQuery(document).ready(function(){
	jQuery('.menuIcon').click(function(){
		var pos = jQuery('.nav-side').position();
		if(pos.left<0){
			jQuery('.nav-side').css("left","0px");
			jQuery('.menuIcon').css("left","200px");
		}else{
			jQuery('.nav-side').css("left","-275px");
			jQuery('.menuIcon').css("left","0px");
		}
	});
});
jQuery(document).ready(sideHeight);
jQuery(document).ready(function () {
	var winH = jQuery(window).height();
	if(jQuery('.posts').height()<winH){
        jQuery('.posts').height(winH);
		sideHeight();
	}
});
function sideHeight() {
    var posH = jQuery('.posts').height();
    jQuery('.sidebar').height(posH);
}

jQuery(document).ready(function () {
	if(!jQuery('#previous>a').is(":visible")){
        jQuery('#previous').removeClass('col-md-6');
		jQuery('#next').removeClass('col-md-6');
		jQuery('#next').css("text-align","center");
	}
    if(!jQuery('#next>a').is(":visible")){
        jQuery('#previous').removeClass('col-md-6');
        jQuery('#previous').css("text-align","center");
    }
});
