<x-app>
    <div class="mx-auto max-w-2xl my-20">
        <h1 class="mt-6 text-4xl font-bold tracking-tight text-zinc-800 sm:text-5xl">{{ $post->title }}</h1>
        <div class="mt-4">
            @foreach($post->tags as $tag)
                <a href="{{ route('blog.index', ['tag' => $tag->slug]) }}" class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-zinc-100 text-zinc-800">{{ $tag->name }}</a>
            @endforeach
        </div>
        <div class="mt-8 prose">
            <x-markdown theme="">
                {!! $post->body !!}
            </x-markdown>
        </div>
    </div>
</x-app>
