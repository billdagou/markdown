<?php
namespace Dagou\Markdown\Utility;

class MarkdownUtility {
    /**
     * @param string $markdown
     *
     * @return string
     */
    public static function parse(string $markdown): string {
        return (new \Parsedown())->text($markdown);
    }
}