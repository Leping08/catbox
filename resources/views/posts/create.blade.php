@extends("layout")

@section("content")
<div class="container mx-auto my-8">
    <form method="POST" action="/posts">
        @csrf
        <div>
            <div>
                <div>
                    <h3 class="text-lg leading-6 font-medium text-gray-900">
                        Create a George Post
                    </h3>
                </div>
                <div class="mt-6">
                    <div>
                        <label for="username" class="block text-sm font-medium leading-5 text-gray-700">
                            Title
                        </label>
                        <div class="mt-1 flex rounded-md shadow-sm">
                            <input id="username" name="title" class="p-2 border-solid border border-gray-300 flex-1 form-input block w-full min-w-0 rounded-none rounded-r-md" />
                        </div>
                    </div>

                    <div class="pt-4">
                        <label for="about" class="block text-sm font-medium leading-5 text-gray-700">
                            Content
                        </label>
                        <div class="border-solid border border-gray-300 mt-1 rounded-md shadow-sm">
                            <textarea id="about" name="content" rows="3" class="p-2 form-textarea block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5"></textarea>
                        </div>
                    </div>
                    <span class="pt-4 inline-flex rounded-md shadow-sm">
                        <button type="submit" class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm leading-5 font-medium rounded-md text-gray-700 bg-white hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:text-gray-800 active:bg-gray-50 transition ease-in-out duration-150">
                            Post
                        </button>
                    </span>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection