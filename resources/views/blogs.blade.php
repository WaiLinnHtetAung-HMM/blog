    <x-layout>
        <x-hero/>
        <x-blog-section :blogs="$blogs" />
        {{-- @dd($currentCategory) --}}
        <x-subscribe />
    </x-layout>