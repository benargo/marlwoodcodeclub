@if ($is_first)
<div class="row">
@endif

<div class="col col-sm-4">
    <a href="{{ PageBuilder::block('link') }}" class="card">
        <div class="card-header">
            <h5 class="card-title">{{ PageBuilder::block('title') }}</h5>
        </div>
        @if (PageBuilder::block('image'))
            {!! PageBuilder::block('image', ['class' => 'card-img-top']) !!}
        @endif
        @if (PageBuilder::block('content'))
            <div class="card-body">
                {!! PageBuilder::block('content') !!}
            </div>
        @endif
    </a>
</div>

@if ($is_last)

</div>
@endif
