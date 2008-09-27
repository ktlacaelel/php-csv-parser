<?php
// Call csvTest::main() if this source file is executed directly.
if (!defined("PHPUnit2_MAIN_METHOD")) {
    define("PHPUnit2_MAIN_METHOD", "csvTest::main");
}

require_once "PHPUnit2/Framework/TestCase.php";
require_once "PHPUnit2/Framework/TestSuite.php";

// You may remove the following line when all tests have been implemented.
require_once "PHPUnit2/Framework/IncompleteTestError.php";

require_once dirname(__FILE__) . "/../lib/csv.php";

/**
 * Test class for csv.
 * Generated by PHPUnit2_Util_Skeleton on 2008-09-25 at 13:46:04.
 */
class csvTest extends PHPUnit2_Framework_TestCase {

    /**
     * Runs the test methods of this class.
     *
     * @access public
     * @static
     */
    public static function main() {
        require_once "PHPUnit2/TextUI/TestRunner.php";

        $suite  = new PHPUnit2_Framework_TestSuite("csvTest");
        $result = PHPUnit2_TextUI_TestRunner::run($suite);
    }

    /**
     * Sets up the fixture, for example, open a network connection.
     * This method is called before a test is executed.
     *
     * @access protected
     */
    protected function setUp() {
        $this->csv = new csv;
    }

    /**
     * Tears down the fixture, for example, close a network connection.
     * This method is called after a test is executed.
     *
     * @access protected
     */
    protected function tearDown() {
        $this->csv = null;
    }

    /**
     * fixtures path
     * 
     * @var     string
     * @access  protected
     */
    protected $fpath = 'data/';

    protected $ninth_row_from_symmetric = array (
      0 => '9aa',
      1 => '9bb',
      2 => '9cc',
      3 => '9dd',
      4 => '9ee',
    );

    protected $non_valid_files = array(
       "no_exists.csv" => 'non existent file',
       "invalid_ext.csv.txt" => 'invalid extension file',
        );

    protected $valid_files = array(
       "empty.csv" => 'emtpy csv file',
       "uppercased.CSV" => 'upper cased extension',
       "multcased.CsV" => 'multiple cased extension',
       "symmetric.csv" => 'symmetric data',
       "asymmetric.csv" => 'asymmetric data',
       "escape_ok.csv" => 'valid escape syntax file',
        );

    protected $expected_headers = array('COL_1', 'COL_2', 'COL_3', 
        'COL_4', 'COL_5');

    protected $original_headers = array(
      'header_a',
      'header_b',
      'header_c',
      'header_d',
      'header_e',
    );

    protected $symmetric_connection = array (
      0 => 
      array (
        'header_a' => '1aa',
        'header_b' => '1bb',
        'header_c' => '1cc',
        'header_d' => '1dd',
        'header_e' => '1ee',
      ),
      1 => 
      array (
        'header_a' => '2aa',
        'header_b' => '2bb',
        'header_c' => '2cc',
        'header_d' => '2dd',
        'header_e' => '2ee',
      ),
      2 => 
      array (
        'header_a' => '3aa',
        'header_b' => '3bb',
        'header_c' => '3cc',
        'header_d' => '3dd',
        'header_e' => '3ee',
      ),
      3 => 
      array (
        'header_a' => '4aa',
        'header_b' => '4bb',
        'header_c' => '4cc',
        'header_d' => '4dd',
        'header_e' => '4ee',
      ),
      4 => 
      array (
        'header_a' => '5aa',
        'header_b' => '5bb',
        'header_c' => '5cc',
        'header_d' => '5dd',
        'header_e' => '5ee',
      ),
      5 => 
      array (
        'header_a' => '6aa',
        'header_b' => '6bb',
        'header_c' => '6cc',
        'header_d' => '6dd',
        'header_e' => '6ee',
      ),
      6 => 
      array (
        'header_a' => '7aa',
        'header_b' => '7bb',
        'header_c' => '7cc',
        'header_d' => '7dd',
        'header_e' => '7ee',
      ),
      7 => 
      array (
        'header_a' => '8aa',
        'header_b' => '8bb',
        'header_c' => '8cc',
        'header_d' => '8dd',
        'header_e' => '8ee',
      ),
      8 => 
      array (
        'header_a' => '9aa',
        'header_b' => '9bb',
        'header_c' => '9cc',
        'header_d' => '9dd',
        'header_e' => '9ee',
      ),
    );

    // see asymmetric file
    protected $asymmetric_rows = array (
      0 => 
      array (
        0 => '5aa',
        1 => '5bb',
        2 => '5cc',
        3 => '5dd',
        4 => '5ee',
        5 => 'extra1',
      ),
      1 => 
      array (
        0 => '8aa',
        1 => '8bb',
        2 => '8cc',
        3 => '8dd',
        4 => '8ee',
        5 => 'extra2',
      ),
    );

    protected $expected_column = array (
      0 => '1cc',
      1 => '2cc',
      2 => '3cc',
      3 => '4cc',
      4 => '5cc',
      5 => '6cc',
      6 => '7cc',
      7 => '8cc',
      8 => '9cc',
    );

    protected $expected_raw = array (
      0 => 
      array (
        0 => 'h_one',
        1 => 'h_two',
        2 => 'h_three',
      ),
      1 => 
      array (
        1 => 
        array (
          0 => 'v_1one',
          1 => 'v_1two',
          2 => 'v_1three',
        ),
        2 => 
        array (
          0 => 'v_2one',
          1 => 'v_2two',
          2 => 'v_2three',
        ),
        3 => 
        array (
          0 => 'v_3one',
          1 => 'v_3two',
          2 => 'v_3three',
        ),
        4 => 
        array (
          0 => '',
        ),
      ),
    );

    protected $expected_escaped = array (
      0 => 
      array (
        'one' => 'thie,',
        'two' => 'adn',
        'three' => 'thei',
      ),
      1 => 
      array (
        'one' => 'thie',
        'two' => 'adn',
        'three' => 'thei',
      ),
    );

    public function testUses() {

        // must false when a file is not valid
        foreach ($this->non_valid_files as $file => $msg) {
            $this->assertFalse($this->csv->uses($this->fpath . $file), $msg);
        }

        // oposite
        foreach ($this->valid_files as $file => $msg) {
            $this->assertTrue($this->csv->uses($this->fpath . $file), $msg);
        }
    }

    public function testSettings() {
        $new_delim = '>>>>';
        $this->csv->settings(array('delimiter' => $new_delim));

        $expected = array(
            'delimiter' => $new_delim,
            'eol' => ";",
            'length' => 999999,
            'escape' => '"'
        );

        $msg = 'settings where not parsed correctly!';
        $this->assertEquals($expected, $this->csv->settings, $msg);
    }

    public function testHeaders() {

        $expected = array (
          0 => 'header_a',
          1 => 'header_b',
          2 => 'header_c',
          3 => 'header_d',
          4 => 'header_e',
        );
        $this->csv->uses('data/symmetric.csv');
        $result = $this->csv->headers();
        $this->assertEquals($expected, $result);
    }

    public function testConnect() {
        $this->assertTrue($this->csv->uses('data/symmetric.csv'));
        $this->assertEquals($this->symmetric_connection, $this->csv->connect());
    }

    public function test_connect_must_return_emtpy_arr_when_not_asymmetric()
    {
        $this->assertTrue($this->csv->uses('data/escape_ng.csv'));
        $this->assertEquals(array(), $this->csv->connect());
    }

    public function testSymmetric_OK() {
        // true
        $this->assertTrue($this->csv->uses('data/symmetric.csv'));
        $this->assertTrue($this->csv->symmetric());
    }

    public function testSymmetric_NG() {
        // true
        $this->assertTrue($this->csv->uses('data/asymmetric.csv'));
        $this->assertFalse($this->csv->symmetric());
    }

    public function testAsymmetry() {
        $this->assertTrue($this->csv->uses('data/asymmetric.csv'));
        $result = $this->csv->asymmetry();
        $this->assertEquals($this->asymmetric_rows, $result);
    }

    public function testColumn() {
        $this->assertTrue($this->csv->uses('data/asymmetric.csv'));
        $result = $this->csv->column('header_c');

        $this->assertEquals($this->expected_column, $result);

    }

    public function testRaw_array() {
        $this->assertTrue($this->csv->uses('data/raw.csv'));
        $this->assertEquals($this->expected_raw, $this->csv->raw_array());
    }

    public function test_if_connect_ignores_valid_escaped_delims()
    {
        $this->assertTrue($this->csv->uses('data/escape_ok.csv'));
        $this->assertEquals($this->expected_escaped, $this->csv->connect());
    }

    public function test_create_headers_must_generate_headers_for_symmetric_data()
    {
        $this->assertTrue($this->csv->uses('data/symmetric.csv'));
        $this->assertTrue($this->csv->create_headers('COL'));
        $this->assertEquals($this->expected_headers, $this->csv->headers());
    }

    public function tets_create_headers_must_not_create_when_data_is_asymmetric()
    {
        $this->assertTrue($this->csv->uses('data/asymmetric.csv'));
        $this->assertFalse($this->csv->create_headers('COL'));
        $this->assertEquals($this->original_headers, $this->csv->headers());
    }

    public function test_inject_headers_must_inject_headers_for_symmetric_data()
    {
        $this->assertTrue($this->csv->uses('data/symmetric.csv'));
        $this->assertEquals($this->original_headers, $this->csv->headers());
        $this->assertTrue($this->csv->inject_headers($this->expected_headers));
        $this->assertEquals($this->expected_headers, $this->csv->headers());
    }

    public function test_inject_headers_must_not_inject_when_data_is_asymmetric()
    {
        $this->assertTrue($this->csv->uses('data/asymmetric.csv'));
        $this->assertEquals($this->original_headers, $this->csv->headers());
        $this->assertFalse($this->csv->inject_headers($this->expected_headers));
        $this->assertEquals($this->original_headers, $this->csv->headers());
    }

    public function test_row_count_is_correct()
    {
        $this->assertTrue($this->csv->uses('data/symmetric.csv'));
        $expected_count = count($this->symmetric_connection);
        $this->assertEquals($expected_count, $this->csv->count_rows());
    }

    public function test_row_fetching_returns_correct_result()
    {
        $this->assertTrue($this->csv->uses('data/symmetric.csv'));
        $this->assertEquals($this->ninth_row_from_symetric, $this->csv->row(9));
    }

    public function test_row_must_be_empty_array_when_row_does_not_exist()
    {
        $this->assertTrue($this->csv->uses('data/symmetric.csv'));
        $this->assertEquals(array(), $this->csv->row(-1));
        $this->assertEquals(array(), $this->csv->row(10));
    }

}

// Call csvTest::main() if this source file is executed directly.
if (PHPUnit2_MAIN_METHOD == "csvTest::main") {
    csvTest::main();
}
?>
