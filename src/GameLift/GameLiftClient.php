<?php
namespace ILAB_Aws\GameLift;

use ILAB_Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon GameLift** service.
 *
 * @method \ILAB_Aws\Result createAlias(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAliasAsync(array $args = [])
 * @method \ILAB_Aws\Result createBuild(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createBuildAsync(array $args = [])
 * @method \ILAB_Aws\Result createFleet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createFleetAsync(array $args = [])
 * @method \ILAB_Aws\Result createGameSession(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createGameSessionAsync(array $args = [])
 * @method \ILAB_Aws\Result createGameSessionQueue(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createGameSessionQueueAsync(array $args = [])
 * @method \ILAB_Aws\Result createPlayerSession(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPlayerSessionAsync(array $args = [])
 * @method \ILAB_Aws\Result createPlayerSessions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPlayerSessionsAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteAlias(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAliasAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteBuild(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBuildAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteFleet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteFleetAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteGameSessionQueue(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteGameSessionQueueAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteScalingPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteScalingPolicyAsync(array $args = [])
 * @method \ILAB_Aws\Result describeAlias(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAliasAsync(array $args = [])
 * @method \ILAB_Aws\Result describeBuild(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeBuildAsync(array $args = [])
 * @method \ILAB_Aws\Result describeEC2InstanceLimits(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEC2InstanceLimitsAsync(array $args = [])
 * @method \ILAB_Aws\Result describeFleetAttributes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeFleetAttributesAsync(array $args = [])
 * @method \ILAB_Aws\Result describeFleetCapacity(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeFleetCapacityAsync(array $args = [])
 * @method \ILAB_Aws\Result describeFleetEvents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeFleetEventsAsync(array $args = [])
 * @method \ILAB_Aws\Result describeFleetPortSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeFleetPortSettingsAsync(array $args = [])
 * @method \ILAB_Aws\Result describeFleetUtilization(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeFleetUtilizationAsync(array $args = [])
 * @method \ILAB_Aws\Result describeGameSessionDetails(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeGameSessionDetailsAsync(array $args = [])
 * @method \ILAB_Aws\Result describeGameSessionPlacement(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeGameSessionPlacementAsync(array $args = [])
 * @method \ILAB_Aws\Result describeGameSessionQueues(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeGameSessionQueuesAsync(array $args = [])
 * @method \ILAB_Aws\Result describeGameSessions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeGameSessionsAsync(array $args = [])
 * @method \ILAB_Aws\Result describeInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstancesAsync(array $args = [])
 * @method \ILAB_Aws\Result describePlayerSessions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePlayerSessionsAsync(array $args = [])
 * @method \ILAB_Aws\Result describeRuntimeConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRuntimeConfigurationAsync(array $args = [])
 * @method \ILAB_Aws\Result describeScalingPolicies(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeScalingPoliciesAsync(array $args = [])
 * @method \ILAB_Aws\Result getGameSessionLogUrl(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getGameSessionLogUrlAsync(array $args = [])
 * @method \ILAB_Aws\Result getInstanceAccess(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getInstanceAccessAsync(array $args = [])
 * @method \ILAB_Aws\Result listAliases(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAliasesAsync(array $args = [])
 * @method \ILAB_Aws\Result listBuilds(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listBuildsAsync(array $args = [])
 * @method \ILAB_Aws\Result listFleets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listFleetsAsync(array $args = [])
 * @method \ILAB_Aws\Result putScalingPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putScalingPolicyAsync(array $args = [])
 * @method \ILAB_Aws\Result requestUploadCredentials(array $args = [])
 * @method \GuzzleHttp\Promise\Promise requestUploadCredentialsAsync(array $args = [])
 * @method \ILAB_Aws\Result resolveAlias(array $args = [])
 * @method \GuzzleHttp\Promise\Promise resolveAliasAsync(array $args = [])
 * @method \ILAB_Aws\Result searchGameSessions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise searchGameSessionsAsync(array $args = [])
 * @method \ILAB_Aws\Result startGameSessionPlacement(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startGameSessionPlacementAsync(array $args = [])
 * @method \ILAB_Aws\Result stopGameSessionPlacement(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopGameSessionPlacementAsync(array $args = [])
 * @method \ILAB_Aws\Result updateAlias(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAliasAsync(array $args = [])
 * @method \ILAB_Aws\Result updateBuild(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateBuildAsync(array $args = [])
 * @method \ILAB_Aws\Result updateFleetAttributes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateFleetAttributesAsync(array $args = [])
 * @method \ILAB_Aws\Result updateFleetCapacity(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateFleetCapacityAsync(array $args = [])
 * @method \ILAB_Aws\Result updateFleetPortSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateFleetPortSettingsAsync(array $args = [])
 * @method \ILAB_Aws\Result updateGameSession(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateGameSessionAsync(array $args = [])
 * @method \ILAB_Aws\Result updateGameSessionQueue(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateGameSessionQueueAsync(array $args = [])
 * @method \ILAB_Aws\Result updateRuntimeConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateRuntimeConfigurationAsync(array $args = [])
 */
class GameLiftClient extends AwsClient {}
