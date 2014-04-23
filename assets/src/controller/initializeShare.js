define(['jquery', 'component/tools', 'interface/share-config'], function($, tools, config){
	return function(){
		window._bd_share_config = config;


		tools.loadScript('http://bdimg.share.baidu.com/static/api/js/share.js?cdnversion=');

	}

		
});
