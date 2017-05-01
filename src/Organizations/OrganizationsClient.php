<?php
namespace ILAB_Aws\Organizations;

use ILAB_Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Organizations** service.
 * @method \ILAB_Aws\Result acceptHandshake(array $args = [])
 * @method \GuzzleHttp\Promise\Promise acceptHandshakeAsync(array $args = [])
 * @method \ILAB_Aws\Result attachPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise attachPolicyAsync(array $args = [])
 * @method \ILAB_Aws\Result cancelHandshake(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelHandshakeAsync(array $args = [])
 * @method \ILAB_Aws\Result createAccount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAccountAsync(array $args = [])
 * @method \ILAB_Aws\Result createOrganization(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createOrganizationAsync(array $args = [])
 * @method \ILAB_Aws\Result createOrganizationalUnit(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createOrganizationalUnitAsync(array $args = [])
 * @method \ILAB_Aws\Result createPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPolicyAsync(array $args = [])
 * @method \ILAB_Aws\Result declineHandshake(array $args = [])
 * @method \GuzzleHttp\Promise\Promise declineHandshakeAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteOrganization(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteOrganizationAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteOrganizationalUnit(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteOrganizationalUnitAsync(array $args = [])
 * @method \ILAB_Aws\Result deletePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deletePolicyAsync(array $args = [])
 * @method \ILAB_Aws\Result describeAccount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAccountAsync(array $args = [])
 * @method \ILAB_Aws\Result describeCreateAccountStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCreateAccountStatusAsync(array $args = [])
 * @method \ILAB_Aws\Result describeHandshake(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeHandshakeAsync(array $args = [])
 * @method \ILAB_Aws\Result describeOrganization(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeOrganizationAsync(array $args = [])
 * @method \ILAB_Aws\Result describeOrganizationalUnit(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeOrganizationalUnitAsync(array $args = [])
 * @method \ILAB_Aws\Result describePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePolicyAsync(array $args = [])
 * @method \ILAB_Aws\Result detachPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise detachPolicyAsync(array $args = [])
 * @method \ILAB_Aws\Result disablePolicyType(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disablePolicyTypeAsync(array $args = [])
 * @method \ILAB_Aws\Result enableAllFeatures(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableAllFeaturesAsync(array $args = [])
 * @method \ILAB_Aws\Result enablePolicyType(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enablePolicyTypeAsync(array $args = [])
 * @method \ILAB_Aws\Result inviteAccountToOrganization(array $args = [])
 * @method \GuzzleHttp\Promise\Promise inviteAccountToOrganizationAsync(array $args = [])
 * @method \ILAB_Aws\Result leaveOrganization(array $args = [])
 * @method \GuzzleHttp\Promise\Promise leaveOrganizationAsync(array $args = [])
 * @method \ILAB_Aws\Result listAccounts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAccountsAsync(array $args = [])
 * @method \ILAB_Aws\Result listAccountsForParent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAccountsForParentAsync(array $args = [])
 * @method \ILAB_Aws\Result listChildren(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listChildrenAsync(array $args = [])
 * @method \ILAB_Aws\Result listCreateAccountStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listCreateAccountStatusAsync(array $args = [])
 * @method \ILAB_Aws\Result listHandshakesForAccount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listHandshakesForAccountAsync(array $args = [])
 * @method \ILAB_Aws\Result listHandshakesForOrganization(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listHandshakesForOrganizationAsync(array $args = [])
 * @method \ILAB_Aws\Result listOrganizationalUnitsForParent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listOrganizationalUnitsForParentAsync(array $args = [])
 * @method \ILAB_Aws\Result listParents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listParentsAsync(array $args = [])
 * @method \ILAB_Aws\Result listPolicies(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPoliciesAsync(array $args = [])
 * @method \ILAB_Aws\Result listPoliciesForTarget(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPoliciesForTargetAsync(array $args = [])
 * @method \ILAB_Aws\Result listRoots(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRootsAsync(array $args = [])
 * @method \ILAB_Aws\Result listTargetsForPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTargetsForPolicyAsync(array $args = [])
 * @method \ILAB_Aws\Result moveAccount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise moveAccountAsync(array $args = [])
 * @method \ILAB_Aws\Result removeAccountFromOrganization(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeAccountFromOrganizationAsync(array $args = [])
 * @method \ILAB_Aws\Result updateOrganizationalUnit(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateOrganizationalUnitAsync(array $args = [])
 * @method \ILAB_Aws\Result updatePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updatePolicyAsync(array $args = [])
 */
class OrganizationsClient extends AwsClient {}
