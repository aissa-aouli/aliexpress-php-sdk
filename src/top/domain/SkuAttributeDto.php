<?php

/**
 * sku attribute list. Some categories don't have sku attributes, then sku_attributes_list should be empty.
 * @author auto create
 */
class SkuAttributeDto
{
	
	/** 
	 * Deprecated, please use sku_attribute_name_id. To obtain the available sku attribute names under a specific category, please check API: aliexpress.solution.sku.attribute.query
	 **/
	public $sku_attribute_name;
	
	/** 
	 * Please refer to https://developers.aliexpress.com/en/doc.htm?docId=29988&docType=2 to obtain the sku_attribute_name_id under specific category
	 **/
	public $sku_attribute_name_id;
	
	/** 
	 * Customized sku attribute value by sellers, do not include these 4 symbols #:=,
	 **/
	public $sku_attribute_value;
	
	/** 
	 * Please refer to https://developers.aliexpress.com/en/doc.htm?docId=29988&docType=2 to obtain the sku_attribute_value_id under specific category
	 **/
	public $sku_attribute_value_id;
	
	/** 
	 * Image that will represent the variation of the product. The url can point to a seller's server or to AliExpress photobank. In order to obtain more information about the photobank and how to upload images, please visit the following page: https://developers.aliexpress.com/en/doc.htm?docId=30186&docType=2
	 **/
	public $sku_image;	
}
?>