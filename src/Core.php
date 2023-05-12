<?php

namespace Ekremogul\PHPScraper;

class Core
{
    /**
     * Url related helpers for information about the current location and URL processing.
     */
    use UsesUrls;

    /**
     * This trait manages the interaction with Goutte.
     */
    use UsesGoutte;

    /**
     * This contains the basic filter methods. Make accessing data easier.
     */
    use UsesXPathFilters;

    /**
     * This contains various content-related selectors. meta tags, h1, etc. pp.
     */
    use UsesContent;

    /**
     * Shared simple parsers for XML, JSON and CSV.
     */
    use UsesFileParsers;

    /**
     * This contains the feeds-related selectors and parsers: RSS, sitemap, search index, etc.
     */
    use UsesFeeds;
}
