<?php
namespace ILAB_Aws\Ssm;

use ILAB_Aws\AwsClient;

/**
 * Amazon EC2 Simple Systems Manager client.
 *
 * @method \ILAB_Aws\Result addTagsToResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addTagsToResourceAsync(array $args = [])
 * @method \ILAB_Aws\Result cancelCommand(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelCommandAsync(array $args = [])
 * @method \ILAB_Aws\Result createActivation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createActivationAsync(array $args = [])
 * @method \ILAB_Aws\Result createAssociation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAssociationAsync(array $args = [])
 * @method \ILAB_Aws\Result createAssociationBatch(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAssociationBatchAsync(array $args = [])
 * @method \ILAB_Aws\Result createDocument(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDocumentAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteActivation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteActivationAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteAssociation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAssociationAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteDocument(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDocumentAsync(array $args = [])
 * @method \ILAB_Aws\Result deregisterManagedInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deregisterManagedInstanceAsync(array $args = [])
 * @method \ILAB_Aws\Result describeActivations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeActivationsAsync(array $args = [])
 * @method \ILAB_Aws\Result describeAssociation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAssociationAsync(array $args = [])
 * @method \ILAB_Aws\Result describeDocument(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDocumentAsync(array $args = [])
 * @method \ILAB_Aws\Result describeDocumentPermission(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDocumentPermissionAsync(array $args = [])
 * @method \ILAB_Aws\Result describeInstanceInformation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstanceInformationAsync(array $args = [])
 * @method \ILAB_Aws\Result getDocument(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDocumentAsync(array $args = [])
 * @method \ILAB_Aws\Result listAssociations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAssociationsAsync(array $args = [])
 * @method \ILAB_Aws\Result listCommandInvocations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listCommandInvocationsAsync(array $args = [])
 * @method \ILAB_Aws\Result listCommands(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listCommandsAsync(array $args = [])
 * @method \ILAB_Aws\Result listDocuments(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDocumentsAsync(array $args = [])
 * @method \ILAB_Aws\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \ILAB_Aws\Result modifyDocumentPermission(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyDocumentPermissionAsync(array $args = [])
 * @method \ILAB_Aws\Result removeTagsFromResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeTagsFromResourceAsync(array $args = [])
 * @method \ILAB_Aws\Result sendCommand(array $args = [])
 * @method \GuzzleHttp\Promise\Promise sendCommandAsync(array $args = [])
 * @method \ILAB_Aws\Result updateAssociationStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAssociationStatusAsync(array $args = [])
 * @method \ILAB_Aws\Result updateManagedInstanceRole(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateManagedInstanceRoleAsync(array $args = [])
 */
class SsmClient extends AwsClient {}
