<meta charset="{{ config('app.charset', 'utf-8') }}">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="csrf-token" content="{{ csrf_token() }}"/>
<link rel="icon" href="{{ asset('/favicon.ico') }}" sizes="16x16"/>

<!-- Styles -->
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Raleway:100,600"/>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
      integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
      crossorigin="anonymous" />

<title>{{ $page_title or config('app.name') }}</title>

@section('html_header')
@show
