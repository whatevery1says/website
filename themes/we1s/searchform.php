<?php
/**
 * A custom search form for our theme.
 *
 * @package WE1S
 */
?>
<form id="search-form" role="search" method="get" class="search-form text-right" action="https://we1s.ucsb.edu/">
    <div id="custom-search-input" class="mobi-search-left">
        <div class="input-group input-group-sm col-md-12">
            <span class="screen-reader-text">Search for:</span>
            <input id="search-input" type="text" class="  search-query form-control" placeholder="Search ..." value="" name="s">
            <span class="input-group-btn">
            <button class="btn btn-danger" type="button">
                <i class="fa fa-search" aria-hidden="true" onclick="document.getElementById('search-form').submit();"></i>
            </button>
            </span>
        </div>
    </div>
</form>