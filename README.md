# TYPO3 Extension: Markdown

EXT:markdown allows you to use [Parsedown](https://parsedown.org/) in your extensions.

**The extension version only matches the Parsedown library version, it doesn't mean anything else.**

## How to use it
You can use the viewhelper to parse a markdown content into HTML.

    <md:format.markdown>...</md:format.markdown>

Or in your code.

    \Dagou\Markdown\Utility\MarkdownUtility::parse(...);