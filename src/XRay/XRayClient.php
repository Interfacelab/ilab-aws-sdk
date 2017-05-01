<?php
namespace ILAB_Aws\XRay;

use ILAB_Aws\AwsClient;

/**
 * This client is used to interact with the **AWS X-Ray** service.
 * @method \ILAB_Aws\Result batchGetTraces(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchGetTracesAsync(array $args = [])
 * @method \ILAB_Aws\Result getServiceGraph(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getServiceGraphAsync(array $args = [])
 * @method \ILAB_Aws\Result getTraceGraph(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTraceGraphAsync(array $args = [])
 * @method \ILAB_Aws\Result getTraceSummaries(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTraceSummariesAsync(array $args = [])
 * @method \ILAB_Aws\Result putTelemetryRecords(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putTelemetryRecordsAsync(array $args = [])
 * @method \ILAB_Aws\Result putTraceSegments(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putTraceSegmentsAsync(array $args = [])
 */
class XRayClient extends AwsClient {}
