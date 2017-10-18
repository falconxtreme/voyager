<ul class="nav sidebar-menu">
    @foreach($items as $menu_item)
        <li>
        	@if(!$menu_item->children->isEmpty())
                <a href="#" class="menu-dropdown">
                    <i class="{{ $menu_item->icon_class }}"></i>
                    <span class="menu-text"> {{ $menu_item->title }} </span>
                    <i class="menu-expand"></i>
                </a>
                <ul class="submenu">
                	@foreach($menu_item->children as $menu_item_child)
                		<li>
                			<a href="{{ $menu_item_child->url }}">
                				<i class="{{ $menu_item->icon_class }}"></i>
                                <span class="menu-text"> {{ $menu_item_child->title }} </span>
                			</a>
                		</li>
                	@endforeach
                </ul>
            @else
                <a href="{{ $menu_item->url }}">
                	<i class="{{ $menu_item->icon_class }}"></i>
                    <span class="menu-text"> {{ $menu_item->title }} </span>
                </a>
            @endif
        </li>
    @endforeach
</ul>