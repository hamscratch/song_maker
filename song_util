<?php

//this is pretty basic. 
//goals: 
// 1) get the actual chord names instead of just the numbers when a key is chosen
// 2) have a cadenced to end sections/song with a proper resolutions. 
// 3) have a picker for the song structure: intro, verse, chorus, bridge, interlude, outro, etc
// 4) once there is a structure, have a picker for how many bars per part
// 5) there needs to be some rules about following certain chord numbers in certain parts. definitely 
//    a stretch goal.

$song_keys = ['C', 'Db', 'D', 'Eb', 'E', 'F', 'Gb', 'G', 'Ab', 'A', 'Bb', 'B'];
$song_tempos = ['85', '90', '95', '100', '105', '110', '115', '120', '125', '130'];
$chord_numbers = ['I', 'ii', 'iii', 'IV', 'V', 'vi'];
$time_signatures = ['4/4', '3/4', '6/8'];

// Chords in the Key:
$key_of_c_major = ['C', 'Dm', 'Em', 'F', 'G', 'Am'];
$key_of_db_major = ['C', 'Dm', 'Em', 'F', 'G', 'Am'];
$key_of_d_major = ['C', 'Dm', 'Em', 'F', 'G', 'Am'];
$key_of_eb_major = ['C', 'Dm', 'Em', 'F', 'G', 'Am'];
$key_of_e_major = ['C', 'Dm', 'Em', 'F', 'G', 'Am'];
$key_of_f_major = ['C', 'Dm', 'Em', 'F', 'G', 'Am'];
$key_of_gb_major = ['C', 'Dm', 'Em', 'F', 'G', 'Am'];
$key_of_g_major = ['C', 'Dm', 'Em', 'F', 'G', 'Am'];
$key_of_ab_major = ['C', 'Dm', 'Em', 'F', 'G', 'Am'];
$key_of_a_major = ['C', 'Dm', 'Em', 'F', 'G', 'Am'];
$key_of_bb_major = ['C', 'Dm', 'Em', 'F', 'G', 'Am'];
$key_of_b_major = ['C', 'Dm', 'Em', 'F', 'G', 'Am'];

function pickAKey($song_keys) {
	$song_key = array_rand(array_flip($song_keys));

	if ($song_key == 'C') {
		$chords = $key_of_c_major;
	}

	echo "Song Key: $song_key \nChords: $chords\n";
}

function pickATempo($song_tempos) {
	$song_tempo = array_rand(array_flip($song_tempos));

	echo "Tempo: $song_tempo \n";
}

function pickChordNumbersVerse($chord_numbers) {
	$chord_number_1 = array_rand(array_flip($chord_numbers));
	$chord_number_2 = array_rand(array_flip($chord_numbers));
	$chord_number_3 = array_rand(array_flip($chord_numbers));
	$chord_number_4 = array_rand(array_flip($chord_numbers));

	echo "Verse Chords: $chord_number_1, $chord_number_2, $chord_number_3, $chord_number_4 \n";
}

function pickChordNumbersChorus($chord_numbers) {
	$chord_number_1 = array_rand(array_flip($chord_numbers));
	$chord_number_2 = array_rand(array_flip($chord_numbers));
	$chord_number_3 = array_rand(array_flip($chord_numbers));
	$chord_number_4 = array_rand(array_flip($chord_numbers));

	echo "Chorus Chords: $chord_number_1, $chord_number_2, $chord_number_3, $chord_number_4 \n";
}

function pickASignature($time_signatures) {
	$time_signature = array_rand(array_flip($time_signatures));

	echo "Time Signature: $time_signature \n";
}



pickAKey($song_keys);
pickATempo($song_tempos);
pickASignature($time_signatures);
pickChordNumbersVerse($chord_numbers);
pickChordNumbersChorus($chord_numbers);
