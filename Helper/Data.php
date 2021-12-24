<?php
namespace Magenuts\Hideprice\Helper;

class Data extends \Magento\Framework\App\Helper\AbstractHelper 
{
        public function __construct(
        \Magento\Framework\App\Helper\Context $context,

        array $data = []
        ) {

        parent::__construct($context);
        }
        /**
         * Functionality to get configuration values of plugin
         *
         * @param $configPath: System xml config path
         * @return value of requested configuration
         */

        public function getConfig($configPath) {
            return $this->scopeConfig->getValue(
                $configPath, \Magento\Store\Model\ScopeInterface::SCOPE_STORE
            );
        }
}