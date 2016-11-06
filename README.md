# Carousel for October

Add a carousel to your website.

## Install

Add as a submodule to your project:

```bash
$ git submodule add git@github.com:swt83/php-october-carousel.git plugs/travis/carousel
```

## Usage

Build a partial for use in your pages:

```
==
<?php
use Travis\Carousel\Models\Carousel;

function onStart()
{
    // load
    $record = Carousel::where('name', '=', 'Home Page')->first();

    // bind
    $this['carousel'] = $record->images;
}
?>
==
<div id="carousel_wrapper">
    <div id="carousel" class="owl-carousel">
        {% for image in carousel %}
            <div>
                <a href=""><img src="{{ image.path }}" alt="" /><span><strong>{{ image.title }}</strong>{{ image.description }}</span></a>
            </div>
        {% endfor %}
    </div>
</div>
```

I recommend [Owl Carousel](http://owlgraphic.com/owlcarousel/index.html).

The advantage to building your own partials, instead of using a pre-made component, is that you can fully customize your use of the data.  If you want to add more information to these slides, try making a description that has bar-delineated values ("foo|bar").
