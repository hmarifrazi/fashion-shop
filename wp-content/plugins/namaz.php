<?php
/*
Plugin Name: Namaz Time
Plugin URI: https://wdpf50.com
Description: Namaz time of chittagong
Version: 1.0
License: GPLv2
Author: IDB-WDPF-R50
Author URI: https://wdpf50.com/
*/
class Namaz_Widget extends WP_Widget {

	// Main constructor
	public function __construct() {
		parent::__construct(
			'namaz_widget',
			__( 'Namaz', 'text_domain' ),
			array(
				'customize_selective_refresh' => true,
			)
		);
	}

	// The widget form (for the backend )
	public function form( $instance ) {

		// Set widget defaults
		$defaults = array(
			'title'    => '',
			'textarea' => '',
		);
		
		// Parse current settings with defaults
		extract( wp_parse_args( ( array ) $instance, $defaults ) ); ?>

		<?php // Widget Title ?>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php _e( 'Widget Title', 'text_domain' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>
		
		<?php // Textarea Field ?>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'textarea' ) ); ?>"><?php _e( 'Details:', 'text_domain' ); ?></label>
			<textarea class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'textarea' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'textarea' ) ); ?>"><?php echo wp_kses_post( $textarea ); ?></textarea>
		</p>

	<?php }

	// Update widget settings
	public function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title']    = isset( $new_instance['title'] ) ? wp_strip_all_tags( $new_instance['title'] ) : '';
		$instance['textarea'] = isset( $new_instance['textarea'] ) ? wp_kses_post( $new_instance['textarea'] ) : '';
		return $instance;
	}

	// Display the widget
	public function widget( $args, $instance ) {
		extract( $args );
		// Check the widget options
		$title    = isset( $instance['title'] ) ? apply_filters( 'widget_title', $instance['title'] ) : '';
		$textarea = isset( $instance['textarea'] ) ?$instance['textarea'] : '';
		// WordPress core before_widget hook (always include )
		echo $before_widget;

		// Display the widget
		echo '<div class="widget-text wp_widget_plugin_box text-center">';

			// Display widget title if defined
			if ( $title ) {
				echo "<h2 class='text-center'>" . $title . "</h2>";
			}

			// Display textarea field
			if ( $textarea ) {
				echo '<p>' . $textarea . '</p>';
			}
		echo '</div>';

		// WordPress core after_widget hook (always include )
		echo $after_widget;
		
		$namaz=json_decode(file_get_contents('https://api.aladhan.com/v1/timings/1398332113?latitude=22.3468&longitude=91.83&method=2'));
		//print_r( $namaz);echo "<br><br>";
		echo "<table class='table'><tr><th>Namaz</th><th>Time</th></tr>";
		/* fajr */
		echo "<tr><td>Fajr</td><td>";
		echo ( date('h:i A',strtotime('+45 minutes',strtotime($namaz->data->timings->Fajr))));
		echo "</td></tr>";
		/* Dhuhr */
		echo "<tr><td>Dhuhr</td><td>";
		echo ( date('h:i A',strtotime('+97 minutes',strtotime($namaz->data->timings->Dhuhr))));
		echo "</td></tr>";
		/* Asr */
		echo "<tr><td>Asr</td><td>";
		echo ( date('h:i A',strtotime('+62 minutes',strtotime($namaz->data->timings->Asr))));
		echo "</td></tr>";
		/* Maghrib */
		echo "<tr><td>Maghrib</td><td>";
		echo ( date('h:i A',strtotime('+0 minutes',strtotime($namaz->data->timings->Maghrib))));
		echo "</td></tr>";
		/* Isha */
		echo "<tr><td>Isha</td><td>";
		echo ( date('h:i A',strtotime('+79 minutes',strtotime($namaz->data->timings->Isha))));
		echo "</td></tr>";
		echo "<tr><th colspan='2'> Cannot pray</th></tr>";
		/* Sunrise */
		echo "<tr><td>Sunrise</td><td>";
		echo ( date('h:i A',strtotime('+0 minutes',strtotime($namaz->data->timings->Sunrise))));
		echo "</td></tr>";
		/* Sunset */
		echo "<tr><td>Sunset</td><td>";
		echo ( date('h:i A',strtotime('+0 minutes',strtotime($namaz->data->timings->Sunset))));
		echo "</td></tr>";
		
		echo "</table>";

	}

}

// Register the widget
function my_namaz_widget() {
	register_widget( 'Namaz_Widget' );
}
add_action( 'widgets_init', 'my_namaz_widget' );
?>