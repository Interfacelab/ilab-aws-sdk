<?php
namespace ILAB_Aws\Waf;

use ILAB_Aws\AwsClient;

/**
 * This client is used to interact with the **AWS WAF** service.
 *
 * @method \ILAB_Aws\Result createByteMatchSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createByteMatchSetAsync(array $args = [])
 * @method \ILAB_Aws\Result createIPSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createIPSetAsync(array $args = [])
 * @method \ILAB_Aws\Result createRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createRuleAsync(array $args = [])
 * @method \ILAB_Aws\Result createSizeConstraintSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSizeConstraintSetAsync(array $args = [])
 * @method \ILAB_Aws\Result createSqlInjectionMatchSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSqlInjectionMatchSetAsync(array $args = [])
 * @method \ILAB_Aws\Result createWebACL(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createWebACLAsync(array $args = [])
 * @method \ILAB_Aws\Result createXssMatchSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createXssMatchSetAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteByteMatchSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteByteMatchSetAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteIPSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteIPSetAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRuleAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteSizeConstraintSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSizeConstraintSetAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteSqlInjectionMatchSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSqlInjectionMatchSetAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteWebACL(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteWebACLAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteXssMatchSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteXssMatchSetAsync(array $args = [])
 * @method \ILAB_Aws\Result getByteMatchSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getByteMatchSetAsync(array $args = [])
 * @method \ILAB_Aws\Result getChangeToken(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getChangeTokenAsync(array $args = [])
 * @method \ILAB_Aws\Result getChangeTokenStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getChangeTokenStatusAsync(array $args = [])
 * @method \ILAB_Aws\Result getIPSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getIPSetAsync(array $args = [])
 * @method \ILAB_Aws\Result getRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRuleAsync(array $args = [])
 * @method \ILAB_Aws\Result getSampledRequests(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSampledRequestsAsync(array $args = [])
 * @method \ILAB_Aws\Result getSizeConstraintSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSizeConstraintSetAsync(array $args = [])
 * @method \ILAB_Aws\Result getSqlInjectionMatchSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSqlInjectionMatchSetAsync(array $args = [])
 * @method \ILAB_Aws\Result getWebACL(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getWebACLAsync(array $args = [])
 * @method \ILAB_Aws\Result getXssMatchSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getXssMatchSetAsync(array $args = [])
 * @method \ILAB_Aws\Result listByteMatchSets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listByteMatchSetsAsync(array $args = [])
 * @method \ILAB_Aws\Result listIPSets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listIPSetsAsync(array $args = [])
 * @method \ILAB_Aws\Result listRules(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRulesAsync(array $args = [])
 * @method \ILAB_Aws\Result listSizeConstraintSets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSizeConstraintSetsAsync(array $args = [])
 * @method \ILAB_Aws\Result listSqlInjectionMatchSets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSqlInjectionMatchSetsAsync(array $args = [])
 * @method \ILAB_Aws\Result listWebACLs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listWebACLsAsync(array $args = [])
 * @method \ILAB_Aws\Result listXssMatchSets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listXssMatchSetsAsync(array $args = [])
 * @method \ILAB_Aws\Result updateByteMatchSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateByteMatchSetAsync(array $args = [])
 * @method \ILAB_Aws\Result updateIPSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateIPSetAsync(array $args = [])
 * @method \ILAB_Aws\Result updateRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateRuleAsync(array $args = [])
 * @method \ILAB_Aws\Result updateSizeConstraintSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateSizeConstraintSetAsync(array $args = [])
 * @method \ILAB_Aws\Result updateSqlInjectionMatchSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateSqlInjectionMatchSetAsync(array $args = [])
 * @method \ILAB_Aws\Result updateWebACL(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateWebACLAsync(array $args = [])
 * @method \ILAB_Aws\Result updateXssMatchSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateXssMatchSetAsync(array $args = [])
 */
class WafClient extends AwsClient {}
