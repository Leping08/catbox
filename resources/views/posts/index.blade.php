@extends("layout")

@section("content")
<div class="relative pt-16 pb-20 lg:pt-24 lg:pb-28">
    <div class="absolute inset-0">
        <div class="bg-white h-1/3 sm:h-2/3"></div>
    </div>
    <div class="relative max-w-7xl mx-auto">
        <div class="text-center">
            <h2 class="text-3xl leading-9 tracking-tight font-extrabold text-gray-900 sm:text-4xl sm:leading-10">
                Words from the Catbox
            </h2>
            <p class="mt-3 max-w-2xl mx-auto text-xl leading-7 text-gray-500 sm:mt-4">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa libero labore natus atque, ducimus sed.
            </p>
            <span class="m-4 pt-4 inline-flex rounded-md shadow-sm">
                <a href="/posts/create" class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm leading-5 font-medium rounded-md text-gray-700 bg-white hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:text-gray-800 active:bg-gray-50 transition ease-in-out duration-150">
                    Create New Blog Post
                </a>
            </span>
        </div>

        <div class="bg-gray-300 p-8">
            <div class="grid gap-5 max-w-lg mx-auto lg:grid-cols-3 lg:max-w-none">
                @foreach ($posts as $post)
                    @include('card')
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection