<?php
declare(strict_types=1);

namespace FriendsOfTYPO3\JqueryUi;

use TYPO3\CMS\Core\Page\PageRenderer;

class PageRendererHook
{
    public function addImportMaps(array $params, PageRenderer $pageRenderer): void
    {
        if ($pageRenderer->getApplicationType() !== 'BE'
            || empty($GLOBALS['BE_USER']->user['uid'])
        ) {
            return;
        }
        $pageRenderer->getJavaScriptRenderer()->includeTaggedImports('backend.jquery-ui');
    }
}
