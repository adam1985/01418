define(['jquery', './initializeDigg', './initializeShare'], function($, initializeDigg, initializeShare){
		$(function(){
			initializeDigg();

			// 分享
			initializeShare();
			
		});
});
