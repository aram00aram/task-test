<ul class="nested">
    @foreach($childs as $child)
        <li><span class="caret">  {{ $child->name }}</span>

            @if(count($child->children))
                @include('dashboard.partials.manageChild',['childs' => $child->children])
            @endif
        </li>
    @endforeach
</ul>

