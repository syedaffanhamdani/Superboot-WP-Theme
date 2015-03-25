<form method="get" class="form-inline" id="searchform" action="<?php bloginfo('url'); ?>/">
	<div class="form-group">
    	<label for="s" class="hide">Search</label><br />
    	<input class="form-control" placeholder="Search" type="text" value="<?php the_search_query(); ?>" name="s" id="s" />
    	<input name="submit" class="btn btn-warning" type="submit" id="searchsubmit" value="Search" /> 
	</div>   
</form>
