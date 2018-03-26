<?php

namespace Jaybizzle\Shortcodes;

use Jaybizzle\Shortcodes\ShortcodeContract;

abstract class Shortcode implements ShortcodeContract
{
    /**
     * The shortcode attributes.
     *
     * @var array
     */
    public $attr;

    /**
     * The content of the shortcode.
     *
     * @var string
     */
    public $content;

    /**
     * The shortcode tag.
     *
     * @var string
     */
    public static $shortcode;

    public function __construct($attr, $content)
    {
        $this->attr = $attr;
        $this->content = $content;
        $this->shortcode = static::$shortcode;
    }
}
