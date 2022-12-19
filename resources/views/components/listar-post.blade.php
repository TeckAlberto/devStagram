<div>
    @if ($posts->count())
        <div class="grid gap-6 mx-3 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            @foreach ($posts as $post)
                <div>
                    <a href="{{route('posts.show', ['post' =>$post, 'user' => $post->user])}}">
                        <img class="" src="{{asset('uploads') . '/' . $post->imagen}}" alt="Imagen del Post {{$post->titulo}}">
                    </a>
                </div>
            @endforeach
        </div>

        <div class="my-10">
            {{$posts->links()}}
        </div>

    @else
        <p class="text-sm font-bold text-center text-gray-600 uppercase">No hay posts</p>
    @endif
</div>