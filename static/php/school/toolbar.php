<nav class = "second-toolbar">
	<ul>
		<li><a href="javascript:switch_content('search','simply')"><span>AGGIUNGI</span></a></li>
		<li><a href="javascript:switch_content('search','advanced')"><span>ELENCO</span></a></li>
	</ul>
	<script>
		$(".second-toolbar > ul >li:first").toggleClass("active");
		$(".second-toolbar > ul > li").bind("click",function(){
			$(".second-toolbar > ul > li.active").toggleClass("active");
			$(this).toggleClass("active");
		});
	</script>
</nav>
