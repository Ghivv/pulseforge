<!-- Knowing is not enough; we must apply. Being willing is not enough; we must do. - Leonardo da Vinci -->

<h1>Artikel</h1>
    <a href="{{ route('articles.create') }}">Buat Artikel Baru</a>
    <ul>
        @foreach($articles as $article)
            <li>
                <a href="{{ route('articles.show', $article->id) }}">{{ $article->title }}</a>
                <a href="{{ route('articles.edit', $article->id) }}">Edit</a>
                <form action="{{ route('articles.destroy', $article->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Hapus</button>
                </form>
            </li>
        @endforeach
    </ul>
