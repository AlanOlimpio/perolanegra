<form role"search" method="GET" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
  <label for="pesquisar"><input type="search" name="s" value="<?php the_search_query(); ?>" placeholder="Pesquisar...">
  <i class="fa fa-search w3-light-grey" aria-hidden="true"></i></label><input id="pesquisar" type="submit" name="Pesquisar" style="display: none;">
</form>