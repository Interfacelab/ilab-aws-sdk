<?php
namespace ILAB_Aws\CodePipeline;

use ILAB_Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon CodePipeline** service.
 *
 * @method \ILAB_Aws\Result acknowledgeJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise acknowledgeJobAsync(array $args = [])
 * @method \ILAB_Aws\Result acknowledgeThirdPartyJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise acknowledgeThirdPartyJobAsync(array $args = [])
 * @method \ILAB_Aws\Result createCustomActionType(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createCustomActionTypeAsync(array $args = [])
 * @method \ILAB_Aws\Result createPipeline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPipelineAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteCustomActionType(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteCustomActionTypeAsync(array $args = [])
 * @method \ILAB_Aws\Result deletePipeline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deletePipelineAsync(array $args = [])
 * @method \ILAB_Aws\Result disableStageTransition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableStageTransitionAsync(array $args = [])
 * @method \ILAB_Aws\Result enableStageTransition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableStageTransitionAsync(array $args = [])
 * @method \ILAB_Aws\Result getJobDetails(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getJobDetailsAsync(array $args = [])
 * @method \ILAB_Aws\Result getPipeline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPipelineAsync(array $args = [])
 * @method \ILAB_Aws\Result getPipelineExecution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPipelineExecutionAsync(array $args = [])
 * @method \ILAB_Aws\Result getPipelineState(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPipelineStateAsync(array $args = [])
 * @method \ILAB_Aws\Result getThirdPartyJobDetails(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getThirdPartyJobDetailsAsync(array $args = [])
 * @method \ILAB_Aws\Result listActionTypes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listActionTypesAsync(array $args = [])
 * @method \ILAB_Aws\Result listPipelines(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPipelinesAsync(array $args = [])
 * @method \ILAB_Aws\Result pollForJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise pollForJobsAsync(array $args = [])
 * @method \ILAB_Aws\Result pollForThirdPartyJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise pollForThirdPartyJobsAsync(array $args = [])
 * @method \ILAB_Aws\Result putActionRevision(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putActionRevisionAsync(array $args = [])
 * @method \ILAB_Aws\Result putApprovalResult(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putApprovalResultAsync(array $args = [])
 * @method \ILAB_Aws\Result putJobFailureResult(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putJobFailureResultAsync(array $args = [])
 * @method \ILAB_Aws\Result putJobSuccessResult(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putJobSuccessResultAsync(array $args = [])
 * @method \ILAB_Aws\Result putThirdPartyJobFailureResult(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putThirdPartyJobFailureResultAsync(array $args = [])
 * @method \ILAB_Aws\Result putThirdPartyJobSuccessResult(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putThirdPartyJobSuccessResultAsync(array $args = [])
 * @method \ILAB_Aws\Result retryStageExecution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise retryStageExecutionAsync(array $args = [])
 * @method \ILAB_Aws\Result startPipelineExecution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startPipelineExecutionAsync(array $args = [])
 * @method \ILAB_Aws\Result updatePipeline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updatePipelineAsync(array $args = [])
 */
class CodePipelineClient extends AwsClient {}
