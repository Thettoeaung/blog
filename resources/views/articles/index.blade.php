@extends("layouts.app")
@section("content")
    <div class="container" style="max-width: 800px">
        @if(session('info'))
            <div class="alert alert-info">
                {{ session('info') }}
            </div>
        @endif
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        {{ $articles->links() }}
        @foreach ($articles as $article)
            <div class="card mb-2">
                <div class="card-body">
                    <h2 class="h4 card-title">{{ $article->title }}</h2>
                    <div class="text-success mb-1">
                        <small>
                            Category: {{ $article->category->name }},
                            {{ $article->created_at->diffForHumans() }},
                            Comments ({{ count($article->comments) }})
                        </small>
                    </div>
                    <div>
                        {{ $article->body }}
                    </div>
                    <a class="card-link"
                    href="{{ url("/articles/detail/$article->id") }}">
                    View Detail &raquo;
                    </a>
                    </div>
                    </div>
                    @endforeach
                </div>
@endsection
