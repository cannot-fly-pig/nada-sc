<body>
    <h1>{{ $name }} drafts</h1>
    <ul>
        @foreach ($drafts as $draft)
            <li>{{ "[" . $draft->title . "] " . $draft->body }}</li>
            <p>記事ID：<small>{{ $draft->id }}</small></p>
        @endforeach
    </ul>
    <a href="{{ route('draft.create') }}">new draft</a><br>
</body>