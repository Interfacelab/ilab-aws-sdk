<?php
namespace ILAB_Aws\Appstream;

use ILAB_Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon AppStream** service.
 * @method \ILAB_Aws\Result associateFleet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateFleetAsync(array $args = [])
 * @method \ILAB_Aws\Result createFleet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createFleetAsync(array $args = [])
 * @method \ILAB_Aws\Result createStack(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createStackAsync(array $args = [])
 * @method \ILAB_Aws\Result createStreamingURL(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createStreamingURLAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteFleet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteFleetAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteStack(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteStackAsync(array $args = [])
 * @method \ILAB_Aws\Result describeFleets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeFleetsAsync(array $args = [])
 * @method \ILAB_Aws\Result describeImages(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeImagesAsync(array $args = [])
 * @method \ILAB_Aws\Result describeSessions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSessionsAsync(array $args = [])
 * @method \ILAB_Aws\Result describeStacks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeStacksAsync(array $args = [])
 * @method \ILAB_Aws\Result disassociateFleet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateFleetAsync(array $args = [])
 * @method \ILAB_Aws\Result expireSession(array $args = [])
 * @method \GuzzleHttp\Promise\Promise expireSessionAsync(array $args = [])
 * @method \ILAB_Aws\Result listAssociatedFleets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAssociatedFleetsAsync(array $args = [])
 * @method \ILAB_Aws\Result listAssociatedStacks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAssociatedStacksAsync(array $args = [])
 * @method \ILAB_Aws\Result startFleet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startFleetAsync(array $args = [])
 * @method \ILAB_Aws\Result stopFleet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopFleetAsync(array $args = [])
 * @method \ILAB_Aws\Result updateFleet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateFleetAsync(array $args = [])
 * @method \ILAB_Aws\Result updateStack(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateStackAsync(array $args = [])
 */
class AppstreamClient extends AwsClient {}