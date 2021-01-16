<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $user->name }} 
        </h2>
        <p>
            Posted: {{ $user->posts->count() }} {{ Str::plural('post', $posts->count()) }}, and received {{ $user->receivedLikes->count() }} {{ Str::plural('like', $user->receivedLikes->count()) }}.
        </p>
    </x-slot>
    <div class="mb-4"></div>
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
</x-app-layout>