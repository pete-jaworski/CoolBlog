<?php
namespace PiotrJaworski\CoolBlog\Model\ResourceModel\Post;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * @var string
     */
    protected $_idFieldName = 'post_id';

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('PiotrJaworski\CoolBlog\Model\Post', 'PiotrJaworski\CoolBlog\Model\ResourceModel\Post');
    }

}