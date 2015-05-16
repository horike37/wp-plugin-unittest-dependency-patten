<?php

class SampleTest extends WP_UnitTestCase {

	function testSample() {
		
		$this->assertTrue( function_exists('get_field') );
	}
}

