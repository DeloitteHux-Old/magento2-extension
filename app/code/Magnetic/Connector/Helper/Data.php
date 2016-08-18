<?php
namespace Magnetic\Connector\Helper;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
	/**
     * @var \Magento\Framework\Module\ModuleListInterface
     */
    protected $_moduleList;
	
    /**
     * @var \Magento\Framework\App\Config\ScopeConfigInterfac
     */
    protected $_scopeConfig;

    CONST ENABLE     = 'magnetic_connector/code/enable';
    CONST IDENTIFIER = 'magnetic_connector/code/identifier';

    public function __construct(
        \Magento\Framework\App\Helper\Context $context,
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig,
        \Magento\Framework\Module\ModuleListInterface $moduleList
    ) {
        parent::__construct($context);
		$this->_moduleList  = $moduleList;
        $this->_scopeConfig = $scopeConfig;
    }

    public function isEnabled(){
        return $this->_scopeConfig->getValue(self::ENABLE, "store");
    }

    public function getIdentifier(){
        return strtoupper($this->_scopeConfig->getValue(self::IDENTIFIER, "store"));
    }
	
	public function getVersion()
    {
        $moduleCode = 'Magnetic_Connector';
        $moduleInfo = $this->_moduleList->getOne($moduleCode);
        return $moduleInfo['setup_version'];
    }
}

