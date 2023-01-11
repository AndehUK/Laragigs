@props(['listing'])

<ul class="flex">
    @foreach(str_getcsv($listing->tags) as $tag)
        <li class="bg-black text-white rounded-xl px-3 py-1 mr-2"><a href="/?tag={{$tag}}">{{$tag}}</a></li>
    @endforeach
</ul>
