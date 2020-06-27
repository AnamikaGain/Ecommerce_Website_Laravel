<ul>
    @foreach($childs as $child)
        <li><input type="checkbox" id="item-0-0" /><label for="item-0-0">{{ $child->name}}</label>

            @if(count($child->childs))
                @include('front-end.includes.category',['childs' => $child->childs])
            @endif
        </li>
    @endforeach
</ul>
