{!! PageBuilder::section('head') !!}

<section id="second">
    <div>
        {!! PageBuilder::block('image', ['class' => 'img-fluid img-header']) !!}
    </div>
    <div class="container my-5">
        <div class="row">
            <div class="col-sm-12">
                <h2>{!! PageBuilder::block('title') !!}</h2>
            </div>
        </div>
        <div class="row">
            <article class="col-sm-12">
                {!! PageBuilder::block('content') !!}
            </article>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /.second -->

<section id="third">
    <div class="container my-5">
        <div class="row">
            {!! PageBuilder::block('lesson_materials', ['view' => 'lesson_materials']) !!}
        </div>
    </div>
</section>

{!! PageBuilder::section('footer') !!}
