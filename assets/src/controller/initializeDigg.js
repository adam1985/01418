define(['jquery', 'component/jquery.cookie'], function($){
	return function(){
		var diggBox = $('#digg-box');
		diggBox.on('click', 'a', function(){

			var $this = $(this), 
				postid = $this.attr('data-post-id'),
				polltype = $this.attr('data-poll-type');
			var data = {
				action: 'digg',
				postid: postid,
				polltype: polltype
			};

			if( !$.cookie(postid+polltype) ) {
				$.ajax({
					type: 'post',
					url : '/',
					data : data,
					success: function( data ){
						$this.find('p').html( data );
						$.cookie(postid+polltype, 1, {
							expires : 1,
							domain : '.01418.com'
						});
					}
				});
			} else {
				alert('亲，您今天已经踩过了');
			}
		});
	}

		
});
