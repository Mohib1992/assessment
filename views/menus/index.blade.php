@if(isset($menus))

	@foreach($menus as $menu)
		<li>{{ HTML::link('/page/'.$menu->id,$menu->page_title) }}</li>
	@endforeach
@endif