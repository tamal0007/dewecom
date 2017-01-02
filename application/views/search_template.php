
<ul class="auto_complete search_result" onblur="$('#search-box').hide()">
<?php
	if (count($search_result)!=0) {
	foreach ($search_result as $value) 
	{
		?>
		<li	
			onclick="on_search_item_click($(this))"
			product_name="<?php echo $value->product_name; ?>"
			product_id="<?php echo $value->product_id; ?>"
			class="ssi"
		>
			<?php echo $value->product_name; ?>
		</li>
	<?php
	}
}else{
	?>
	<li>Found Nothing</li>
<?php
}
?>
</ul>