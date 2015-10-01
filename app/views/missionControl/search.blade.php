@extends('templates.main')
@section('title', 'Search results for')

@section('content')
<body class="search">

    @include('templates.flashMessage')
    @include('templates.header')

    <div class="content-wrapper">
        <h1>Search results for</h1>
        <main>
            <form method="GET" action="/missioncontrol/search">
                <search></search>
            </form>
        </main>
    </div>
</body>
@stop

