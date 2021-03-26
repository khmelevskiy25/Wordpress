<?php

/**
 * Adds Social_Widget widget.
 */
class Social_Widget extends WP_Widget
{

    /**
     * Register widget with WordPress.
     */
    function __construct()
    {
        parent::__construct(
            'social_widget', // Base ID
            esc_html__('Social links widget', 'text_domain'), // Name
            array('description' => esc_html__('Add your link to social networks', 'text_domain'),) // Args
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
        echo $args['before_widget'] . '<ul class="social">';

        echo '<li>';

        echo $args['before_icon'] . '<a target="_blank" href="' . apply_filters('widget_link', $instance['link']) . '">';

        if (!empty($instance['icon'])) {
            echo  '<i class="' . apply_filters('widget_icon', $instance['icon']) . '"></i>';
        }

        echo $args['after_icon'] . '</a>';

        echo '</li>';

        echo '<li>';

        echo $args['before_icon'] . '<a target="_blank" href="' . apply_filters('widget_link', $instance['link_second']) . '">';

        if (!empty($instance['icon_second'])) {
            echo  '<i class="' . apply_filters('widget_icon', $instance['icon_second']) . '"></i>';
        }

        echo $args['after_icon'] . '</a>';

        echo '</li>';

        echo '<li>';

        echo $args['before_icon'] . '<a target="_blank" href="' . apply_filters('widget_link', $instance['link_three']) . '">';

        if (!empty($instance['icon_three'])) {
            echo  '<i class="' . apply_filters('widget_icon', $instance['icon_three']) . '"></i>';
        }

        echo $args['after_icon'] . '</a>';

        echo '</li>';

        echo $args['after_widget'] . '</ul>';
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

        $icon_second = !empty($instance['icon_second']) ? $instance['icon_second'] : esc_html__('Enter the class of the font icon', 'text_domain');

        $icon_three = !empty($instance['icon_three']) ? $instance['icon_three'] : esc_html__('Enter the class of the font icon', 'text_domain');

        $link = !empty($instance['link']) ? $instance['link'] : esc_html__('Enter your link', 'text_domain');

        $link_second = !empty($instance['link_second']) ? $instance['link_second'] : esc_html__('Enter your link', 'text_domain');

        $link_three = !empty($instance['link_three']) ? $instance['link_three'] : esc_html__('Enter your link', 'text_domain');
?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('icon')); ?>"><?php esc_attr_e('icon-class:', 'text_domain'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('icon')); ?>" name="<?php echo esc_attr($this->get_field_name('icon')); ?>" type="text" value="<?php echo esc_attr($icon); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('link')); ?>"><?php esc_attr_e('Link:', 'text_domain'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('link')); ?>" name="<?php echo esc_attr($this->get_field_name('link')); ?>" type="text" value="<?php echo esc_attr($link); ?>">
        </p>

        <p>
            <label for="<?php echo esc_attr($this->get_field_id('icon_second')); ?>"><?php esc_attr_e('icon-class:', 'text_domain'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('icon_second')); ?>" name="<?php echo esc_attr($this->get_field_name('icon_second')); ?>" type="text" value="<?php echo esc_attr($icon_second); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('link_second')); ?>"><?php esc_attr_e('Link:', 'text_domain'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('link_second')); ?>" name="<?php echo esc_attr($this->get_field_name('link_second')); ?>" type="text" value="<?php echo esc_attr($link_second); ?>">
        </p>

        <p>
            <label for="<?php echo esc_attr($this->get_field_id('icon_three')); ?>"><?php esc_attr_e('icon-class:', 'text_domain'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('icon_three')); ?>" name="<?php echo esc_attr($this->get_field_name('icon_three')); ?>" type="text" value="<?php echo esc_attr($icon_three); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('link_three')); ?>"><?php esc_attr_e('Link:', 'text_domain'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('link_three')); ?>" name="<?php echo esc_attr($this->get_field_name('link_three')); ?>" type="text" value="<?php echo esc_attr($link_three); ?>">
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
        $instance['link'] = (!empty($new_instance['link'])) ? sanitize_text_field($new_instance['link']) : '';

        $instance['icon_second'] = (!empty($new_instance['icon_second'])) ? sanitize_text_field($new_instance['icon_second']) : '';
        $instance['link_second'] = (!empty($new_instance['link_second'])) ? sanitize_text_field($new_instance['link_second']) : '';

        $instance['icon_three'] = (!empty($new_instance['icon_three'])) ? sanitize_text_field($new_instance['icon_three']) : '';
        $instance['link_three'] = (!empty($new_instance['link_three'])) ? sanitize_text_field($new_instance['link_three']) : '';


        return $instance;
    }
}
