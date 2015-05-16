[![Build Status](https://travis-ci.org/horike37/wp-plugin-unittest-dependency-patten.svg?branch=master)](https://travis-ci.org/horike37/wp-plugin-unittest-dependency-patten)
# wp-plugin-unittest-dependency-patten
Advanced Custom Fieldsに依存する機能をもつWordPressプラグインを作る際のユニットテストのパターンです。

```lang:tests/dependencies-array.php
<?php
return array(
	'advanced-custom-fields' => array(
		'include' => 'advanced-custom-fields/acf.php',
		'repo' => 'https://downloads.wordpress.org/plugin/advanced-custom-fields.zip',
	)
);
```
依存関係のあるプラグインを配列で指定することで、自動でインストールの上でテストを実行します。
