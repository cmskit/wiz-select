<?php
$config = <<<EOD
{
	"info":  {
		"name": "Value_Select",
		"description": {
			"en": "Select for Strings and Numbers",
			"de": "Auswahlfeld für Strings und Nummern"
		},
		"io":  [
			"val",
			"val"
		],
		"authors":  ["Christoph Taubmann"],
		"homepage": "http://cms-kit.org",
		"mail": "info@cms-kit.org",
		"copyright": "MIT"
	},
	"system":  {
		"version": 0.5,
		"inputs":  [
			"VARCHAR",
			"INTEGER"
		],
		"include":  ["wizard:select\\noption:val[lbl](title)\\noption:..."],
		"translations":  [
			"en"
		]
	}
}
EOD;
?>
