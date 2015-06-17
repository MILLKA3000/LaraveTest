<div class="list-group">
    <span class="list-group-item list-group-item-success">
        Меню по категоріям
    </span>
    @foreach($menuitems as $menuitem)
        <a href="/category/{{ $menuitem->id }}/show" class="list-group-item">{{ $menuitem->name }}</a>
    @endforeach
</div>

