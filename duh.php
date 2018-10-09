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

$progressions = [
	'0' => [0, 4, 5, 3],
	'1' => [0, 5, 3, 4],
	'2' => [1, 3, 4],
	'3' => [0, 3, 4, 3],
	'4' => [4, 3, 0],
	'5' => [5, 3, 0, 4],
	'6' => [0, 5, 1, 4],
	'7' => [0, 4, 5, 2, 3],
];

function pickStuff($song_data, $type) {
	$index = array_rand($song_data[$type]);
	$result = $song_data[$type][$index];
	
	return $result;
}

function numberPicker() {
	$size_options = [2, 4];
	$structure_size = array_rand(array_flip($size_options));
	
	return $structure_size;
}

function chordPicker($chord_names, $song_data) {
	$song_key = pickStuff($song_data, 'keys');
	$structure = numberPicker();
	$song_chord_index = $chord_names[$song_key];
	$song_chord_index = array_rand($song_chord_index, $structure);
	$chord_nonsense = [];
	foreach ($song_chord_index as $chord_id) {
		$chord_nonsense[] = $chord_names[$song_key][$chord_id];
		return $chord_nonsense;
	}
	
	return $chord_nonsense;
}

function chordProgressionPicker($chord_names, $progressions, $key) {
	$chord_nonsense = [];
	
	$progression_index = array_rand($progressions);
	$chord_progression = $progressions[$progression_index];

	foreach ($chord_progression as $chord) {
		$chord_nonsense[] = $chord_names[$key][$chord];
	}
	
	return $chord_nonsense;
}

$key = pickStuff($song_data, 'keys');
$tempo = pickStuff($song_data, 'tempos');
$time = pickStuff($song_data, 'time');
$chords = chordProgressionPicker($chord_names, $progressions, $key);

echo "Song Key: " . $key . "\n";
echo "Song Tempo: " . $tempo . "\n";
echo "Time Signature: " . $time . "\n";
echo "Chords: " . implode(", ", $chords) . "\n";




