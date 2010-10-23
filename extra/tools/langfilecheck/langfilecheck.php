<?php
// PunBB/FluxBB internationalization tests
// (c) 2010 artoodetoo. http://fluxbb.org.ru/
// Free for use. NO WARRANTIES!
//
// Place this file in forum root
//
// It looks for:
// - lang file wich haven't mirror in another lang
// - lost keys in one of the mirrors
// - undefined $lang_* variables
// - undefined keys in $lang_* variables
// - lang keys never used
//

class languageDir
{
	public
		$files;

	{
		$this->files = array();
	    $d = dir($dir);
	    while (($entry = $d->read()) !== FALSE)
	    {
	        // skip hidden files, . and ..
	        if ($entry{0} != '.' && is_file($dir . $entry) && strrchr($entry, '.') == '.php')
	        {
				$this->files[basename($entry, '.php')] = $this->inspectLangFile($dir . $entry);
	        }
	    }
	    $d->close();
	}

	private function inspectLangFile($file)
	{
		$text = file_get_contents($file);
		$tokens = token_get_all($text);
		$var = '';
		$keys = array();
		foreach ($tokens as $token) {
				break;
			}
		}
		unset($tokens);
		if (!empty($var)) {
			include $file;
			foreach ($$var as $key => $dummy) {
			}
			unset($$var);
			ksort($keys);
		} else {
		}
		return array('var' => '$'.strtolower($var), 'keys' => $keys);
	}

class allLanguages
{
	public
		$languages;

	public function __construct($dir)
	{
		$this->languages = array();
	    while (($entry = $d->read()) !== FALSE)
	    {
	        // skip hidden files, . and ..
	        if ($entry{0} != '.' && is_dir($dir . 'lang/' . $entry))
	        {
	        }
	    }
	    $d->close();
	}

	public function compareLanguages($langNameA, $langNameB)
	{
		$langB = $this->languages[$langNameB];

		$errorCount = 0;
		$a = array_keys($langA->files);
		$b = array_keys($langB->files);
			++$errorCount;
		}
		if (count($d = array_diff($b, $a))) {
			echo "*** {$langNameA} miss file(s): " . implode(', ', $d) . "\n";
			++$errorCount;
		}

		foreach (array_intersect($a, $b) as $file) {
			$bf = $langB->files[$file];
			if ($af['var'] != $bf['var']) {
				++$errorCount;
				continue;
			}
			$afk = array_keys($af['keys']);
			$bfk = array_keys($bf['keys']);
			if (count($d = array_diff($afk, $bfk))) {
				echo "*** {$langNameB} {$file} miss key(s): '" . implode("', '", $d) . "'\n";
				++$errorCount;
			}
			if (count($d = array_diff($bfk, $afk))) {
				echo "*** {$langNameA} {$file} miss key(s): '" . implode("', '", $d) . "'\n";
				++$errorCount;
			}
		}
		return $errorCount;
	}
}

class fileInspector
{
	private
		$langFiles;

	public
		$unknownVars,
		$unknownKeys;

	public function __construct($langObject)
	{
		$this->langFiles =& $langObject->files;
		$this->unknownVars = array();
		$this->unknownKeys = array();
	}

	public function scan($dir)
	{
	    while (($entry = $d->read()) !== FALSE) {
	        if ($entry{0} != '.' && $entry != 'lang') {
	        	} else if (strrchr($e, '.') == '.php') {
	        	}
	    }
	    $d->close();
	    return $errorCount;
	}

	private function checkFile($fileName)
	{
		$errorCount = 0;
		$tokens = token_get_all(file_get_contents($fileName));
		$prevToken = NULL;
		foreach ($tokens as $token) {
					continue;
				}
				}
				$exists = FALSE;
				foreach ($this->langFiles as $f => $params) {
						$ref = $f;
						break;
					}
				}
				if (!$exists) {
					++$errorCount;
					continue;
				}

			} else if (is_array($token) && $token[0] == T_CONSTANT_ENCAPSED_STRING && $prevToken == '[' && isset($ref)) {
				$keys =& $this->langFiles[$ref]['keys'];
				if (isset($keys[$key])) {
				} else {
					$this->unknownKeys[$ref][] = $key;
				}
			}
			$prevToken = $token;
		}
		return $errorCount;
	}
}


header('Content-type: text/plain; charset=utf-8');

$baseDir = str_replace('\\', '/', dirname($_SERVER['SCRIPT_FILENAME'])) . '/';

$o = new allLanguages($baseDir);

$notEnglish = $o->languages;
unset($notEnglish['English']);
foreach ($notEnglish as $langName => $dummy) {
	echo "Compare English to {$langName}:\n";
	if ($o->compareLanguages('English', $langName) == 0) {
	}
	echo "----------------\n";
}

$i = new fileInspector($o->languages['English']);

echo "Scan for variable usage:\n";
$i->scan($baseDir);
if (!empty($i->unknownVars)) {
	}
	echo "----------------\n";
}
if (!empty($i->unknownKeys)) {
	foreach ($i->unknownKeys as $fileName => $keys) {
		echo "*** {$fileName} has not key(s): '" . implode("', '", $keys) . "'\n";
	}
	echo "----------------\n";
}

foreach ($o->languages['English']->files as $fileName => $params) {
	if (!empty($unused)) {
	}
}

function zero($val)
{
}