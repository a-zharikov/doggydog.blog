<a href="javascript:void(0);" class="search-link">
  <svg version="1.1" id="Слой_1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="24px" height="24px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
    <circle fill="none" stroke="#cccccc" stroke-width="2" cx="8.267" cy="8.267" r="7.267"/>
    <path fill="#cccccc" d="M15.031,13.277l4.092,4.092c0.484,0.484,0.484,1.269,0,1.754l0,0c-0.484,0.484-1.269,0.484-1.754,0
l-4.092-4.092c-0.484-0.484-0.484-1.269,0-1.754l0,0C13.762,12.793,14.547,12.793,15.031,13.277z"/>
  </svg>
</a>
<div class="search-form">
  <a href="javascript:void(0);" class="closed"></a>
  <img src="<?php echo get_template_directory_uri() ?>/images/svg/search.svg">
  <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>" >
    <label class="screen-reader-text" for="s">Поиск:</label>
    <input type="text" value="<?php echo get_search_query() ?>" name="s" id="s" placeholder="Что ищем?">
    <button type="submit" id="searchsubmit" value="">
      <svg version="1.1" id="Слой_1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="30px" height="30px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
        <circle fill="none" stroke="#cccccc" stroke-width="2" cx="8.267" cy="8.267" r="7.267"/>
        <path fill="#cccccc" d="M15.031,13.277l4.092,4.092c0.484,0.484,0.484,1.269,0,1.754l0,0c-0.484,0.484-1.269,0.484-1.754,0
	l-4.092-4.092c-0.484-0.484-0.484-1.269,0-1.754l0,0C13.762,12.793,14.547,12.793,15.031,13.277z"/>
        </svg>
    </button>
  </form>
</div>
