<?php
namespace ILAB_Aws\Budgets;

use ILAB_Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Budgets** service.
 * @method \ILAB_Aws\Result createBudget(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createBudgetAsync(array $args = [])
 * @method \ILAB_Aws\Result createNotification(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createNotificationAsync(array $args = [])
 * @method \ILAB_Aws\Result createSubscriber(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSubscriberAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteBudget(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBudgetAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteNotification(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteNotificationAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteSubscriber(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSubscriberAsync(array $args = [])
 * @method \ILAB_Aws\Result describeBudget(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeBudgetAsync(array $args = [])
 * @method \ILAB_Aws\Result describeBudgets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeBudgetsAsync(array $args = [])
 * @method \ILAB_Aws\Result describeNotificationsForBudget(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeNotificationsForBudgetAsync(array $args = [])
 * @method \ILAB_Aws\Result describeSubscribersForNotification(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSubscribersForNotificationAsync(array $args = [])
 * @method \ILAB_Aws\Result updateBudget(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateBudgetAsync(array $args = [])
 * @method \ILAB_Aws\Result updateNotification(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateNotificationAsync(array $args = [])
 * @method \ILAB_Aws\Result updateSubscriber(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateSubscriberAsync(array $args = [])
 */
class BudgetsClient extends AwsClient {}
