{{--<!DOCTYPE html>--}}
{{--<html>--}}
{{--<head>--}}
    {{--<title>Custom 404 page.</title>--}}

    {{--<link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">--}}

    {{--<style>--}}
        {{--html, body {--}}
            {{--height: 100%;--}}
        {{--}--}}

        {{--body {--}}
            {{--margin: 0;--}}
            {{--padding: 0;--}}
            {{--width: 100%;--}}
            {{--color: #B0BEC5;--}}
            {{--display: table;--}}
            {{--font-weight: 100;--}}
            {{--font-family: 'Lato';--}}
        {{--}--}}

        {{--.container {--}}
            {{--text-align: center;--}}
            {{--display: table-cell;--}}
            {{--vertical-align: middle;--}}
        {{--}--}}

        {{--.content {--}}
            {{--text-align: center;--}}
            {{--display: inline-block;--}}
        {{--}--}}

        {{--.title {--}}
            {{--font-size: 72px;--}}
            {{--margin-bottom: 40px;--}}
        {{--}--}}
    {{--</style>--}}
{{--</head>--}}
{{--<body>--}}
{{--<div class="container">--}}
    {{--<div class="content">--}}
        {{--<div class="title">Custom 404 page</div>--}}
    {{--</div>--}}
{{--</div>--}}
{{--</body>--}}
{{--</html>--}}


@extends('layouts.app')

@section('content')

    <h1 class="text-center"> Oops The page is not available.</h1>

    @endsection