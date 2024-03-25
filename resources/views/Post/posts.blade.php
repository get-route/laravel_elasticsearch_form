<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Все статьи</title>
</head>
<body>
<h2 class="font-semibold text-xl text-gray-800 leading-tight">
    {{ __('Всего статей') }} <span class="text-gray-400">({{ $posts->count() }})</span>
</h2>
<div class="container">
    <div class="col-lg-12">
        <form class="row col-lg-12" action="{{route('posts')}}">
            <div class="col-lg-6">
                <label for="inputPassword2" class="visually-hidden">Search...</label>
                <input type="text" class="form-control" id="inputPassword2" name="slug_search" placeholder="Введите поисковый запрос">
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3" name="search_but">Поиск</button>
            </div>
        </form>
    </div>
</div>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200 space-y-8">
                @if($data == '')
                    @forelse ($posts as $post)
                        <article class="space-y-1">
                            <h2 class="font-semibold text-2xl">{{ $post->title }}</h2>

                            <p class="m-0">{{ $post->body }}</body>

                            <div>
                                @foreach ($post->tags as $tag)
                                    <span class="text-xs px-2 py-1 rounded bg-indigo-50 text-indigo-500">{{ $tag}}</span>
                                @endforeach
                            </div>
                        </article>
                    @empty
                        <p>No articles found</p>
                    @endforelse
                    @else
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                            {{ __('Найдено статей') }} <span class="text-gray-400">({{ count($search) }})</span>
                        </h2>
                        @forelse ($search as $post)
                            <article class="space-y-1">
                                <h2 class="font-semibold text-2xl">{{ $post['_source']['testField'] }}</h2>

                                <div>

                                </div>
                            </article>
                        @empty
                            <p>No articles found</p>
                            @endforelse
                @endif

    </div>
    </div>
    </div>
    </div>


</body>
    <footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    </footer>
</html>

