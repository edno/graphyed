# graphp/graphml

[![Packagist](https://img.shields.io/packagist/dt/edno/graphyed.svg?style=flat-square)](https://packagist.org/packages/edno/graphyed)
[![Latest Version](https://img.shields.io/packagist/v/edno/graphyed.svg?style=flat-square)](https://packagist.org/packages/edno/graphyed)
[![Build Status](https://img.shields.io/travis/com/edno/graphyed.svg?style=flat-square)](https://travis-ci.com/edno/graphyed)
[![Coverage Status](https://img.shields.io/coveralls/edno/graphyed.svg?style=flat-square)](https://coveralls.io/github/edno/graphyed?branch=master)
[![GitHub license](https://img.shields.io/badge/license-MIT-blue.svg?style=flat-square)](https://raw.githubusercontent.com/edno/graphyed/master/LICENSE)
[![FOSSA Status](https://app.fossa.io/api/projects/git%2Bgithub.com%2Fedno%2Fgraphyed.svg?type=shield)](https://app.fossa.io/projects/git%2Bgithub.com%2Fedno%2Fgraphyed?ref=badge_shield)

GraphYEd extends [graphp/graphml](https://github.com/graphp/graphml) for supporting [yEd](https://www.yworks.com/products/yed) file format for [GraphML](http://graphml.graphdrawing.org/).

It provides access to the vertices (or nodes) and edges labels through using respectively attributes `nodegraphics` and `edgegraphics` :
- `$vertex->getAttribute('nodegraphics')->NodeLabel`
- `$edge->getAttribute('edgegraphics')->EdgeLabel`


> Please refer to [GraPHP](https://github.com/graphp/graph) library for more details on how to manipulate graphs.

## Installation

The recommended way to install this library is through [Composer](http://getcomposer.org).

```shell
$ composer require edno/graphyed
```

## Usage

```php
<?php

$loader = new \edno\GraphYEd\Loader();

$graphml = file_get_contents('mygraph.graphml');

$graph = $loader->loadContents($graphml);

foreach($graph->getVertices() as $vertex) {
  print($vertex->getAttribute('nodegraphics')->NodeLabel);
}
```

## License

Released under the terms of the permissive [MIT license](http://opensource.org/licenses/MIT).
