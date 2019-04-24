<!DOCTYPE html>
<html lang="en">
<head itemscope>
    <meta charset="utf-8">
    <title>{!! PageBuilder::block('meta_title', ['meta' => true]) !!}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{!! PageBuilder::block('meta_description', ['meta' => true]) !!}">
    <meta name="keywords" content="{!! PageBuilder::block('meta_keywords', ['meta' => true]) !!}">

  	<meta name="revisit-after" content="7 days">

    <link href="{!! PageBuilder::css('app') !!}" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    {!! PageBuilder::block('header_html', ['source' => true]) !!}

</head>

<body class="full-height bg-dark">
<div id="app" class="bg-light">

{!! PageBuilder::menu('main_menu', ['view' => 'navbar']) !!}
