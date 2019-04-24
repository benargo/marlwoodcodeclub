{!! PageBuilder::section('head') !!}

<header id="first">
    {!! PageBuilder::block('image', ['class' => 'img-fluid img-header']) !!}
</header>
{{-- /#first --}}

<section id="second">
    <div class="container my-5">
        <div class="row">
            <div class="col-sm-12">
                <h1>{{ PageBuilder::block('title') }}</h1>
                {!! PageBuilder::block('content') !!}
            </div>
        </div>
        {{-- /.row --}}
    </div>
    {{-- /.container --}}
</section>
{{-- /#second --}}

<section id="third">
    <div class="container my-5">
        {!! PageBuilder::block('cards', ['view' => 'cards']) !!}
    </div>
</section>
{{-- /#third --}}

{!! PageBuilder::section('footer') !!}
