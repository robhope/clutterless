if (navigator.userAgent.match(/iPad/i) != null) {
	$(function() {
				
		function slideIn() {
			$('#sidebar').css({left:'450px'});
			$('#sidebar-inner').css({left:'0px'});
		}
		function slideOut() {
			$('#sidebar').css({left:'0px'});
			$('#sidebar-inner').css({left:'-450px'});
		}
		
  		$('#sidebar-name').click( function(e) {
			if ($('#sidebar').position().left == 0)
				slideIn();
			else
				slideOut();
		});
				
		$('#ipad-click').click( function() {
			slideOut();
		})
	});
}