<?php
namespace ILAB_Aws\ApplicationDiscoveryService;

use ILAB_Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Application Discovery Service** service.
 * @method \ILAB_Aws\Result associateConfigurationItemsToApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateConfigurationItemsToApplicationAsync(array $args = [])
 * @method \ILAB_Aws\Result createApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createApplicationAsync(array $args = [])
 * @method \ILAB_Aws\Result createTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createTagsAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteApplications(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteApplicationsAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteTagsAsync(array $args = [])
 * @method \ILAB_Aws\Result describeAgents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAgentsAsync(array $args = [])
 * @method \ILAB_Aws\Result describeConfigurations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeConfigurationsAsync(array $args = [])
 * @method \ILAB_Aws\Result describeExportConfigurations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeExportConfigurationsAsync(array $args = [])
 * @method \ILAB_Aws\Result describeExportTasks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeExportTasksAsync(array $args = [])
 * @method \ILAB_Aws\Result describeTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTagsAsync(array $args = [])
 * @method \ILAB_Aws\Result disassociateConfigurationItemsFromApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateConfigurationItemsFromApplicationAsync(array $args = [])
 * @method \ILAB_Aws\Result exportConfigurations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise exportConfigurationsAsync(array $args = [])
 * @method \ILAB_Aws\Result getDiscoverySummary(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDiscoverySummaryAsync(array $args = [])
 * @method \ILAB_Aws\Result listConfigurations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listConfigurationsAsync(array $args = [])
 * @method \ILAB_Aws\Result listServerNeighbors(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listServerNeighborsAsync(array $args = [])
 * @method \ILAB_Aws\Result startDataCollectionByAgentIds(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startDataCollectionByAgentIdsAsync(array $args = [])
 * @method \ILAB_Aws\Result startExportTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startExportTaskAsync(array $args = [])
 * @method \ILAB_Aws\Result stopDataCollectionByAgentIds(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopDataCollectionByAgentIdsAsync(array $args = [])
 * @method \ILAB_Aws\Result updateApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateApplicationAsync(array $args = [])
 */
class ApplicationDiscoveryServiceClient extends AwsClient {}
