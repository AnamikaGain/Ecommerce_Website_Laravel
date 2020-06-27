@foreach($errors as $category)
<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> {{$category->name}}
        <b class="caret"></b></a>
    <ul class="dropdown-menu multi-column columns-3">
        <div class="row">
            <div class="col-sm-3  multi-gd-img">
                <ul class="multi-column-dropdown">
                    <h6>Submenu1</h6>
                    @if(count($category->childs))
                        @include('front-end.includes.subcategory',['childs' => $category->childs])
                    @endif
                </ul>
            </div>

            <div class="col-sm-3  multi-gd-img">
                <a href="products.html"><img src="{{ asset ('/') }}/front-end/images/woo.jpg" alt=" "/></a>
            </div>
            <div class="col-sm-3  multi-gd-img">
                <a href="products.html"><img src="{{ asset ('/') }}/front-end/images/woo1.jpg" alt=" "/></a>
            </div>
            <div class="clearfix"></div>
        </div>
    </ul>
</li>
@endforeach
