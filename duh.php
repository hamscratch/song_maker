<?php

$song_data = [
	'keys' => ['C', 'G', 'D', 'A', 'E', 'B', 'F#', 'Db', 'Ab', 'Eb', 'Bb', 'F'],
	'tempos' => ['85', '90', '95', '100', '105', '110', '115', '120', '125', '130'],
	'time' => ['4/4', '3/4', '6/8'],
];

$chord_names = [
	'numbers' => ['I', 'ii', 'iii', 'IV', 'V', 'vi'],
	'C' => ['C', 'Dm', 'Em', 'F', 'G', 'Am'],
	'G' => ['G', 'Am', 'Bm', 'C', 'D', 'Em'],
	'D' => ['D', 'Em', 'F#m', 'G', 'A', 'Bm'],
	'A' => ['A', 'Bm', 'C#m', 'D', 'E', 'F#m'],
	'E' => ['E', 'F#m', 'G#m', 'A', 'B', 'C#m'],
	'B' => ['B', 'C#m', 'D#m', 'E', 'F#', 'G#m'],
	'F#' => ['F#', 'G#m', 'A#m', 'B', 'C#', 'D#m'],
	'Db' => ['Db', 'Ebm', 'Fm', 'Gb', 'Ab', 'Bbm'],
	'Ab' => ['Ab', 'Bbm', 'Cm', 'Db', 'Eb', 'Fm'],
	'Eb' => ['Eb', 'Fm', 'Gm', 'Ab', 'Bb', 'Cm'],
	'Bb' => ['Bb', 'Cm', 'Dm', 'Eb', 'F', 'Gm'],
	'F' => ['F', 'Gm', 'Am', 'Bb', 'C', 'Dm'],
];

function pickAKey($song_data) {
	$song_key = array_rand($song_data['keys']);

	return $song_key;
} 

function pickATempo($song_data) {
	$song_tempo = array_rand($song_data['tempos']);
	
	return $song_tempo;	
}

$key = pickAKey($song_data);

echo "Song Key: {$song_data['keys']['1']} \n";
echo "Chord Numbers: " . implode(", ", $chord_names['numbers']) . "\n";
echo "Chords: " . implode(", ", $chord_names['G']) . "\n";

echo "Song Key: " . $key . "\n";
