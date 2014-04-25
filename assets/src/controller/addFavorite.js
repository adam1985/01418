define(function(){
	return function (url,title) {
	    if(confirm("网站名称："+title+"\n网址："+url+"\n确定添加收藏?")){
	        var ua = navigator.userAgent.toLowerCase();
	        if(ua.indexOf("msie 8")>-1){
	            external.AddToFavoritesBar(url,title,'');//IE8
	        }else{
	            try {
	                window.external.addFavorite(url, title);
	            } catch(e) {
	                try {
	                    window.sidebar.addPanel(title, url, "");//firefox
	                } catch(e) {
	                    alert("加入收藏失败，请使用Ctrl+D进行添加");
	                }
	            }
	        }
	    }
	    return false;
	}
});
