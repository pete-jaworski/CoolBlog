<?php
namespace PiotrJaworski\CoolBlog\Api;

interface PostRepositoryInterface {

    
    /**
     * Retrieve customers which match a specified criteria.
     *
     * @api
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \PiotrJaworski\CoolBlog\Api\Data\PostInterface[]|null
     * 
     */    
    public function getList(\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria);


}
