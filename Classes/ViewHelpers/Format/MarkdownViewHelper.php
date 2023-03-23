<?php
namespace Dagou\Markdown\ViewHelpers\Format;

use Dagou\Markdown\Utility\MarkdownUtility;
use TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

class MarkdownViewHelper extends AbstractViewHelper {
    /**
     * @param array $arguments
     * @param \Closure $renderChildrenClosure
     * @param \TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext
     *
     * @return string
     */
    public static function renderStatic(array $arguments, \Closure $renderChildrenClosure, RenderingContextInterface $renderingContext): string {
        return MarkdownUtility::parse($renderChildrenClosure());
    }
}