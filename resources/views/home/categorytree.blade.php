@foreach($children as $subcategory)
    <ul class="dropdown-item">
        @if(count($subcategory->$children))
            <li style="color: #1D00AF;font-family: 'Arial Black'">
                {{$subcategory->title}}
            </li>
            <ul class="dropdown-item">
                @include('home.categorytree',['children'=>$subcategory->children])
            </ul>
            <hr>
        @else
            <li><a href="{{route('categoryproducts',['id'=>$subcategory->id,'slug'=>$subcategory->title])}}">{{$subcategory->$title}}</a></li>
        @endif
    </ul>
@endforeach
