<?php


class MusicMaker {

	const SONG_DATA = [
	'keys' => ['C', 'G', 'D', 'A', 'E', 'B', 'F#', 'Db', 'Ab', 'Eb', 'Bb', 'F'],
	'tempos' => ['85', '90', '95', '100', '105', '110', '115', '120', '125', '130'],
	'time' => ['4/4', '3/4', '6/8'],
	];

	const MAJOR_CHORD_NAMES = [
	'numbers' => ['I', 'ii', 'iii', 'IV', 'V', 'vi', 'vii (dim)'],
	'C' => ['C', 'Dm', 'Em', 'F', 'G', 'Am', 'B dim'],
	'G' => ['G', 'Am', 'Bm', 'C', 'D', 'Em', 'F# dim'],
	'D' => ['D', 'Em', 'F#m', 'G', 'A', 'Bm', 'C# dim'],
	'A' => ['A', 'Bm', 'C#m', 'D', 'E', 'F#m', 'G# dim'],
	'E' => ['E', 'F#m', 'G#m', 'A', 'B', 'C#m', 'D# dim'],
	'B' => ['B', 'C#m', 'D#m', 'E', 'F#', 'G#m', 'A# dim'],
	'F#' => ['F#', 'G#m', 'A#m', 'B', 'C#', 'D#m', 'E# dim'],
	'Db' => ['Db', 'Ebm', 'Fm', 'Gb', 'Ab', 'Bbm', 'C dim'],
	'Ab' => ['Ab', 'Bbm', 'Cm', 'Db', 'Eb', 'Fm', 'G dim'],
	'Eb' => ['Eb', 'Fm', 'Gm', 'Ab', 'Bb', 'Cm', 'D dim'],
	'Bb' => ['Bb', 'Cm', 'Dm', 'Eb', 'F', 'Gm', 'A dim'],
	'F' => ['F', 'Gm', 'Am', 'Bb', 'C', 'Dm', 'E dim'],
	];

	const MINOR_CHORD_NAMES = [
	'numbers' => ['i', 'ii (dim)', 'III', 'iv', 'v', 'VI', 'VII'],
	'Am' => ['Am', 'B dim', 'C', 'Dm', 'Em', 'F', 'G'],
	'Em' => ['Em', 'F# dim', 'G', 'Am', 'Bm', 'C', 'D'],
	'Bm' => ['Bm', 'C# dim', 'D', 'E', 'F#m', 'G', 'A'],
	'F#m' => ['F#m', 'G# dim', 'A', 'Bm', 'C#m', 'D', 'E'],
	'Dbm' => ['C#m', 'D# dim', 'E', 'F#m', 'G#m', 'A', 'B'],
	'Abm' => ['G#m', 'A# dimm', 'B', 'C#m', 'D#m', 'E', 'F#'],
	'Ebm' => ['D#m', 'E# dimm', 'F#', 'G#m', 'A#m', 'B', 'C#'],
	'Bbm' => ['Bbm', 'C dim', 'Db', 'Ebm', 'Fm', 'Gb', 'Ab'],
	'Fm' => ['Fm', 'G dim', 'Ab', 'Bbm', 'Cm', 'Db', 'Eb'],
	'Cm' => ['Cm', 'D dim', 'Eb', 'Fm', 'Gm', 'Ab', 'Bb'],
	'Gm' => ['Gm', 'A dim', 'Bb', 'Cm', 'Dm', 'Eb', 'F'],
	'Dm' => ['DM', 'E dim', 'F', 'Gm', 'Am', 'Bb', 'C'],
	];

	const PROGRESSIONS = [
	'0' => [0, 4, 5, 3],
	'1' => [0, 5, 3, 4],
	'2' => [1, 3, 4],
	'3' => [0, 3, 4, 3],
	'4' => [4, 3, 0],
	'5' => [5, 3, 0, 4],
	'6' => [0, 5, 1, 4],
	'7' => [0, 4, 5, 2, 3],
	];

	public $key;
	public $tempo;
	public $time; 
	public $chords;

	public function __construct() {
		$this->blah

	}

}