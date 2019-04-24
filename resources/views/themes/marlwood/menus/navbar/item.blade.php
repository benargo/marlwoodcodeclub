<?php $class = ($item->active) ? 'active' : ''?>
<li class="nav-item {!! $class !!}">
    {!! HTML::link($item->url, $item->name, ['class' => 'nav-link']) !!}
</li>
