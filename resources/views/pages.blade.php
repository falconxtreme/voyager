<?php 

$page = TCG\Voyager\Models\Page::first(); 
$browsePages = Voyager::can('browse_pages');

?>

@can('browse', $page)

	You can browse pages

@endcan

@can('edit', $page)

	you can edit pages

@else

	yu can't edit pages

@endcan

@if($browsePages)

	you can browse pages

@else

	you can't browse pages

@endif

