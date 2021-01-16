<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Blog') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mb-2 mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl p-3 sm:rounded-lg">
                @auth
                <form action="{{ route('posts') }}" method="post">
                    @csrf
                    <div class="mb-4">
                        <label for="body" class="sr-only">Body</label>
                        <textarea name="body" id="body" class="bg-gray-50 border-1 w-full p-2 rounded-lg @error('body') border-red-500 @enderror" cols="30" rows="4" placeholder="Post somthing!"></textarea>
                        @error('body')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div><button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded font-medium">Post</button></div>
                </form>
                @endauth
            </div>
        </div>

        @if ($posts->count())
            
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl p-3 sm:rounded-lg">
                @foreach ($posts as $post)
                    <x-post :post="$post"/>
                @endforeach
                {{ $posts->links() }}
            </div>
        </div>
        @else
            
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl p-3 sm:rounded-lg text-center">
                <h3>There are no posts yet!!</h3>
            </div>
        </div>
        @endif

    </div>
</x-app-layout>