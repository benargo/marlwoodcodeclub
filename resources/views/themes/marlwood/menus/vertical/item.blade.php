<?php $class = ($item->active) ? ' active' : ''?>
{!! HTML::link($item->url, $item->name, ['class' => "nav-link$class"]) !!}
