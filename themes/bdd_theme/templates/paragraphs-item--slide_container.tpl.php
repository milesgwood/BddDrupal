<div class="carousel slide" data-interval="<?php print $interval; ?>" data-ride="carousel" id="carousel-component-<?php print $id; ?>">
    <!-- Indicators -->

    <ol class="carousel-indicators">
        <?php foreach (element_children($variables['elements']['field_slides']) as $key) : ?>
            <li data-slide-to="<?php print $key; ?>" data-target="#carousel-component-<?php print $id; ?>"> </li>
        <?php endforeach; ?>
    </ol>
    <!-- Wrapper for slides -->

    <div class="carousel-inner" role="listbox">
        <?php foreach (element_children($variables['elements']['field_slides']) as $key) : ?>
            <div class="item <?php if ($active_class) { print 'active'; $active_class = FALSE; } ?>"><?php print render($elements['field_slides'][$key]); ?></div>
        <?php endforeach; ?>
    </div>
    <!-- Controls -->
    <a class="left carousel-control" data-slide="prev" href="#carousel-component-<?php print $id; ?>" role="button"><span class="sr-only">Previous</span> </a>
    <a class="right carousel-control" data-slide="next" href="#carousel-component-<?php print $id; ?>" role="button"> <span class="sr-only">Next</span> </a>
</div>