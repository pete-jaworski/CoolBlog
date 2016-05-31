<?php
namespace PiotrJaworski\CoolBlog\Controller\Adminhtml\Post;

use \Magento\Backend\App\Action\Context;
use \Magento\Framework\View\Result\PageFactory;

class Index extends \Magento\Backend\App\Action
{

    
    protected $resultPageFactory;

     
    public function __construct(
        Context $context,
        PageFactory $resultPageFactory
    ) {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }

    
    public function execute()
    {
        
        
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('PiotrJaworski_CoolBlog::post');
        $resultPage->addBreadcrumb(__('Blog Posts'), __('Blog Posts'));
        $resultPage->addBreadcrumb(__('Manage Blog Posts'), __('Manage Blog Posts'));
        $resultPage->getConfig()->getTitle()->prepend(__('Blog Posts'));
        $resultPage->getLayout()->createBlock('PiotrJaworski\CoolBlog\Block\Adminhtml\TestBlock');
        return $resultPage;
    }

    
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('PiotrJaworski_CoolBlog::post');
    }


}