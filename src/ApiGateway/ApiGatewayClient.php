<?php
namespace ILAB_Aws\ApiGateway;

use ILAB_Aws\AwsClient;
use ILAB_Aws\CommandInterface;
use Psr\Http\Message\RequestInterface;

/**
 * This client is used to interact with the **AWS API Gateway** service.
 *
 * @method \ILAB_Aws\Result createApiKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createApiKeyAsync(array $args = [])
 * @method \ILAB_Aws\Result createAuthorizer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAuthorizerAsync(array $args = [])
 * @method \ILAB_Aws\Result createBasePathMapping(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createBasePathMappingAsync(array $args = [])
 * @method \ILAB_Aws\Result createDeployment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDeploymentAsync(array $args = [])
 * @method \ILAB_Aws\Result createDocumentationPart(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDocumentationPartAsync(array $args = [])
 * @method \ILAB_Aws\Result createDocumentationVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDocumentationVersionAsync(array $args = [])
 * @method \ILAB_Aws\Result createDomainName(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDomainNameAsync(array $args = [])
 * @method \ILAB_Aws\Result createModel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createModelAsync(array $args = [])
 * @method \ILAB_Aws\Result createRequestValidator(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createRequestValidatorAsync(array $args = [])
 * @method \ILAB_Aws\Result createResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createResourceAsync(array $args = [])
 * @method \ILAB_Aws\Result createRestApi(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createRestApiAsync(array $args = [])
 * @method \ILAB_Aws\Result createStage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createStageAsync(array $args = [])
 * @method \ILAB_Aws\Result createUsagePlan(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createUsagePlanAsync(array $args = [])
 * @method \ILAB_Aws\Result createUsagePlanKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createUsagePlanKeyAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteApiKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteApiKeyAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteAuthorizer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAuthorizerAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteBasePathMapping(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBasePathMappingAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteClientCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteClientCertificateAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteDeployment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDeploymentAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteDocumentationPart(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDocumentationPartAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteDocumentationVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDocumentationVersionAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteDomainName(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDomainNameAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteIntegration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteIntegrationAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteIntegrationResponse(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteIntegrationResponseAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteMethod(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteMethodAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteMethodResponse(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteMethodResponseAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteModel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteModelAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteRequestValidator(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRequestValidatorAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteResourceAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteRestApi(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRestApiAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteStage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteStageAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteUsagePlan(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteUsagePlanAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteUsagePlanKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteUsagePlanKeyAsync(array $args = [])
 * @method \ILAB_Aws\Result flushStageAuthorizersCache(array $args = [])
 * @method \GuzzleHttp\Promise\Promise flushStageAuthorizersCacheAsync(array $args = [])
 * @method \ILAB_Aws\Result flushStageCache(array $args = [])
 * @method \GuzzleHttp\Promise\Promise flushStageCacheAsync(array $args = [])
 * @method \ILAB_Aws\Result generateClientCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise generateClientCertificateAsync(array $args = [])
 * @method \ILAB_Aws\Result getAccount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAccountAsync(array $args = [])
 * @method \ILAB_Aws\Result getApiKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getApiKeyAsync(array $args = [])
 * @method \ILAB_Aws\Result getApiKeys(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getApiKeysAsync(array $args = [])
 * @method \ILAB_Aws\Result getAuthorizer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAuthorizerAsync(array $args = [])
 * @method \ILAB_Aws\Result getAuthorizers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAuthorizersAsync(array $args = [])
 * @method \ILAB_Aws\Result getBasePathMapping(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBasePathMappingAsync(array $args = [])
 * @method \ILAB_Aws\Result getBasePathMappings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBasePathMappingsAsync(array $args = [])
 * @method \ILAB_Aws\Result getClientCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getClientCertificateAsync(array $args = [])
 * @method \ILAB_Aws\Result getClientCertificates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getClientCertificatesAsync(array $args = [])
 * @method \ILAB_Aws\Result getDeployment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDeploymentAsync(array $args = [])
 * @method \ILAB_Aws\Result getDeployments(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDeploymentsAsync(array $args = [])
 * @method \ILAB_Aws\Result getDocumentationPart(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDocumentationPartAsync(array $args = [])
 * @method \ILAB_Aws\Result getDocumentationParts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDocumentationPartsAsync(array $args = [])
 * @method \ILAB_Aws\Result getDocumentationVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDocumentationVersionAsync(array $args = [])
 * @method \ILAB_Aws\Result getDocumentationVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDocumentationVersionsAsync(array $args = [])
 * @method \ILAB_Aws\Result getDomainName(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDomainNameAsync(array $args = [])
 * @method \ILAB_Aws\Result getDomainNames(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDomainNamesAsync(array $args = [])
 * @method \ILAB_Aws\Result getExport(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getExportAsync(array $args = [])
 * @method \ILAB_Aws\Result getIntegration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getIntegrationAsync(array $args = [])
 * @method \ILAB_Aws\Result getIntegrationResponse(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getIntegrationResponseAsync(array $args = [])
 * @method \ILAB_Aws\Result getMethod(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getMethodAsync(array $args = [])
 * @method \ILAB_Aws\Result getMethodResponse(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getMethodResponseAsync(array $args = [])
 * @method \ILAB_Aws\Result getModel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getModelAsync(array $args = [])
 * @method \ILAB_Aws\Result getModelTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getModelTemplateAsync(array $args = [])
 * @method \ILAB_Aws\Result getModels(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getModelsAsync(array $args = [])
 * @method \ILAB_Aws\Result getRequestValidator(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRequestValidatorAsync(array $args = [])
 * @method \ILAB_Aws\Result getRequestValidators(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRequestValidatorsAsync(array $args = [])
 * @method \ILAB_Aws\Result getResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getResourceAsync(array $args = [])
 * @method \ILAB_Aws\Result getResources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getResourcesAsync(array $args = [])
 * @method \ILAB_Aws\Result getRestApi(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRestApiAsync(array $args = [])
 * @method \ILAB_Aws\Result getRestApis(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRestApisAsync(array $args = [])
 * @method \ILAB_Aws\Result getSdk(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSdkAsync(array $args = [])
 * @method \ILAB_Aws\Result getSdkType(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSdkTypeAsync(array $args = [])
 * @method \ILAB_Aws\Result getSdkTypes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSdkTypesAsync(array $args = [])
 * @method \ILAB_Aws\Result getStage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getStageAsync(array $args = [])
 * @method \ILAB_Aws\Result getStages(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getStagesAsync(array $args = [])
 * @method \ILAB_Aws\Result getUsage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getUsageAsync(array $args = [])
 * @method \ILAB_Aws\Result getUsagePlan(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getUsagePlanAsync(array $args = [])
 * @method \ILAB_Aws\Result getUsagePlanKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getUsagePlanKeyAsync(array $args = [])
 * @method \ILAB_Aws\Result getUsagePlanKeys(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getUsagePlanKeysAsync(array $args = [])
 * @method \ILAB_Aws\Result getUsagePlans(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getUsagePlansAsync(array $args = [])
 * @method \ILAB_Aws\Result importApiKeys(array $args = [])
 * @method \GuzzleHttp\Promise\Promise importApiKeysAsync(array $args = [])
 * @method \ILAB_Aws\Result importDocumentationParts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise importDocumentationPartsAsync(array $args = [])
 * @method \ILAB_Aws\Result importRestApi(array $args = [])
 * @method \GuzzleHttp\Promise\Promise importRestApiAsync(array $args = [])
 * @method \ILAB_Aws\Result putIntegration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putIntegrationAsync(array $args = [])
 * @method \ILAB_Aws\Result putIntegrationResponse(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putIntegrationResponseAsync(array $args = [])
 * @method \ILAB_Aws\Result putMethod(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putMethodAsync(array $args = [])
 * @method \ILAB_Aws\Result putMethodResponse(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putMethodResponseAsync(array $args = [])
 * @method \ILAB_Aws\Result putRestApi(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putRestApiAsync(array $args = [])
 * @method \ILAB_Aws\Result testInvokeAuthorizer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise testInvokeAuthorizerAsync(array $args = [])
 * @method \ILAB_Aws\Result testInvokeMethod(array $args = [])
 * @method \GuzzleHttp\Promise\Promise testInvokeMethodAsync(array $args = [])
 * @method \ILAB_Aws\Result updateAccount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAccountAsync(array $args = [])
 * @method \ILAB_Aws\Result updateApiKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateApiKeyAsync(array $args = [])
 * @method \ILAB_Aws\Result updateAuthorizer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAuthorizerAsync(array $args = [])
 * @method \ILAB_Aws\Result updateBasePathMapping(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateBasePathMappingAsync(array $args = [])
 * @method \ILAB_Aws\Result updateClientCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateClientCertificateAsync(array $args = [])
 * @method \ILAB_Aws\Result updateDeployment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDeploymentAsync(array $args = [])
 * @method \ILAB_Aws\Result updateDocumentationPart(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDocumentationPartAsync(array $args = [])
 * @method \ILAB_Aws\Result updateDocumentationVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDocumentationVersionAsync(array $args = [])
 * @method \ILAB_Aws\Result updateDomainName(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDomainNameAsync(array $args = [])
 * @method \ILAB_Aws\Result updateIntegration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateIntegrationAsync(array $args = [])
 * @method \ILAB_Aws\Result updateIntegrationResponse(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateIntegrationResponseAsync(array $args = [])
 * @method \ILAB_Aws\Result updateMethod(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateMethodAsync(array $args = [])
 * @method \ILAB_Aws\Result updateMethodResponse(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateMethodResponseAsync(array $args = [])
 * @method \ILAB_Aws\Result updateModel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateModelAsync(array $args = [])
 * @method \ILAB_Aws\Result updateRequestValidator(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateRequestValidatorAsync(array $args = [])
 * @method \ILAB_Aws\Result updateResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateResourceAsync(array $args = [])
 * @method \ILAB_Aws\Result updateRestApi(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateRestApiAsync(array $args = [])
 * @method \ILAB_Aws\Result updateStage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateStageAsync(array $args = [])
 * @method \ILAB_Aws\Result updateUsage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateUsageAsync(array $args = [])
 * @method \ILAB_Aws\Result updateUsagePlan(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateUsagePlanAsync(array $args = [])
 */
class ApiGatewayClient extends AwsClient
{
    public function __construct(array $args)
    {
        parent::__construct($args);
        $stack = $this->getHandlerList();
        $stack->appendBuild([__CLASS__, '_add_accept_header']);
    }

    public static function _add_accept_header(callable $handler)
    {
        return function (
            CommandInterface $command,
            RequestInterface $request
        ) use ($handler) {
            $request = $request->withHeader('Accept', 'application/json');

            return $handler($command, $request);
        };
    }
}
