<?php
namespace ILAB_Aws\DeviceFarm;

use ILAB_Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon DeviceFarm** service.
 *
 * @method \ILAB_Aws\Result createDevicePool(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDevicePoolAsync(array $args = [])
 * @method \ILAB_Aws\Result createNetworkProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createNetworkProfileAsync(array $args = [])
 * @method \ILAB_Aws\Result createProject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createProjectAsync(array $args = [])
 * @method \ILAB_Aws\Result createRemoteAccessSession(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createRemoteAccessSessionAsync(array $args = [])
 * @method \ILAB_Aws\Result createUpload(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createUploadAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteDevicePool(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDevicePoolAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteNetworkProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteNetworkProfileAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteProject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteProjectAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteRemoteAccessSession(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRemoteAccessSessionAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteRun(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRunAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteUpload(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteUploadAsync(array $args = [])
 * @method \ILAB_Aws\Result getAccountSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAccountSettingsAsync(array $args = [])
 * @method \ILAB_Aws\Result getDevice(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDeviceAsync(array $args = [])
 * @method \ILAB_Aws\Result getDevicePool(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDevicePoolAsync(array $args = [])
 * @method \ILAB_Aws\Result getDevicePoolCompatibility(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDevicePoolCompatibilityAsync(array $args = [])
 * @method \ILAB_Aws\Result getJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getJobAsync(array $args = [])
 * @method \ILAB_Aws\Result getNetworkProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getNetworkProfileAsync(array $args = [])
 * @method \ILAB_Aws\Result getOfferingStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getOfferingStatusAsync(array $args = [])
 * @method \ILAB_Aws\Result getProject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getProjectAsync(array $args = [])
 * @method \ILAB_Aws\Result getRemoteAccessSession(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRemoteAccessSessionAsync(array $args = [])
 * @method \ILAB_Aws\Result getRun(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRunAsync(array $args = [])
 * @method \ILAB_Aws\Result getSuite(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSuiteAsync(array $args = [])
 * @method \ILAB_Aws\Result getTest(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTestAsync(array $args = [])
 * @method \ILAB_Aws\Result getUpload(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getUploadAsync(array $args = [])
 * @method \ILAB_Aws\Result installToRemoteAccessSession(array $args = [])
 * @method \GuzzleHttp\Promise\Promise installToRemoteAccessSessionAsync(array $args = [])
 * @method \ILAB_Aws\Result listArtifacts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listArtifactsAsync(array $args = [])
 * @method \ILAB_Aws\Result listDevicePools(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDevicePoolsAsync(array $args = [])
 * @method \ILAB_Aws\Result listDevices(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDevicesAsync(array $args = [])
 * @method \ILAB_Aws\Result listJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listJobsAsync(array $args = [])
 * @method \ILAB_Aws\Result listNetworkProfiles(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listNetworkProfilesAsync(array $args = [])
 * @method \ILAB_Aws\Result listOfferingPromotions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listOfferingPromotionsAsync(array $args = [])
 * @method \ILAB_Aws\Result listOfferingTransactions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listOfferingTransactionsAsync(array $args = [])
 * @method \ILAB_Aws\Result listOfferings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listOfferingsAsync(array $args = [])
 * @method \ILAB_Aws\Result listProjects(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listProjectsAsync(array $args = [])
 * @method \ILAB_Aws\Result listRemoteAccessSessions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRemoteAccessSessionsAsync(array $args = [])
 * @method \ILAB_Aws\Result listRuns(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRunsAsync(array $args = [])
 * @method \ILAB_Aws\Result listSamples(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSamplesAsync(array $args = [])
 * @method \ILAB_Aws\Result listSuites(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSuitesAsync(array $args = [])
 * @method \ILAB_Aws\Result listTests(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTestsAsync(array $args = [])
 * @method \ILAB_Aws\Result listUniqueProblems(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listUniqueProblemsAsync(array $args = [])
 * @method \ILAB_Aws\Result listUploads(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listUploadsAsync(array $args = [])
 * @method \ILAB_Aws\Result purchaseOffering(array $args = [])
 * @method \GuzzleHttp\Promise\Promise purchaseOfferingAsync(array $args = [])
 * @method \ILAB_Aws\Result renewOffering(array $args = [])
 * @method \GuzzleHttp\Promise\Promise renewOfferingAsync(array $args = [])
 * @method \ILAB_Aws\Result scheduleRun(array $args = [])
 * @method \GuzzleHttp\Promise\Promise scheduleRunAsync(array $args = [])
 * @method \ILAB_Aws\Result stopRemoteAccessSession(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopRemoteAccessSessionAsync(array $args = [])
 * @method \ILAB_Aws\Result stopRun(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopRunAsync(array $args = [])
 * @method \ILAB_Aws\Result updateDevicePool(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDevicePoolAsync(array $args = [])
 * @method \ILAB_Aws\Result updateNetworkProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateNetworkProfileAsync(array $args = [])
 * @method \ILAB_Aws\Result updateProject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateProjectAsync(array $args = [])
 */
class DeviceFarmClient extends AwsClient {}
