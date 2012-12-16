<?php
function encode_progress ($file) {
	$line = readLastLine($file);

	$words = explode(" ", $line);
	$index = array_search("%", $words);
	return $words[$index - 1];
}

function encode_fps ($file) {
	$line = readLastLine($file);

        $words = explode(" ", $line);
        $index = array_search("avg", $words);
        return $words[$index + 1];
}

function encode_eta ($file) {
	$line = readLastLine($file);

        $words = explode(" ", $line);
        $index = array_search("ETA", $words);
        return substr_replace($words[$index + 1],"",-2);
}

function handbrake_version ($file) {
	$matches = searchForLine ($file, "HandBrake");
	$line = serialize($matches[0]);
	$words = explode(" ", $line);
	$index = array_search("HandBrake", $words);

	return $words[$index + 1]." ".$words[$index + 2];
}

function video_name ($file) {
        $matches = searchForLine ($file, "Opening");
        $line = serialize($matches[0]);
        $words = explode(" ", $line);
        $index = array_search("Opening", $words);

        return substr_replace($words[$index + 1],"",-6);
}

function video_duration ($file) {
        $matches = searchForLine ($file, "Duration:");
        $line = serialize($matches[0]);
        $words = explode(" ", $line);
        $index = array_search("Duration:", $words);

        return substr_replace($words[$index + 1],"",-1);
}

function readLastLine ($file) {
        $fp = @fopen($file, "r");

        $pos = -1;
        $t = " ";
        while ($t != "\r") {
                if (!fseek($fp, $pos, SEEK_END)) { // *** - fseek returns 0 if successfull, and -1 if it has no succes as in seeking a byte outside the file's range
                        $t = fgetc($fp);
                        $pos = $pos - 1;
                } else { // ***
                        rewind($fp); // ***
                        break; // ***
                } // ***
        }
        $t = fgets($fp);
        fclose($fp);
        return $t;
}

function searchForLine ($file,$searchfor) {
	$contents = file_get_contents($file);

	$pattern = preg_quote($searchfor, '/');
	$pattern = "/^.*$pattern.*\$/m";

	if (preg_match_all($pattern, $contents, $matches)) {
		return $matches;
	} else {
		return null;
	}
}
?>
