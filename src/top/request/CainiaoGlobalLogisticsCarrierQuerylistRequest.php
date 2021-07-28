<?php
/**
 * TOP API: cainiao.global.logistics.carrier.querylist request
 * 
 * @author auto create
 * @since 1.0, 2021.01.28
 */
class CainiaoGlobalLogisticsCarrierQuerylistRequest
{
	/** 
	 * 多语言(暂不支持，保留入参)
	 **/
	private $locale;
	
	private $apiParas = array();
	
	public function setLocale($locale)
	{
		$this->locale = $locale;
		$this->apiParas["locale"] = $locale;
	}

	public function getLocale()
	{
		return $this->locale;
	}

	public function getApiMethodName()
	{
		return "cainiao.global.logistics.carrier.querylist";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
