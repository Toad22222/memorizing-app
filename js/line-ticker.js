$(function(){

	function initTicker(id, options) {
		$ul = $('<div id="'+id.replace('#','')+'" style="border: 1px solid orange"><ul><li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</li><li>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</li><li>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</li></ul></div>');
		$("#scrollers").append($ul);

		var $scroller = $(id);
		$scroller.vTicker('init', options);

		$(".next").click(function(event){
				event.preventDefault();
				var checked = $("#animation").is(':checked');
				$scroller.vTicker('next', {animate:checked});
				$('#single').vTicker('next', {animate:checked});
			});
		$(".prev,.next").hover(function(){
				$scroller.vTicker('pause', true);
			}, function(){
				$scroller.vTicker('pause', false);
		});
		$(".prev").click(function(event){
				event.preventDefault();
				var checked = $("#animation").is(':checked');
				$scroller.vTicker('prev', {animate:checked});
				$('#single').vTicker('prev', {animate:checked});
			});
	}

	initTicker('#scroller1', {height: 200});
	initTicker('#scroller2', {});
	initTicker('#scroller3', {showItems:2, margin: 5, padding: 5});
	initTicker('#scroller4', {showItems:2, margin: 10});
	initTicker('#scroller5', {showItems:2, padding: 10});
	initTicker('#scroller6');
	$('#single').vTicker();

});
