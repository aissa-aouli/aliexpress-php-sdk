<?php
/**
 * TOP API: aliexpress.solution.feed.invalidate request
 * 
 * @author auto create
 * @since 1.0, 2020.12.02
 */
class AliexpressSolutionFeedInvalidateRequest
{
	/** 
	 * job id separated by ;  No more than 100 job Ids could be passed in one request.
	 **/
	private $jobIdList;
	
	private $apiParas = array();
	
	public function setJobIdList($jobIdList)
	{
		$this->jobIdList = $jobIdList;
		$this->apiParas["job_id_list"] = $jobIdList;
	}

	public function getJobIdList()
	{
		return $this->jobIdList;
	}

	public function getApiMethodName()
	{
		return "aliexpress.solution.feed.invalidate";
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
