@if ($is_first)
<div class="row">
    <div class="col col-sm-4">
@endif

    <a href="{{ PageBuilder::block('link') }}" class="card">
        <div class="card-header">
            <h5 class="card-title">{{ PageBuilder::block('title') }}</h5>
        </div>
        @if (PageBuilder::block('image'))
            {!! PageBuilder::block('image', ['class' => 'card-img-top']) !!}
        @endif
        <div class="card-body">
            {!! PageBuilder::block('content') !!}
        </div>
    </a>

@if ($is_last)
    </div>
</div>
@endif
