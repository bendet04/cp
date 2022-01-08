$(function(){
	$(window).scroll(function(){		
		activeheader();
	});
	activeheader();
});

function activeheader(){
	/*var menu = $('#indextriggermenuid'),
		pos = menu.offset();*/
	
	$(function(){
		if($(this).scrollTop()<300){
			$("#menuid").removeClass("menufixed");
			$("#activefixedheader").removeClass("activeheaderm");
			$("#headerm2").removeClass("menufixed");
		}
		else{
			$("#menuid").addClass("menufixed");
			$("#activefixedheader").addClass("activeheaderm");
			$("#headerm2").addClass("menufixed");
		}
	});
}