<?php
if ( ! function_exists('cat'))
{
	/**
	 * Validation Error String
	 *
	 * Returns all the errors associated with a form submission. This is a helper
	 * function for the form validation class.
	 *
	 * @param	string
	 * @param	string
	 * @return	string
	 */
	function cat($catname = '')
	{
            return $catname."successfully added";

	}
}
?>