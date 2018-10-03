<?php

$song_keys = ['C', 'G', 'D', 'A', 'E', 'B', 'F#', 'Db', 'Ab', 'Eb', 'Bb', 'F'];
$song_tempos = ['85', '90', '95', '100', '105', '110', '115', '120', '125', '130'];
$time_signatures = ['4/4', '3/4', '6/8'];
$chord_numbers = ['I', 'ii', 'iii', 'IV', 'V', 'vi'];


$key_of_c_major = ["I"=>"C","ii"=>"Dm","iii"=>"Em","IV"=>"F","V"=>"G","vi"=>"Am"];

function pickAKey($song_keys) {
	$song_key = array_rand(array_flip($song_keys));
	
	return $song_key;
}

function pickATempo($song_tempos) {
	$song_tempo = array_rand(array_flip($song_tempos));

	return $song_tempo;
}

function pickASignature($time_signatures) {
	$time_signature = array_rand(array_flip($time_signatures));

	return $time_signature;
}

function pickChords($song_key){
	$size_options = [2, 4];
	$part_size = array_rand(array_flip($size_options));

	$chord_numbers = ['I', 'ii', 'iii', 'IV', 'V', 'vi'];

	$chords = array_rand(array_flip($chord_numbers), $part_size);

	// i want to take each chord number and find its corresponding chord name based on the $song_key
	foreach ($chords as $chord) {

	}

	return $chord_progression;
}

function returnChordNames($song_key) {
	$key = $song_key;

	$key_of_c_major = ["I"=>"C","ii"=>"Dm","iii"=>"Em","IV"=>"F","V"=>"G","vi"=>"Am"];

	if ($key = $key_of_c_major) {
		$chord_names = $key_of_c_major;
	}

	return $chord_names;
}


