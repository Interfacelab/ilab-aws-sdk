<?php
namespace ILAB_Aws\LexModelBuildingService;

use ILAB_Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon Lex Model Building Service** service.
 * @method \ILAB_Aws\Result createBotVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createBotVersionAsync(array $args = [])
 * @method \ILAB_Aws\Result createIntentVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createIntentVersionAsync(array $args = [])
 * @method \ILAB_Aws\Result createSlotTypeVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSlotTypeVersionAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteBot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBotAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteBotAlias(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBotAliasAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteBotChannelAssociation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBotChannelAssociationAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteBotVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBotVersionAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteIntent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteIntentAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteIntentVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteIntentVersionAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteSlotType(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSlotTypeAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteSlotTypeVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSlotTypeVersionAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteUtterances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteUtterancesAsync(array $args = [])
 * @method \ILAB_Aws\Result getBot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBotAsync(array $args = [])
 * @method \ILAB_Aws\Result getBotAlias(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBotAliasAsync(array $args = [])
 * @method \ILAB_Aws\Result getBotAliases(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBotAliasesAsync(array $args = [])
 * @method \ILAB_Aws\Result getBotChannelAssociation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBotChannelAssociationAsync(array $args = [])
 * @method \ILAB_Aws\Result getBotChannelAssociations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBotChannelAssociationsAsync(array $args = [])
 * @method \ILAB_Aws\Result getBotVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBotVersionsAsync(array $args = [])
 * @method \ILAB_Aws\Result getBots(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBotsAsync(array $args = [])
 * @method \ILAB_Aws\Result getBuiltinIntent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBuiltinIntentAsync(array $args = [])
 * @method \ILAB_Aws\Result getBuiltinIntents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBuiltinIntentsAsync(array $args = [])
 * @method \ILAB_Aws\Result getBuiltinSlotTypes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBuiltinSlotTypesAsync(array $args = [])
 * @method \ILAB_Aws\Result getExport(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getExportAsync(array $args = [])
 * @method \ILAB_Aws\Result getIntent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getIntentAsync(array $args = [])
 * @method \ILAB_Aws\Result getIntentVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getIntentVersionsAsync(array $args = [])
 * @method \ILAB_Aws\Result getIntents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getIntentsAsync(array $args = [])
 * @method \ILAB_Aws\Result getSlotType(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSlotTypeAsync(array $args = [])
 * @method \ILAB_Aws\Result getSlotTypeVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSlotTypeVersionsAsync(array $args = [])
 * @method \ILAB_Aws\Result getSlotTypes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSlotTypesAsync(array $args = [])
 * @method \ILAB_Aws\Result getUtterancesView(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getUtterancesViewAsync(array $args = [])
 * @method \ILAB_Aws\Result putBot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putBotAsync(array $args = [])
 * @method \ILAB_Aws\Result putBotAlias(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putBotAliasAsync(array $args = [])
 * @method \ILAB_Aws\Result putIntent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putIntentAsync(array $args = [])
 * @method \ILAB_Aws\Result putSlotType(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putSlotTypeAsync(array $args = [])
 */
class LexModelBuildingServiceClient extends AwsClient {}
