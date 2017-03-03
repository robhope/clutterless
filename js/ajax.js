jQuery(document).ready(function($) {
	//alert(wnm_custom.template_url);
    var $mainContent = $("#content"),
        siteUrl = "http://" + top.location.host.toString(),
        url = '';	
		var fileUrl = document.URL;
		var loadCsJS = true;
		var filename = fileUrl.substring(fileUrl.lastIndexOf('/')+1);
		//alert(clutterless.file_url);
		//alert(filename);	
    $(document).delegate("a[href^='"+siteUrl+"']:not([href*='/wp-admin/']):not([href*='wp-login.php']):not([href*='/clutterless/wp-login.php/']):not([href$='/feed/'])", "click", function() {
		if(filename!='wp-login.php?loggedout=true' && filename !='wp-login.php' && filename !='404')
		{
			/*this is fixed for multisite*/
			if(this.pathname!='/clutterless/wp-login.php')
			{
				if(this.className!='homeUrl')
				{
					location.hash = this.pathname;
					return false;
				}
			}
		}
    }); 
    $("#search-form").submit(function(e) {		
		if(clutterless.file_url!='404.php')
		{
			loadCsJS = false;
			if(location.hash !='')
			{
				location.hash ='';
			}
			location.hash = '?s=' + $("#search-field").val();
			e.preventDefault();
		}
    }); 
    $(window).bind('hashchange', function(){
        url = window.location.hash.substring(1); 
		var queryString = url.split("=");
        if (!url) {
            return;
        } 
        url = url + " #post";
        $mainContent.animate({opacity: "0.1"}).html("<img src="+clutterless.template_url+"/img/ajax-loader.gif>").load(url, function() {
            $mainContent.animate({opacity: "1"});			
			if($('#singlePage').val()!='true' && queryString[0]!='?s')
			{
				$.getScript(clutterless.template_url+"/js/load-posts.js");
			}
        });
    });
    $(window).trigger('hashchange');
});