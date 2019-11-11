<?php
/**
 * Tests for AMP_Image_List, AMP_Captioned_Image, and AMP_Image classes.
 *
 * @package AMP
 */

/**
 * Tests for AMP image collection classes.
 *
 * @covers AMP_Image_List, AMP_Captioned_Image, AMP_Image
 */
class Test_AMP_Image_List extends WP_UnitTestCase {

	/**
	 * Gets the data to test adding images.
	 *
	 * @return array[] An associative array, including the images and the expected count.
	 */
	public function get_image_list_data() {
		$dom = new DOMDocument();
		return [
			'no_image' => [
				[],
				0,
			],
			'1_image'  => [
				[ AMP_DOM_Utils::create_node( $dom, 'amp-img', [] ) ],
				1,
			],
			'4_images' => [
				[
					AMP_DOM_Utils::create_node( $dom, 'amp-img', [] ),
					AMP_DOM_Utils::create_node( $dom, 'amp-img', [] ),
					AMP_DOM_Utils::create_node( $dom, 'amp-img', [] ),
					AMP_DOM_Utils::create_node( $dom, 'amp-img', [] ),
				],
				4,
			],
		];
	}

	/**
	 * Test adding images and counting them.
	 *
	 * @dataProvider get_image_list_data
	 * @covers \AMP_Image_List::add()
	 * @covers \AMP_Image_List::count()
	 *
	 * @param array[] $images         The images to add.
	 * @param string  $expected_count The expected count after adding the images.
	 */
	public function test_image_list_add( $images, $expected_count ) {
		$image_list = new AMP_Image_List();
		foreach ( $images as $image ) {
			$image_list->add( $image, '' );
		}

		$this->assertEquals( $expected_count, $image_list->count() );
	}

	/**
	 * Test the iteration of the images.
	 *
	 * @dataProvider get_image_list_data
	 * @covers \AMP_Image_List::add()
	 * @covers \AMP_Image_List::getIterator()
	 *
	 * @param array[] $images The images to add.
	 * @param string  $expected_count The expected count after adding the images.
	 */
	public function test_image_list_get_iterator( $images, $expected_count ) {
		$image_list = new AMP_Image_List();
		foreach ( $images as $image ) {
			$image_list->add( $image, '' );
		}

		$iteration_count = 0;
		foreach ( $image_list as $image_list_image ) {
			unset( $image_list_image );
			$iteration_count++;
		}

		$this->assertEquals( $expected_count, $iteration_count );
	}

	/**
	 * Test get_caption.
	 *
	 * @covers \AMP_Captioned_Image::get_caption()
	 */
	public function test_get_caption() {
		$image_node      = AMP_DOM_Utils::create_node( new DOMDocument(), 'amp-img', [] );
		$caption         = 'This is a caption';
		$captioned_image = new AMP_Captioned_Image( $image_node, $caption );
		$this->assertEquals( $caption, $captioned_image->get_caption() );
	}

	/**
	 * Test get_image_node.
	 *
	 * @covers \AMP_Image::get_image_node()
	 */
	public function test_get_image_node() {
		$image_node = AMP_DOM_Utils::create_node( new DOMDocument(), 'amp-img', [] );
		$amp_image  = new AMP_Image( $image_node );
		$this->assertEquals( $image_node, $amp_image->get_image_node() );
	}
}
