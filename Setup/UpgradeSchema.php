<?php
namespace PiotrJaworski\CoolBlog\Setup;

use \Magento\Framework\Setup\UpgradeSchemaInterface;
use \Magento\Framework\Setup\SchemaSetupInterface;
use \Magento\Framework\Setup\ModuleContextInterface;
 
class UpgradeSchema implements UpgradeSchemaInterface
{
    
    
    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        
            
        mail('piotrjaworski@hotmail.com','UPGRADE 8 ***','');
 
         
    }
}

