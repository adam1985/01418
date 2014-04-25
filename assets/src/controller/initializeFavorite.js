define(['jquery', './addFavorite', 'component/jquery.cookie'], function($, addFavorite){
	return function(){
		var closeFavorite = $('#close-favorite'), topNavigator = $('#top-navigator');
		$('#add-favorite').click(function(){
			addFavorite('http://www.baoxiaoyike.cn', '爆笑天天看!!!');

			$.cookie( 'favorite-cookie', true, {
				expires : 365,
				domain : '.baoxiaoyike.cn'
			});
		});


		if( !$.cookie('favorite-cookie') ) {
			topNavigator.slideDown(); 
		}

		closeFavorite.click( function() {
			topNavigator.slideUp( function(){
				$.cookie( 'favorite-cookie', true, {
					expires : 7,
					domain : '.baoxiaoyike.cn'
				});
			});
		});
	};

});