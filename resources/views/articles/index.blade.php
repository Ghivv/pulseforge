<!-- Knowing is not enough; we must apply. Being willing is not enough; we must do. - Leonardo da Vinci -->
<x-app-layout>
{{-- <h1>Artikel</h1> --}}
    {{-- <a href="{{ route('admin.articles.create') }}">Buat Artikel Baru</a>
    <ul>
        @foreach($articles as $article)
            <li>
                <a href="{{ route('articles.show', $article->id) }}">{{ $article->title }}</a>
                <a href="{{ route('admin.articles.edit', $article->id) }}">Edit</a>
                <form action="{{ route('admin.articles.destroy', $article->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Hapus</button>
                </form>
            </li>
        @endforeach
    </ul> --}}

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    {{-- Header Section --}}
    <div class="flex justify-between items-center mb-8">
        <h1 class="text-4xl font-bold text-gray-900 font-serif">Artikel</h1>
        <a href="{{ route('admin.articles.create') }}"
           class="inline-flex items-center px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white rounded-md transition-colors duration-200">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
            </svg>
            Buat Artikel Baru
        </a>
    </div>

    {{-- Categories (jika ada) --}}
    @if(isset($categories))
    <div class="flex gap-4 mb-8 overflow-x-auto pb-2">
        @foreach($categories as $category)
        <button onclick="filterCategory('{{ $category->slug }}')"
                class="px-4 py-2 rounded-full text-sm font-medium {{ request('category') == $category->slug ? 'bg-indigo-600 text-white' : 'bg-gray-100 text-gray-700 hover:bg-gray-200' }}">
            {{ $category->name }}
        </button>
        @endforeach
    </div>
    @endif

    {{-- Articles Grid --}}
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($articles as $article)
        <div class="bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200">
            @if($article->image)
            <img src="{{ asset($article->image) }}"
                 alt="{{ $article->title }}"
                 class="w-full h-48 object-cover rounded-t-lg">
            @endif

            <div class="p-6">
                <h2 class="text-xl font-bold text-gray-900 mb-2">
                    <a href="{{ route('articles.show', $article->id) }}"
                       class="hover:text-indigo-600 transition-colors duration-200">
                        {{ $article->title }}
                    </a>
                </h2>

                <p class="text-gray-600 mb-4 line-clamp-2">
                    {{ $article->excerpt }}
                </p>

                <div class="flex items-center justify-between mt-4">
                    <div class="flex items-center space-x-4">
                        <a href="{{ route('admin.articles.edit', $article->id) }}"
                           class="text-gray-600 hover:text-indigo-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none"
                                 stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                            </svg>
                        </a>

                        <form action="{{ route('admin.articles.destroy', $article->id) }}"
                              method="POST"
                              onsubmit="return confirm('Apakah Anda yakin ingin menghapus artikel ini?')"
                              class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                    class="text-gray-600 hover:text-red-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none"
                                     stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                </svg>
                            </button>
                        </form>
                    </div>

                    {{-- Social Share Buttons --}}
                    <div class="flex items-center space-x-2">
                        <span class="text-sm text-gray-500">Share:</span>
                        <a href="https://twitter.com/intent/tweet?url={{ urlencode(route('articles.show', $article->id)) }}"
                           target="_blank"
                           class="text-gray-600 hover:text-blue-400">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    {{-- Pagination --}}
    <div class="mt-8">
        {{ $articles->links() }}
    </div>
</div>

{{-- Optional JavaScript for category filter --}}
<script>
function filterCategory(category) {
    const currentUrl = new URL(window.location.href);
    currentUrl.searchParams.set('category', category);
    window.location.href = currentUrl.toString();
}
</script>
</x-app-layout>
