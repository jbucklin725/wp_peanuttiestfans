<?php
/**
 * Select field class
 *
 * @package notification
 */

namespace BracketSpace\Notification\Utils\Settings\CoreFields;

/**
 * Select class
 */
class Select {

	/**
	 * Select field
	 * You can define `multiple` addon to make it multiple
	 * If you want to use Selectize.js, set `pretty` addon to true
	 *
	 * @param  Field $field Field instance.
	 * @return void
	 */
	public function input( $field ) {

		$multiple = $field->addon( 'multiple' ) ? 'multiple="multiple"' : '';
		$name     = $field->addon( 'multiple' ) ? $field->input_name() . '[]' : $field->input_name();
		$pretty   = $field->addon( 'pretty' ) ? 'pretty-select' : '';

		echo '<select ' . esc_attr( $multiple ) . ' name="' . esc_attr( $name ) . '" id="' . $field->input_id() . '" class="' . esc_attr( $pretty ) . '">'; // WPCS: XSS ok.

		foreach ( $field->addon( 'options' ) as $option_value => $option_label ) {

			$selected = in_array( $option_value, (array) $field->value(), true ) ? 'selected="selected"' : '';
			echo '<option value="' . esc_attr( $option_value ) . '" ' . $selected . '>' . esc_html( $option_label ) . '</option>'; // WPCS: XSS ok.

		}

		echo '</select>';

	}

	/**
	 * Sanitize select value
	 * Uses sanitize_text_field()
	 *
	 * @param  mixed $value saved value.
	 * @return mixed          sanitized value
	 */
	public function sanitize( $value ) {

		if ( is_array( $value ) ) {

			foreach ( $value as $i => $v ) {
				$value[ $i ] = sanitize_text_field( $v );
			}
		} else {
			$value = sanitize_text_field( $value );
		}

		return $value;

	}

}
