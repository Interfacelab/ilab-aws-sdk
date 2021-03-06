<?php
namespace ILAB_Aws\Iam;

use ILAB_Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Identity and Access Management (AWS IAM)** service.
 *
 * @method \ILAB_Aws\Result addClientIDToOpenIDConnectProvider(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addClientIDToOpenIDConnectProviderAsync(array $args = [])
 * @method \ILAB_Aws\Result addRoleToInstanceProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addRoleToInstanceProfileAsync(array $args = [])
 * @method \ILAB_Aws\Result addUserToGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addUserToGroupAsync(array $args = [])
 * @method \ILAB_Aws\Result attachGroupPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise attachGroupPolicyAsync(array $args = [])
 * @method \ILAB_Aws\Result attachRolePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise attachRolePolicyAsync(array $args = [])
 * @method \ILAB_Aws\Result attachUserPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise attachUserPolicyAsync(array $args = [])
 * @method \ILAB_Aws\Result changePassword(array $args = [])
 * @method \GuzzleHttp\Promise\Promise changePasswordAsync(array $args = [])
 * @method \ILAB_Aws\Result createAccessKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAccessKeyAsync(array $args = [])
 * @method \ILAB_Aws\Result createAccountAlias(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAccountAliasAsync(array $args = [])
 * @method \ILAB_Aws\Result createGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createGroupAsync(array $args = [])
 * @method \ILAB_Aws\Result createInstanceProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createInstanceProfileAsync(array $args = [])
 * @method \ILAB_Aws\Result createLoginProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createLoginProfileAsync(array $args = [])
 * @method \ILAB_Aws\Result createOpenIDConnectProvider(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createOpenIDConnectProviderAsync(array $args = [])
 * @method \ILAB_Aws\Result createPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPolicyAsync(array $args = [])
 * @method \ILAB_Aws\Result createPolicyVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPolicyVersionAsync(array $args = [])
 * @method \ILAB_Aws\Result createRole(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createRoleAsync(array $args = [])
 * @method \ILAB_Aws\Result createSAMLProvider(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSAMLProviderAsync(array $args = [])
 * @method \ILAB_Aws\Result createServiceLinkedRole(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createServiceLinkedRoleAsync(array $args = [])
 * @method \ILAB_Aws\Result createServiceSpecificCredential(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createServiceSpecificCredentialAsync(array $args = [])
 * @method \ILAB_Aws\Result createUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createUserAsync(array $args = [])
 * @method \ILAB_Aws\Result createVirtualMFADevice(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createVirtualMFADeviceAsync(array $args = [])
 * @method \ILAB_Aws\Result deactivateMFADevice(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deactivateMFADeviceAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteAccessKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAccessKeyAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteAccountAlias(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAccountAliasAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteAccountPasswordPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAccountPasswordPolicyAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteGroupAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteGroupPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteGroupPolicyAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteInstanceProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteInstanceProfileAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteLoginProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteLoginProfileAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteOpenIDConnectProvider(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteOpenIDConnectProviderAsync(array $args = [])
 * @method \ILAB_Aws\Result deletePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deletePolicyAsync(array $args = [])
 * @method \ILAB_Aws\Result deletePolicyVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deletePolicyVersionAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteRole(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRoleAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteRolePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRolePolicyAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteSAMLProvider(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSAMLProviderAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteSSHPublicKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSSHPublicKeyAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteServerCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteServerCertificateAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteServiceSpecificCredential(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteServiceSpecificCredentialAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteSigningCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSigningCertificateAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteUserAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteUserPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteUserPolicyAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteVirtualMFADevice(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteVirtualMFADeviceAsync(array $args = [])
 * @method \ILAB_Aws\Result detachGroupPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise detachGroupPolicyAsync(array $args = [])
 * @method \ILAB_Aws\Result detachRolePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise detachRolePolicyAsync(array $args = [])
 * @method \ILAB_Aws\Result detachUserPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise detachUserPolicyAsync(array $args = [])
 * @method \ILAB_Aws\Result enableMFADevice(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableMFADeviceAsync(array $args = [])
 * @method \ILAB_Aws\Result generateCredentialReport(array $args = [])
 * @method \GuzzleHttp\Promise\Promise generateCredentialReportAsync(array $args = [])
 * @method \ILAB_Aws\Result getAccessKeyLastUsed(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAccessKeyLastUsedAsync(array $args = [])
 * @method \ILAB_Aws\Result getAccountAuthorizationDetails(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAccountAuthorizationDetailsAsync(array $args = [])
 * @method \ILAB_Aws\Result getAccountPasswordPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAccountPasswordPolicyAsync(array $args = [])
 * @method \ILAB_Aws\Result getAccountSummary(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAccountSummaryAsync(array $args = [])
 * @method \ILAB_Aws\Result getContextKeysForCustomPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getContextKeysForCustomPolicyAsync(array $args = [])
 * @method \ILAB_Aws\Result getContextKeysForPrincipalPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getContextKeysForPrincipalPolicyAsync(array $args = [])
 * @method \ILAB_Aws\Result getCredentialReport(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCredentialReportAsync(array $args = [])
 * @method \ILAB_Aws\Result getGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getGroupAsync(array $args = [])
 * @method \ILAB_Aws\Result getGroupPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getGroupPolicyAsync(array $args = [])
 * @method \ILAB_Aws\Result getInstanceProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getInstanceProfileAsync(array $args = [])
 * @method \ILAB_Aws\Result getLoginProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getLoginProfileAsync(array $args = [])
 * @method \ILAB_Aws\Result getOpenIDConnectProvider(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getOpenIDConnectProviderAsync(array $args = [])
 * @method \ILAB_Aws\Result getPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPolicyAsync(array $args = [])
 * @method \ILAB_Aws\Result getPolicyVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPolicyVersionAsync(array $args = [])
 * @method \ILAB_Aws\Result getRole(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRoleAsync(array $args = [])
 * @method \ILAB_Aws\Result getRolePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRolePolicyAsync(array $args = [])
 * @method \ILAB_Aws\Result getSAMLProvider(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSAMLProviderAsync(array $args = [])
 * @method \ILAB_Aws\Result getSSHPublicKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSSHPublicKeyAsync(array $args = [])
 * @method \ILAB_Aws\Result getServerCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getServerCertificateAsync(array $args = [])
 * @method \ILAB_Aws\Result getUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getUserAsync(array $args = [])
 * @method \ILAB_Aws\Result getUserPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getUserPolicyAsync(array $args = [])
 * @method \ILAB_Aws\Result listAccessKeys(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAccessKeysAsync(array $args = [])
 * @method \ILAB_Aws\Result listAccountAliases(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAccountAliasesAsync(array $args = [])
 * @method \ILAB_Aws\Result listAttachedGroupPolicies(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAttachedGroupPoliciesAsync(array $args = [])
 * @method \ILAB_Aws\Result listAttachedRolePolicies(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAttachedRolePoliciesAsync(array $args = [])
 * @method \ILAB_Aws\Result listAttachedUserPolicies(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAttachedUserPoliciesAsync(array $args = [])
 * @method \ILAB_Aws\Result listEntitiesForPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listEntitiesForPolicyAsync(array $args = [])
 * @method \ILAB_Aws\Result listGroupPolicies(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listGroupPoliciesAsync(array $args = [])
 * @method \ILAB_Aws\Result listGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listGroupsAsync(array $args = [])
 * @method \ILAB_Aws\Result listGroupsForUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listGroupsForUserAsync(array $args = [])
 * @method \ILAB_Aws\Result listInstanceProfiles(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listInstanceProfilesAsync(array $args = [])
 * @method \ILAB_Aws\Result listInstanceProfilesForRole(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listInstanceProfilesForRoleAsync(array $args = [])
 * @method \ILAB_Aws\Result listMFADevices(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listMFADevicesAsync(array $args = [])
 * @method \ILAB_Aws\Result listOpenIDConnectProviders(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listOpenIDConnectProvidersAsync(array $args = [])
 * @method \ILAB_Aws\Result listPolicies(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPoliciesAsync(array $args = [])
 * @method \ILAB_Aws\Result listPolicyVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPolicyVersionsAsync(array $args = [])
 * @method \ILAB_Aws\Result listRolePolicies(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRolePoliciesAsync(array $args = [])
 * @method \ILAB_Aws\Result listRoles(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRolesAsync(array $args = [])
 * @method \ILAB_Aws\Result listSAMLProviders(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSAMLProvidersAsync(array $args = [])
 * @method \ILAB_Aws\Result listSSHPublicKeys(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSSHPublicKeysAsync(array $args = [])
 * @method \ILAB_Aws\Result listServerCertificates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listServerCertificatesAsync(array $args = [])
 * @method \ILAB_Aws\Result listServiceSpecificCredentials(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listServiceSpecificCredentialsAsync(array $args = [])
 * @method \ILAB_Aws\Result listSigningCertificates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSigningCertificatesAsync(array $args = [])
 * @method \ILAB_Aws\Result listUserPolicies(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listUserPoliciesAsync(array $args = [])
 * @method \ILAB_Aws\Result listUsers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listUsersAsync(array $args = [])
 * @method \ILAB_Aws\Result listVirtualMFADevices(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listVirtualMFADevicesAsync(array $args = [])
 * @method \ILAB_Aws\Result putGroupPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putGroupPolicyAsync(array $args = [])
 * @method \ILAB_Aws\Result putRolePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putRolePolicyAsync(array $args = [])
 * @method \ILAB_Aws\Result putUserPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putUserPolicyAsync(array $args = [])
 * @method \ILAB_Aws\Result removeClientIDFromOpenIDConnectProvider(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeClientIDFromOpenIDConnectProviderAsync(array $args = [])
 * @method \ILAB_Aws\Result removeRoleFromInstanceProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeRoleFromInstanceProfileAsync(array $args = [])
 * @method \ILAB_Aws\Result removeUserFromGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeUserFromGroupAsync(array $args = [])
 * @method \ILAB_Aws\Result resetServiceSpecificCredential(array $args = [])
 * @method \GuzzleHttp\Promise\Promise resetServiceSpecificCredentialAsync(array $args = [])
 * @method \ILAB_Aws\Result resyncMFADevice(array $args = [])
 * @method \GuzzleHttp\Promise\Promise resyncMFADeviceAsync(array $args = [])
 * @method \ILAB_Aws\Result setDefaultPolicyVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setDefaultPolicyVersionAsync(array $args = [])
 * @method \ILAB_Aws\Result simulateCustomPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise simulateCustomPolicyAsync(array $args = [])
 * @method \ILAB_Aws\Result simulatePrincipalPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise simulatePrincipalPolicyAsync(array $args = [])
 * @method \ILAB_Aws\Result updateAccessKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAccessKeyAsync(array $args = [])
 * @method \ILAB_Aws\Result updateAccountPasswordPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAccountPasswordPolicyAsync(array $args = [])
 * @method \ILAB_Aws\Result updateAssumeRolePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAssumeRolePolicyAsync(array $args = [])
 * @method \ILAB_Aws\Result updateGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateGroupAsync(array $args = [])
 * @method \ILAB_Aws\Result updateLoginProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateLoginProfileAsync(array $args = [])
 * @method \ILAB_Aws\Result updateOpenIDConnectProviderThumbprint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateOpenIDConnectProviderThumbprintAsync(array $args = [])
 * @method \ILAB_Aws\Result updateRoleDescription(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateRoleDescriptionAsync(array $args = [])
 * @method \ILAB_Aws\Result updateSAMLProvider(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateSAMLProviderAsync(array $args = [])
 * @method \ILAB_Aws\Result updateSSHPublicKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateSSHPublicKeyAsync(array $args = [])
 * @method \ILAB_Aws\Result updateServerCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateServerCertificateAsync(array $args = [])
 * @method \ILAB_Aws\Result updateServiceSpecificCredential(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateServiceSpecificCredentialAsync(array $args = [])
 * @method \ILAB_Aws\Result updateSigningCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateSigningCertificateAsync(array $args = [])
 * @method \ILAB_Aws\Result updateUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateUserAsync(array $args = [])
 * @method \ILAB_Aws\Result uploadSSHPublicKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise uploadSSHPublicKeyAsync(array $args = [])
 * @method \ILAB_Aws\Result uploadServerCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise uploadServerCertificateAsync(array $args = [])
 * @method \ILAB_Aws\Result uploadSigningCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise uploadSigningCertificateAsync(array $args = [])
 */
class IamClient extends AwsClient {}
