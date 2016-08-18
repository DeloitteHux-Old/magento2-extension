<?php
namespace Magnetic\Connector\Block;

class code extends \Magento\Framework\View\Element\Template
{
	 /**
     * @var \Amasty\HelloWorld\Helper\Data
     */
    protected $_helper;


    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        array $data = [],
        \Magnetic\connector\Helper\Data $helper
    ) {
        parent::__construct($context, $data);

        $this->_helper = $helper;
    }
	
    public function getIdentifier(){
        return $this->_helper->getIdentifier();
    }
	
    public function isEnabled(){
        return $this->_helper->isEnabled();
    }
	
    public function getVersion(){
        return $this->_helper->getVersion();
    }
}
