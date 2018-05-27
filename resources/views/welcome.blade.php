<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laralabs/Toaster Demo</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{!! asset('css/app.css') !!}" rel="stylesheet" type="text/css">

    @toaster
</head>
<body>
<div id="app" class="flex-center position-ref full-height">
    <!-- notifications group="toast" position="bottom right" animation-type="velocity"></notifications -->
    @toastcomponent
    <section class="page-header">
        <img src="{!! asset('images/toaster_logo.png') !!}" class="logo" />
        <div class="title">
            Toaster Demo
        </div>
        <a href="https://docs.laralabs.uk/toaster" class="btn btn-clear">View Documentation</a>
    </section>
    <section class="main-content">
        <p>
            CSS Animation:
        </p>
        <div class="actions">
            <a href="{!! route('generate', ['theme' => 'success', 'animation_type' => 'css']) !!}"><button type="button" class="btn btn-success">Success</button></a>
            <a href="{!! route('generate', ['theme' => 'error', 'animation_type' => 'css']) !!}"><button type="button" class="btn btn-danger">Error</button></a>
            <a href="{!! route('generate', ['theme' => 'warning', 'animation_type' => 'css']) !!}"><button type="button" class="btn btn-warning">Warning</button></a>
        </div>
        <p>
            Velocity Animation:
        </p>
        <div class="actions">
            <a href="{!! route('generate', ['theme' => 'success', 'animation_type' => 'velocity']) !!}"><button type="button" class="btn btn-success">Success</button></a>
            <a href="{!! route('generate', ['theme' => 'error', 'animation_type' => 'velocity']) !!}"><button type="button" class="btn btn-danger">Error</button></a>
            <a href="{!! route('generate', ['theme' => 'warning', 'animation_type' => 'velocity']) !!}"><button type="button" class="btn btn-warning">Warning</button></a>
        </div>
        <p>
            Multiple Groups:
        </p>
        <div class="actions">
            <a href="{!! route('generate', ['theme' => 'success', 'animation_type' => 'velocity', 'multiple' => true]) !!}"><button type="button" class="btn btn-success">Success</button></a>
            <a href="{!! route('generate', ['theme' => 'error', 'animation_type' => 'velocity', 'multiple' => true]) !!}"><button type="button" class="btn btn-danger">Error</button></a>
            <a href="{!! route('generate', ['theme' => 'warning', 'animation_type' => 'velocity', 'multiple' => true]) !!}"><button type="button" class="btn btn-warning">Warning</button></a>
        </div>
        <p>
            Positioning:
        </p>
        <div class="actions">
            <a href="{!! route('generate', ['position' => 'top left']) !!}"><button type="button" class="btn btn-info">top left</button></a>
            <a href="{!! route('generate', ['position' => 'top right']) !!}"><button type="button" class="btn btn-dark">top right</button></a>
        </div>
    </section>
    <div class="links">
        <a target=_blank" href="https://docs.laralabs.uk/toaster/">Documentation</a>
        <a target="_blank" href="https://github.com/laralabs/toaster">GitHub</a>
    </div>
</div>
</body>
<script src="{!! asset('js/app.js') !!}"></script>
</html>
