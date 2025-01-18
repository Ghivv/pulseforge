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
        <h1 class="text-4xl font-bold text-indigo-500 font-serif">Artikel</h1>
        {{-- <a href="{{ route('admin.articles.create') }}"
           class="inline-flex items-center px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white rounded-md transition-colors duration-200">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
            </svg>
            Buat Artikel Baru
        </a> --}}
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
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6">
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
                    {{ Str::limit(strip_tags($article->content), 100) }}
                </p>


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
