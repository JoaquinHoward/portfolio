@props(['url'])

<div {{ $attributes->merge(["class" => "bg-gray-900 p-5 cursor-pointer w-40 hover:bg-gray-700 hover:underline " . (request()->is($url) ? 'bg-gray-700 underline' : '')]) }}>                         
    <a href="/{{ $url }}">{{ $slot }}</a>
</div>