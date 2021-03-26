<?php

/**
 * Adds Services_Widget widget.
 */
class Services_Widget extends WP_Widget
{

    /**
     * Register widget with WordPress.
     */
    function __construct()
    {
        parent::__construct(
            'servisec_widget', // Base ID
            esc_html__('Services widget', 'text_domain'), // Name
            array('description' => esc_html__('We offer', 'text_domain'),) // Args
        );
    }

    /**
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args     Widget arguments.
     * @param array $instance Saved values from database.
     */
    public function widget($args, $instance)
    {
        echo $args['before_widget'] . '<div class="service">';

        echo $args['before_icon'] . '<div class="service-icon">';

        if (!empty($instance['icon'])) {
            echo  '<i class="' . apply_filters('widget_icon', $instance['icon']) . '"></i>';
        }

        echo $args['after_icon'] . '</div>';

        if (!empty($instance['title'])) {
            echo $args['before_title'] . apply_filters('widget_title', $instance['title']) . $args['after_title'];
        }

        if (!empty($instance['text'])) {
            echo '<p>' . apply_filters('widget_text', $instance['text']) . '</p>';
        }
        echo $args['after_widget'] . '</div>';
    }

    /**
     * Back-end widget form.
     *
     * @see WP_Widget::form()
     *
     * @param array $instance Previously saved values from database.
     */
    public function form($instance)
    {
        $icon = !empty($instance['icon']) ? $instance['icon'] : esc_html__('Enter the class of the font icon', 'text_domain');
        $title = !empty($instance['title']) ? $instance['title'] : esc_html__('Title', 'text_domain');
        $text = !empty($instance['text']) ? $instance['text'] : esc_html__('Enter your text', 'text_domain');
?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('icon')); ?>"><?php esc_attr_e('icon-class:', 'text_domain'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('icon')); ?>" name="<?php echo esc_attr($this->get_field_name('icon')); ?>" type="text" value="<?php echo esc_attr($icon); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_attr_e('Title:', 'text_domain'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('text')); ?>"><?php esc_attr_e('Text:', 'text_domain'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('text')); ?>" name="<?php echo esc_attr($this->get_field_name('text')); ?>" type="text" value="<?php echo esc_attr($text); ?>">
        </p>
<?php
    }

    /**
     * Sanitize widget form values as they are saved.
     *
     * @see WP_Widget::update()
     *
     * @param array $new_instance Values just sent to be saved.
     * @param array $old_instance Previously saved values from database.
     *
     * @return array Updated safe values to be saved.
     */
    public function update($new_instance, $old_instance)
    {
        $instance = array();
        $instance['icon'] = (!empty($new_instance['icon'])) ? sanitize_text_field($new_instance['icon']) : '';
        $instance['title'] = (!empty($new_instance['title'])) ? sanitize_text_field($new_instance['title']) : '';
        $instance['text'] = (!empty($new_instance['text'])) ? sanitize_text_field($new_instance['text']) : '';

        return $instance;
    }
}
