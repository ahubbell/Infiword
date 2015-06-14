<?php

/**
 * Sanitizes all variables from our fields and separates complex fields to their sub-fields.
 */
class Kirki_Field {

	/**
	 * Sanitizes the field
	 *
	 * @param array the field definition
	 * @return array
	 */
	public static function sanitize_field( $field ) {

		$field['settings_raw']      = self::sanitize_settings_raw( $field );
		$field['default']           = self::sanitize_default( $field );
		$field['label']             = self::sanitize_label( $field );
		$field['help']              = self::sanitize_help( $field );
		$field['description']       = self::sanitize_description( $field );
		$field['required']          = self::sanitize_required( $field );
		$field['transport']         = self::sanitize_transport( $field );
		$field['type']              = self::sanitize_control_type( $field );
		$field['option_type']       = self::sanitize_type( $field );
		$field['section']           = self::sanitize_section( $field );
		$field['settings']          = self::sanitize_settings( $field );
		$field['priority']          = self::sanitize_priority( $field );
		$field['choices']           = self::sanitize_choices( $field );
		$field['output']            = self::sanitize_output( $field );
		$field['sanitize_callback'] = self::sanitize_callback( $field );
		$field['js_vars']           = self::sanitize_js_vars( $field );
		$field['id']                = self::sanitize_id( $field );
		$field['capability']        = self::sanitize_capability( $field );
		$field['variables']         = self::sanitize_variables( $field );
		$field['active_callback']   = self::sanitize_active_callback( $field );

		return $field;

	}

	/**
	 * Sanitizes the control type.
	 *
	 * @param array the field definition
	 * @return string. If not set, then defaults to text.
	 */
	public static function sanitize_control_type( $field ) {

		if ( ! isset( $field['type'] ) ) {
			return 'text';
		}

		if ( 'checkbox' == $field['type'] ) {

			$field['type'] = ( isset( $field['mode'] ) && 'switch' == $field['mode'] ) ? 'switch' : $field['type'];
			$field['type'] = ( isset( $field['mode'] ) && 'toggle' == $field['mode'] ) ? 'toggle' : $field['type'];

		} elseif ( 'radio' == $field['type'] ) {

			$field['type'] = ( isset( $field['mode'] ) && 'buttonset' == $field['mode'] ) ? 'radio-buttonset' : $field['type'];
			$field['type'] = ( isset( $field['mode'] ) && 'image' == $field['mode'] ) ? 'radio-image' : $field['type'];

		} elseif ( 'group-title' == $field['type'] || 'group_title' == $field['type'] ) {

			$field['type'] = 'custom';

		} elseif ( 'color' == $field['type'] && false !== strpos( $field['default'], 'rgba' ) ) {

			$field['type'] = 'color-alpha';

		}

		return esc_attr( $field['type'] );

	}

	/**
	 * Sanitizes the setting type.
	 *
	 * @param array the field definition
	 * @return string. (theme_mod|option)
	 */
	public static function sanitize_type( $field ) {
		$config = Kirki_Toolkit::config()->get_all();
		return esc_attr( $config['options_type'] );
	}

	/**
	 * Sanitizes the setting variables.
	 *
	 * @param array the field definition
	 * @return string.
	 */
	public static function sanitize_variables( $field ) {
		return ( isset( $field['variables'] ) && is_array( $field['variables'] ) ) ? $field['variables'] : false;
	}

	/**
	 * Sanitizes the setting active callback.
	 *
	 * @param array the field definition
	 * @return string callable function name.
	 */
	public static function sanitize_active_callback( $field ) {
		return ( isset( $field['active_callback'] ) ) ? $field['active_callback'] : 'kirki_field_active_callback';
	}

	/**
	 * Sanitizes the setting permissions.
	 *
	 * @param array the field definition
	 * @return string. (theme_mod|option)
	 */
	public static function sanitize_capability( $field ) {
		if ( ! isset( $field['capability'] ) ) {
			$config = Kirki_Toolkit::config()->get_all();
			return esc_attr( $config['capability'] );
		} else {
			return esc_attr( $field['capability'] );
		}
	}

	/**
	 * Sanitizes the raw setting name.
	 *
	 * @param array the field definition
	 * @return string
	 */
	public static function sanitize_settings_raw( $field ) {

		/**
		 * Compatibility tweak
		 * Previous versions of the Kirki customizer used 'setting' istead of 'settings'.
		 */
		if ( ! isset( $field['settings'] ) && isset( $field['setting'] ) ) {
			$field['settings'] = $field['setting'];
		}

		// Sanitize the field's settings attribute.
		$field['settings'] = sanitize_key( $field['settings'] );

		return $field['settings'];

	}

	/**
	 * Sanitizes the setting name
	 *
	 * @param array the field definition
	 * @return string.
	 */
	public static function sanitize_settings( $field ) {

		$config = Kirki_Toolkit::config()->get_all();

		// Pass this throught the sanitize_settings_raw method first.
		$field['settings'] = self::sanitize_settings_raw( $field );

		// Checking and sanitization of config values is handled by the Config class.
		// If the value of 'option_name' is not empty, then we're also using options instead of theme_mods.
		if ( '' != $config['option_name'] ) {
			$field['settings'] = $config['option_name'] . '[' . $field['settings'] . ']';
		}

		return $field['settings'];

	}

	/**
	 * Sanitizes the control label.
	 *
	 * @param array the field definition
	 * @return string
	 */
	public static function sanitize_label( $field ) {
		return ( isset( $field['label'] ) ) ? esc_html( $field['label'] ) : '';
	}

	/**
	 * Sanitizes the control section
	 *
	 * @param array the field definition
	 * @return string
	 */
	public static function sanitize_section( $field ) {
		return sanitize_key( $field['section'] );
	}

	/**
	 * Sanitizes the control id.
	 * Sanitizing the ID should happen after the 'settings' sanitization.
	 * This way we can also properly handle cases where the option_type is set to 'option'
	 * and we're using an array instead of individual options.
	 *
	 * @param array the field definition
	 * @return string
	 */
	public static function sanitize_id( $field ) {
		$id = str_replace( '[', '-', str_replace( ']', '', $field['settings'] ) );
		return sanitize_key( $id );
	}

	/**
	 * Sanitizes the setting default value
	 *
	 * @param array the field definition
	 * @return mixed
	 */
	public static function sanitize_default( $field ) {
		// If ['default'] is not set, set an empty value
		if ( ! isset( $field['default'] ) ) {
			$field['default'] = '';
		}

		/**
		 * Sortable controls need a serialized array as the default value.
		 * Since we're using normal arrays to set our defaults when defining the fields, we need to serialize that value here.
		 */
		if ( 'sortable' == $field['type'] && isset( $field['default'] ) && ! empty( $field['default'] ) ) {
			$field['default'] = maybe_serialize( $field['default'] );
		}

		return $field['default'];

	}

	/**
	 * Sanitizes the control description
	 *
	 * @param array the field definition
	 * @return string
	 */
	public static function sanitize_description( $field ) {

		/**
		 * Compatibility tweak
		 *
		 * Previous verions of the Kirki Customizer had the 'description' field mapped to the new 'help'
		 * and instead of 'description' we were using 'subtitle'.
		 * This has been deprecated in favor of WordPress core's 'description' field that was recently introduced.
		 *
		 */
		if ( isset( $field['subtitle'] ) ) {
			$field['description'] = $field['subtitle'];
		}

		return ( isset( $field['description'] ) ) ? esc_html( $field['description'] ) : '';

	}

	/**
	 * Sanitizes the control help
	 *
	 * @param array the field definition
	 * @return string
	 */
	public static function sanitize_help( $field ) {

		/**
		 * Compatibility tweak
		 *
		 * Previous verions of the Kirki Customizer had the 'description' field mapped to the new 'help'
		 * and instead of 'description' we were using 'subtitle'.
		 * This has been deprecated in favor of WordPress core's 'description' field that was recently introduced.
		 *
		 */
		if ( isset( $field['subtitle'] ) ) {
			// Use old arguments form.
			$field['help'] = ( isset( $field['description'] ) ) ? $field['description'] : '';
		}
		return isset( $field['help'] ) ? esc_html( $field['help'] ) : '';

	}

	/**
	 * Sanitizes the control choices.
	 *
	 * @param array the field definition
	 * @return array
	 */
	public static function sanitize_choices( $field ) {
		return isset( $field['choices'] ) ? $field['choices'] : array();
	}

	/**
	 * Sanitizes the control output
	 *
	 * @param array the field definition
	 * @return array
	 */
	public static function sanitize_output( $field ) {
		// Further sanitization on the values of the array happens near the output.
		// This just makes sure the value is defined to avoid errors.
		return isset( $field['output'] ) ? $field['output'] : null;
	}

	/**
	 * Sanitizes the control transport.
	 *
	 * @param array the field definition
	 * @return string postMessage|refresh (defaults to refresh)
	 */
	public static function sanitize_transport( $field ) {
		return ( isset( $field['transport'] ) && 'postMessage' == $field['transport'] ) ? 'postMessage' : 'refresh';
	}

	/**
	 * Sanitizes the setting sanitize_callback
	 *
	 * @param array the field definition
	 * @return mixed the sanitization callback for this setting
	 */
	public static function sanitize_callback( $field ) {

		if ( isset( $field['sanitize_callback'] ) && ! empty( $field['sanitize_callback'] ) ) {
			return $field['sanitize_callback'];
		} else { // Fallback callback
			return self::fallback_callback( $field['type'] );
		}

	}

	/**
	 * Sanitizes the control js_vars.
	 *
	 * @param array the field definition
	 * @return array
	 */
	public static function sanitize_js_vars( $field ) {
		if ( isset( $field['js_vars'] ) ) {
			return $field['js_vars'];
		} else {
			return null;
		}
	}

	/**
	 * Sanitizes the control required argument.
	 *
	 * @param array the field definition
	 * @return array
	 */
	public static function sanitize_required( $field ) {
		// The individual options of the array get sanitized in the Required class.
		// We're just making sure this is defined here.
		return isset( $field['required'] ) ? $field['required'] : false;
	}

	/**
	 * Sanitizes the control priority
	 *
	 * @param array the field definition
	 * @return int
	 */
	public static function sanitize_priority( $field ) {

		if ( isset( $field['priority'] ) ) {
			return intval( $field['priority'] );
		} else {
			return 10;
		}

	}

	/**
	 * Build the background fields.
	 * Takes a single field with type = background and explodes it to multiple controls.
	 */
	public static function build_background_fields( $fields ) {
		$i18n = Kirki_Toolkit::i18n();

		foreach ( $fields as $field ) {

			if ( 'background' == $field['type'] ) {

				// Set any unset values to avoid PHP warnings below.
				$field['settings']    = ( ! isset( $field['settings'] ) && isset( $field['setting'] ) ) ? $field['setting'] : $field['settings'];
				$field['section']     = ( isset( $field['section'] ) )     ? $field['section']     : 'background';
				$field['help']        = ( isset( $field['help'] ) )        ? $field['help']        : '';
				$field['description'] = ( isset( $field['description'] ) ) ? $field['description'] : $i18n['background-color'];
				$field['required']    = ( isset( $field['required'] ) )    ? $field['required']    : array();
				$field['transport']   = ( isset( $field['transport'] ) )   ? $field['transport']   : 'refresh';
				$field['default']     = ( isset( $field['default'] ) )     ? $field['default']     : array();
				$field['priority']    = ( isset( $field['priority'] ) )    ? $field['priority']    : 10;
				$field['output']      = ( isset( $field['output'] ) && '' != $field['output'] ) ? $field['output'] : '';

				if ( isset( $field['default']['color'] ) ) {
					$color_mode = ( false !== strpos( $field['default']['color'], 'rgba' ) ) ? 'color-alpha' : 'color';
					if ( isset( $field['default']['opacity'] ) ) {
						$color_mode = 'color-alpha';
					}
					$fields[] = array(
						'type'        => $color_mode,
						'label'       => isset( $field['label'] ) ? $field['label'] : '',
						'section'     => $field['section'],
						'settings'    => $field['settings'] . '_color',
						'priority'    => $field['priority'],
						'help'        => $field['help'],
						'description' => $field['description'],
						'required'    => $field['required'],
						'transport'   => $field['transport'],
						'default'     => $field['default']['color'],
						'output'      => ( '' != $field['output'] ) ? array(
							array(
								'element'  => $field['output'],
								'property' => 'background-color',
								'callback' => array( 'Kirki_Sanitize', 'color' ),
							)
						) : '',
					);
				}

				if ( isset( $field['default']['image'] ) ) {
					$fields[] = array(
						'type'        => 'image',
						'label'       => '',
						'section'     => $field['section'],
						'settings'    => $field['settings'] . '_image',
						'priority'    => $field['priority'] + 1,
						'help'        => '',
						'description' => $i18n['background-image'],
						'required'    => $field['required'],
						'transport'   => $field['transport'],
						'default'     => $field['default']['image'],
						'output'      => ( '' != $field['output'] ) ? array(
							array(
								'element'  => $field['output'],
								'property' => 'background-image',
								'callback' => 'esc_url_raw',
							)
						) : '',
					);
				}

				if ( isset( $field['default']['repeat'] ) ) {
					$fields[] = array(
						'type'        => 'select',
						'label'       => '',
						'section'     => $field['section'],
						'settings'    => $field['settings'] . '_repeat',
						'priority'    => $field['priority'] + 2,
						'choices'     => array(
							'no-repeat' => $i18n['no-repeat'],
							'repeat'    => $i18n['repeat-all'],
							'repeat-x'  => $i18n['repeat-x'],
							'repeat-y'  => $i18n['repeat-y'],
							'inherit'   => $i18n['inherit'],
						),
						'help'        => '',
						'description' => $i18n['background-repeat'],
						'required'    => $field['required'],
						'transport'   => $field['transport'],
						'default'     => $field['default']['repeat'],
						'output'      => ( '' != $field['output'] ) ? array(
							array(
								'element'  => $field['output'],
								'property' => 'background-repeat',
								'callback' => 'esc_attr',
							)
						) : '',
					);
				}

				if ( isset( $field['default']['size'] ) ) {
					$fields[] = array(
						'type'        => 'radio-buttonset',
						'label'       => '',
						'section'     => $field['section'],
						'settings'    => $field['settings'] . '_size',
						'priority'    => $field['priority'] + 3,
						'choices'     => array(
							'inherit' => $i18n['inherit'],
							'cover'   => $i18n['cover'],
							'contain' => $i18n['contain'],
						),
						'help'        => '',
						'description' => $i18n['background-size'],
						'required'    => $field['required'],
						'transport'   => $field['transport'],
						'default'     => $field['default']['size'],
						'output'      => ( '' != $field['output'] ) ? array(
							array(
								'element'  => $field['output'],
								'property' => 'background-size',
								'callback' => 'esc_attr',
							)
						) : '',
					);
				}

				if ( isset( $field['default']['attach'] ) ) {
					$fields[] = array(
						'label'       => '',
						'type'        => 'radio-buttonset',
						'section'     => $field['section'],
						'settings'    => $field['settings'] . '_attach',
						'priority'    => $field['priority'] + 4,
						'choices'     => array(
							'inherit' => $i18n['inherit'],
							'fixed'   => $i18n['fixed'],
							'scroll'  => $i18n['scroll'],
						),
						'help'        => '',
						'description' => $i18n['background-attachment'],
						'required'    => $field['required'],
						'transport'   => $field['transport'],
						'default'     => $field['default']['attach'],
						'output'      => ( '' != $field['output'] ) ? array(
							array(
								'element'  => $field['output'],
								'property' => 'background-attachment',
								'callback' => 'esc_attr',
							)
						) : '',
					);
				}

				if ( isset( $field['default']['position'] ) ) {
					$fields[] = array(
						'type'        => 'select',
						'label'       => '',
						'section'     => $field['section'],
						'settings'    => $field['settings'] . '_position',
						'priority'    => $field['priority'] + 5,
						'choices'     => array(
							'left-top'      => $i18n['left-top'],
							'left-center'   => $i18n['left-center'],
							'left-bottom'   => $i18n['left-bottom'],
							'right-top'     => $i18n['right-top'],
							'right-center'  => $i18n['right-center'],
							'right-bottom'  => $i18n['right-bottom'],
							'center-top'    => $i18n['center-top'],
							'center-center' => $i18n['center-center'],
							'center-bottom' => $i18n['center-bottom'],
						),
						'help'        => '',
						'description' => $i18n['background-position'],
						'required'    => $field['required'],
						'transport'   => $field['transport'],
						'default'     => $field['default']['position'],
						'output'      => ( '' != $field['output'] ) ? array(
							array(
								'element'  => $field['output'],
								'property' => 'background-position',
								'callback' => 'esc_attr',
							)
						) : '',
					);
				}

			}

		}

		return $fields;

	}

	/**
	 * Sanitizes the control transport.
	 *
	 * @param string the control type
	 * @return string the function name of a sanitization callback
	 */
	public static function fallback_callback( $field_type ) {

		switch ( $field_type ) {
			case 'checkbox' :
				$sanitize_callback = array( 'Kirki_Sanitize', 'checkbox' );
				break;
			case 'color' :
				$sanitize_callback = array( 'Kirki_Color', 'sanitize_hex' );
				break;
			case 'color-alpha' :
				$sanitize_callback = array( 'Kirki_Sanitize', 'color' );
				break;
			case 'image' :
				$sanitize_callback = 'esc_url_raw';
				break;
			case 'radio' :
				$sanitize_callback = array( 'Kirki_Sanitize', 'choice' );
				break;
			case 'radio-image' :
				$sanitize_callback = array( 'Kirki_Sanitize', 'choice' );
				break;
			case 'radio-buttonset' :
				$sanitize_callback = array( 'Kirki_Sanitize', 'choice' );
				break;
			case 'toggle' :
				$sanitize_callback = array( 'Kirki_Sanitize', 'checkbox' );
				break;
			case 'switch' :
				$sanitize_callback = array( 'Kirki_Sanitize', 'checkbox' );
				break;
			case 'select' :
				$sanitize_callback = array( 'Kirki_Sanitize', 'choice' );
				break;
			case 'dropdown-pages' :
				$sanitize_callback = array( 'Kirki_Sanitize', 'choice' );
				break;
			case 'slider' :
				$sanitize_callback = array( 'Kirki_Sanitize', 'number' );
				break;
			case 'text' :
				$sanitize_callback = 'esc_textarea';
				break;
			case 'textarea' :
				$sanitize_callback = 'esc_textarea';
				break;
			case 'editor' :
				$sanitize_callback = 'esc_textarea';
				break;
			case 'upload' :
				$sanitize_callback = 'esc_url_raw';
				break;
			case 'number' :
				$sanitize_callback = array( 'Kirki_Sanitize', 'number' );
				break;
			case 'multicheck' :
				$sanitize_callback = array( 'Kirki_Sanitize', 'multicheck' );
				break;
			case 'sortable' :
				$sanitize_callback = array( 'Kirki_Sanitize', 'sortable' );
				break;
			case 'palette' :
				$sanitize_callback = array( 'Kirki_Sanitize', 'choice' );
				break;
			default :
				$sanitize_callback = array( 'Kirki_Sanitize', 'unfiltered' );
		}

		return $sanitize_callback;

	}

}
