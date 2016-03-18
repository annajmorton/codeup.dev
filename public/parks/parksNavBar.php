<!-- SEE AMcssT.css FOR STYLE INFO -->
<div id="AMnavBar">
	<h2 id="site_title">Oh! National Parks</h2>
	<div>
		<form method="GET">
			<button name="page_prev" value="<?=$offset-1; ?>">prev</button>
			<input type="text" name="page_current" value="page <?=$offset; ?> of <?=$total_pages;?>" readonly>
			<button name="page_next" value="<?=$offset+1; ?>">next</button>
		</form>
	</div>

</div> 