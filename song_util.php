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
$chords = '';

// Chords in the Key:
$key_of_c_major = ["I"=>"C","ii"=>"Dm","iii"=>"Em","IV"=>"F","V"=>"G","vi"=>"Am"];
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
	$song_key = 'C'; //array_rand(array_flip($song_keys));
	
	echo "Song Key: $song_key \n";
}

function pickATempo($song_tempos) {
	$song_tempo = array_rand(array_flip($song_tempos));

	echo "Tempo: $song_tempo \n";
}

// probably need to do a for each loop here instead. that makes sense. thanks sara!
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

function showTheChords($song_key) {
	$key_of_c_major = ["I"=>"C" ,"ii"=>"Dm" ,"iii"=>"Em" ,"IV"=>"F" ,"V"=>"G" ,"vi"=>"Am"];
	$chords = $key_of_c_major;
	
	echo 'Chords: ' . implode(", ", $chords) . "\n";
}

pickAKey($song_keys);
pickATempo($song_tempos);
pickASignature($time_signatures);
showTheChords($chords);
pickChordNumbersVerse($chord_numbers);
pickChordNumbersChorus($chord_numbers);
