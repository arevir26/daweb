<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @if (isset($title))
            {{$title}}
        @else
            Page
        @endif
    </title>
    <link rel="stylesheet" href="/marketstyle.css">
</head>
<body>
    <div id="header">Market Profile</div>
    @include('include.navigation')