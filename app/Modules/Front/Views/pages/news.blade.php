<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- <p>{{Lang::get('routes.news', [],'vi' )}}</p> --}}
    {{-- <p>{{LaravelLocalization::getCurrentLocale()}}</p> --}}
    <p>{{ LaravelLocalization::transRoute('routes.news')}}</p>
    <p>{{LaravelLocalization::getLocalizedURL('vi', Lang::get(LaravelLocalization::getRouteNameFromAPath('http://localhost/test-lang/en/news/slug'), [],'vi' )  ) }}</p>
    {{-- <p>{{LaravelLocalization::getURLFromRouteNameTranslated('vi', 'routes.news' ) }}</p> --}}
    <ul>
    @foreach($tin as $item)
        <li><a href="#">{{$item->title}}</a></li>
    @endforeach
    </ul>
    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
        <li>
            <a rel="alternate" hreflang="{{ $localeCode }}" href="{!! LaravelLocalization::getLocalizedURL($localeCode,  Lang::get(LaravelLocalization::getRouteNameFromAPath('http://localhost/test-lang/en/news/slug'), [], $localeCode) ) !!}">
                {{ $properties['native'] }}
            </a>
        </li>
    @endforeach
</body>
</html>
