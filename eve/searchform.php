<form action="<?php bloginfo('url'); ?>" id="searchform" method="get">
	<input type="text" value="Search" name="s" onfocus="if (this.value == 'Search') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Search';}" />
	<div class="submit-container"><input id="searchsubmit" value="Search" type="submit" class="submit" /></div>
</form>
