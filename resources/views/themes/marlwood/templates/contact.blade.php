{!! PageBuilder::section('head') !!}

<section id="second">
    <div>
        {!! PageBuilder::block('image', ['class' => 'img-fluid img-header']) !!}
    </div>
    <div class="container my-5">
        <div class="row">
            <div class="col-sm-12">
                <h2>{!! PageBuilder::block('title') !!}</h2>
                {!! PageBuilder::block('content') !!}
                {!! PageBuilder::block('contact_form') !!}
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /.second -->

{!! PageBuilder::section('footer') !!}
