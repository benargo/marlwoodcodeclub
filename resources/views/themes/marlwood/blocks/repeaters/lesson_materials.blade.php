<a href="{{ PageBuilder::block('link') }}" class="card">
    <div class="card-body">
        <font-awesome-icon :icon="[
            '{{ PageBuilder::block('fa_icon_style') }}',
            '{{ PageBuilder::block('fa_icon_name') }}'
        ]" class="d-block text-center"></font-awesome-icon>
        <h5 class="card-title">{{ PageBuilder::block('title') }}</h5>
    </div>
</a>
