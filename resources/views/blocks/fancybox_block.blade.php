<div class="image {{ isset($addClass) && $addClass ? ' '.$addClass : '' }}" {{ isset($stylesStr) ? 'style='.$stylesStr : '' }}>
    <a class="fancybox" href="{{ asset($image) }}"><img src="{{ asset(isset($preview) &&  $preview ? $preview : $image) }}" {{ isset($title) ? 'title='.$title : '' }} /></a>
</div>
