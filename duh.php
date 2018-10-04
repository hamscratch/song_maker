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
	$song_key_index = array_rand($song_data['keys']);
	$song_key = $song_data['keys'][$song_key_index];

	return $song_key;
} 

function pickATempo($song_data) {
	$song_tempo_index = array_rand($song_data['tempos']);
	$song_tempo = $song_data['tempos'][$song_tempo_index];

	return $song_tempo;	
}

function pickASignature($song_data) {
	$time_signature_index = array_rand($song_data['time']);
	$time_signature = $song_data['time'][$time_signature_index];

	return $time_signature;
}	

$key = pickAKey($song_data);
$tempo = pickATempo($song_data);
$time = pickASignature($song_data);

echo "Song Key: " . $key . "\n";
echo "Song Tempo: " . $tempo . "\n";
echo "Time Signature: " . $time . "\n";
