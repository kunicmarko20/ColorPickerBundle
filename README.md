Color Picker Bundle
============

[![Build Status](https://travis-ci.org/kunicmarko20/ColorPickerBundle.svg?branch=master)](https://travis-ci.org/kunicmarko20/ColorPickerBundle)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/8a279415-4597-49d8-923a-34a3f4c315f1/mini.png)](https://insight.sensiolabs.com/projects/8a279415-4597-49d8-923a-34a3f4c315f1)
[![StyleCI](https://styleci.io/repos/102910747/shield)](https://styleci.io/repos/102910747)
[![Coverage Status](https://coveralls.io/repos/github/kunicmarko20/ColorPickerBundle/badge.svg)](https://coveralls.io/github/kunicmarko20/ColorPickerBundle)

Adds Color Picker Form Type to Symfony.

Built on top of [tinyColorPicker](https://github.com/PitPik/tinyColorPicker).

Documentation
-------------

* [Installation](#installation)
* [How to use](#how-to-use)

## Installation

**1.**  Add to composer.json to the `require` key

```
composer require kunicmarko/color-picker-bundle
```

**2.** Register the bundle in ``app/AppKernel.php``

```
$bundles = array(
    // ...
    new KunicMarko\ColorPickerBundle\ColorPickerBundle(),
);
```

**3.** Install assets
```
app/console assets:install
```

## How to use

In your form you can add it like:
```
// Symfony 2.8 and newer versions
use KunicMarko\ColorPickerBundle\Form\Type\ColorPickerType;

$builder->add('field', ColorPickerType::class);
```

At the end of your body/layout add:
```
<script type="text/javascript" src="{{ asset('bundles/colorpicker/js/jqColorPicker.min.js') }}"></script>
<script type="text/javascript">
    $('.colorpicker').colorPicker();
</script>
```