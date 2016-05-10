<?php
namespace PiotrJaworski\CoolBlog\Controller;

class Router implements \Magento\Framework\App\RouterInterface
{
 
    protected $actionFactory;

 
    protected $_postFactory;

 
    public function __construct(
        \Magento\Framework\App\ActionFactory $actionFactory,
        \PiotrJaworski\CoolBlog\Model\PostFactory $postFactory
    ) {
        $this->actionFactory = $actionFactory;
        $this->_postFactory = $postFactory;
    }

    /**
     * Validate and Match Blog Post and modify request
     *
     * @param \Magento\Framework\App\RequestInterface $request
     * @return bool
     */
    public function match(\Magento\Framework\App\RequestInterface $request)
    {
        $url_key = trim($request->getPathInfo(), '/coolblog/');
        $url_key = rtrim($url_key, '/');

         
        $post = $this->_postFactory->create();
        $post_id = $post->checkUrlKey($url_key);
        if (!$post_id) {
            return null;
        }

        $request->setModuleName('coolblog')->setControllerName('view')->setActionName('index')->setParam('post_id', $post_id);
        $request->setAlias(\Magento\Framework\Url::REWRITE_REQUEST_PATH_ALIAS, $url_key);

        return $this->actionFactory->create('Magento\Framework\App\Action\Forward');
    }
}
