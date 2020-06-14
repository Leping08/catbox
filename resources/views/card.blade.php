<div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
    <div class="flex-shrink-0">
        <img class="h-48 w-full object-cover" src="https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1679&q=80" alt="" />
    </div>
    <div class="flex-1 bg-white p-6 flex flex-col justify-between">
        <div class="flex-1">
            <a href="/posts/{{$post->id}}" class="block">
                <h3 class="mt-2 text-xl leading-7 font-semibold text-gray-900">
                    {{$post->title}}
                </h3>
                <p class="mt-3 text-base leading-6 text-gray-500">
                    {{\Illuminate\Support\Str::words($post->content,25)}}
                </p>
            </a>
        </div>
        <div class="mt-6 flex items-center">
            <div class="ml-3">
                <p class="text-sm leading-5 font-medium text-gray-900">
                    <a href="#" class="hover:underline">
                        George
                    </a>
                </p>
                <div class="flex text-sm leading-5 text-gray-500">
                    <div>
                        {{$post->created_at->toFormattedDateString()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>