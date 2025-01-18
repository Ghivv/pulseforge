<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    {{-- Article Content --}}
    <article class="prose prose-lg max-w-none mb-12">

        <h2>{!! $article->title !!}</h2>

        <p>{!! $article->content !!}</p>

        <div class="flex items-center justify-between mt-4">
            {{-- <div class="flex items-center space-x-4">
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
                    </div> --}}

            {{-- Social Share Buttons --}}
            {{-- <div class="flex items-center space-x-2">
                        <span class="text-sm text-gray-500">Share:</span>
                        <a href="https://twitter.com/intent/tweet?url={{ urlencode(route('articles.show', $article->id)) }}"
                           target="_blank"
                           class="text-gray-600 hover:text-blue-400">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"/>
                            </svg>
                        </a>
                    </div> --}}
        </div>
    </article>

    {{-- Related Articles --}}
    @if(isset($relatedArticles) && count($relatedArticles) > 0)
    <div class="mt-12">
        <h3 class="text-2xl font-bold text-gray-900 mb-8">Artikel Terkait</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($relatedArticles as $related)
            <a href="{{ route('articles.show', $related->id) }}"
               class="block bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200">
                @if($related->image)
                <img src="{{ asset($related->image) }}"
                     alt="{{ $related->title }}"
                     class="w-full h-48 object-cover rounded-t-lg">
                @endif
                <div class="p-4">
                    <h4 class="text-lg font-semibold text-gray-900 mb-2">{{ $related->title }}</h4>
                    <p class="text-gray-600 text-sm">{{ Str::limit($related->excerpt, 100) }}</p>
                </div>
            </a>
            @endforeach
        </div>
    </div>
    @endif


</div>
