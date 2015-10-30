<ul>
	<li>
		<h2>Order</h2>
	</li>
	<li>
	<a href="?orderby=date&amp;order=<?= @$_GET["order"] == "DESC" ? "ASC" : "DESC" ?>" class="header-text <?= @$_GET["orderby"] == "date" ? "bold" : "" ?>">Date Published</a> <i class="fa fa-caret-<?= @$_GET["order"] == "DESC" ? "down" : "up" ?>"></i>
	</li>
	<li>
		<a href="?orderby=author&amp;order=<?= @$_GET["order"] == "DESC" ? "ASC" : "DESC" ?>" class="header-text <?= @$_GET["orderby"] == "author" ? "bold" : "" ?>">Author</a> <i class="fa fa-caret-<?= @$_GET["order"] == "DESC" ? "down" : "up" ?>"></i>
	</li>
	<li>
		<a href="?orderby=title&amp;order=<?= @$_GET["order"] == "DESC" ? "ASC" : "DESC" ?>" class="header-text <?= @$_GET["orderby"] == "title" ? "bold" : "" ?>">Title</a> <i class="fa fa-caret-<?= @$_GET["order"] == "DESC" ? "down" : "up" ?>"></i>
	</li>
</ul>

<script type="text/javascript">
/*
	function getQueryVariable(variable)
	{
	       var query = window.location.search.substring(1);
	       var vars = query.split("&");
	       for (var i=0;i<vars.length;i++) {
	               var pair = vars[i].split("=");
	               if(pair[0] == variable){return pair[1];}
	       }
	       return(false);
	}
	console.log(getQueryVariable("orderby"))
*/

</script>