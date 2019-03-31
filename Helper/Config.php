<?php
/**
 * Copyright (c) 2019. Volodymyr Hryvinskyi.  All rights reserved.
 * @author: <mailto:volodymyr@hryvinskyi.com>
 * @github: <https://github.com/hryvinskyi>
 */

declare(strict_types=1);

namespace Hryvinskyi\DeferJs\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;

/**
 * Class Config
 */
class Config extends AbstractHelper
{
    /**
     * Configuration paths
     */
    const XML_HRYVINSKYI_DEFER_JS_GENERAL_ENABLED = 'hryvinskyi_defer_js/general/enabled';
    const XML_HRYVINSKYI_DEFER_JS_DISABLE_ATTRIBUTE = 'hryvinskyi_defer_js/general/disable_attribute';
    const XML_HRYVINSKYI_DEFER_JS_MINIFY_BODY_SCRIPTS = 'hryvinskyi_defer_js/general/minify_body_scripts';
    const XML_HRYVINSKYI_DEFER_JS_EXCLUDE_CONTROLLERS = 'hryvinskyi_defer_js/general/exclude_controllers';
    const XML_HRYVINSKYI_DEFER_JS_EXCLUDE_PATHS = 'hryvinskyi_defer_js/general/exclude_paths';

    /**
     * @param string $scopeType
     * @param null|string $scopeCode
     *
     * @return bool
     */
    public function isEnabled(
        string $scopeType = ScopeInterface::SCOPE_WEBSITE,
        $scopeCode = null
    ): bool {
        return $this->scopeConfig->isSetFlag(
            self::XML_HRYVINSKYI_DEFER_JS_GENERAL_ENABLED,
            $scopeType,
            $scopeCode
        );
    }

    /**
     * @param string $scopeType
     * @param null|string $scopeCode
     *
     * @return string
     */
    public function getDisableAttribute(
        string $scopeType = ScopeInterface::SCOPE_WEBSITE,
        $scopeCode = null
    ): string {
        return $this->scopeConfig->getValue(
            self::XML_HRYVINSKYI_DEFER_JS_DISABLE_ATTRIBUTE,
            $scopeType,
            $scopeCode
        );
    }

    /**
     * @param string $scopeType
     * @param null|string $scopeCode
     *
     * @return bool
     */
    public function isMinifyBodyScript(
        string $scopeType = ScopeInterface::SCOPE_WEBSITE,
        $scopeCode = null
    ): bool {
        return $this->scopeConfig->isSetFlag(
            self::XML_HRYVINSKYI_DEFER_JS_MINIFY_BODY_SCRIPTS,
            $scopeType,
            $scopeCode
        );
    }

    /**
     * Return Excluded Controllers
     *
     * @param string $scopeType
     * @param null|string $scopeCode
     *
     * @return string
     */
    public function getExcludeControllers(
        string $scopeType = ScopeInterface::SCOPE_WEBSITE,
        $scopeCode = null
    ): string {
        return $this->scopeConfig->getValue(
            self::XML_HRYVINSKYI_DEFER_JS_EXCLUDE_CONTROLLERS,
            $scopeType,
            $scopeCode
        );
    }

    /**
     * Return Excluded Paths
     *
     * @param string $scopeType
     * @param null|string $scopeCode
     *
     * @return string
     */
    public function getExcludePaths(
        string $scopeType = ScopeInterface::SCOPE_WEBSITE,
        $scopeCode = null
    ): string {
        return $this->scopeConfig->getValue(
            self::XML_HRYVINSKYI_DEFER_JS_EXCLUDE_PATHS,
            $scopeType,
            $scopeCode
        );
    }
}
