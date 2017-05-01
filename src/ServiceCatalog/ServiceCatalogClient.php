<?php
namespace ILAB_Aws\ServiceCatalog;

use ILAB_Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Service Catalog** service.
 * @method \ILAB_Aws\Result acceptPortfolioShare(array $args = [])
 * @method \GuzzleHttp\Promise\Promise acceptPortfolioShareAsync(array $args = [])
 * @method \ILAB_Aws\Result associatePrincipalWithPortfolio(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associatePrincipalWithPortfolioAsync(array $args = [])
 * @method \ILAB_Aws\Result associateProductWithPortfolio(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateProductWithPortfolioAsync(array $args = [])
 * @method \ILAB_Aws\Result createConstraint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createConstraintAsync(array $args = [])
 * @method \ILAB_Aws\Result createPortfolio(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPortfolioAsync(array $args = [])
 * @method \ILAB_Aws\Result createPortfolioShare(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPortfolioShareAsync(array $args = [])
 * @method \ILAB_Aws\Result createProduct(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createProductAsync(array $args = [])
 * @method \ILAB_Aws\Result createProvisioningArtifact(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createProvisioningArtifactAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteConstraint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteConstraintAsync(array $args = [])
 * @method \ILAB_Aws\Result deletePortfolio(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deletePortfolioAsync(array $args = [])
 * @method \ILAB_Aws\Result deletePortfolioShare(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deletePortfolioShareAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteProduct(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteProductAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteProvisioningArtifact(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteProvisioningArtifactAsync(array $args = [])
 * @method \ILAB_Aws\Result describeConstraint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeConstraintAsync(array $args = [])
 * @method \ILAB_Aws\Result describePortfolio(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePortfolioAsync(array $args = [])
 * @method \ILAB_Aws\Result describeProduct(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeProductAsync(array $args = [])
 * @method \ILAB_Aws\Result describeProductAsAdmin(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeProductAsAdminAsync(array $args = [])
 * @method \ILAB_Aws\Result describeProductView(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeProductViewAsync(array $args = [])
 * @method \ILAB_Aws\Result describeProvisioningArtifact(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeProvisioningArtifactAsync(array $args = [])
 * @method \ILAB_Aws\Result describeProvisioningParameters(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeProvisioningParametersAsync(array $args = [])
 * @method \ILAB_Aws\Result describeRecord(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRecordAsync(array $args = [])
 * @method \ILAB_Aws\Result disassociatePrincipalFromPortfolio(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociatePrincipalFromPortfolioAsync(array $args = [])
 * @method \ILAB_Aws\Result disassociateProductFromPortfolio(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateProductFromPortfolioAsync(array $args = [])
 * @method \ILAB_Aws\Result listAcceptedPortfolioShares(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAcceptedPortfolioSharesAsync(array $args = [])
 * @method \ILAB_Aws\Result listConstraintsForPortfolio(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listConstraintsForPortfolioAsync(array $args = [])
 * @method \ILAB_Aws\Result listLaunchPaths(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listLaunchPathsAsync(array $args = [])
 * @method \ILAB_Aws\Result listPortfolioAccess(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPortfolioAccessAsync(array $args = [])
 * @method \ILAB_Aws\Result listPortfolios(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPortfoliosAsync(array $args = [])
 * @method \ILAB_Aws\Result listPortfoliosForProduct(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPortfoliosForProductAsync(array $args = [])
 * @method \ILAB_Aws\Result listPrincipalsForPortfolio(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPrincipalsForPortfolioAsync(array $args = [])
 * @method \ILAB_Aws\Result listProvisioningArtifacts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listProvisioningArtifactsAsync(array $args = [])
 * @method \ILAB_Aws\Result listRecordHistory(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRecordHistoryAsync(array $args = [])
 * @method \ILAB_Aws\Result provisionProduct(array $args = [])
 * @method \GuzzleHttp\Promise\Promise provisionProductAsync(array $args = [])
 * @method \ILAB_Aws\Result rejectPortfolioShare(array $args = [])
 * @method \GuzzleHttp\Promise\Promise rejectPortfolioShareAsync(array $args = [])
 * @method \ILAB_Aws\Result scanProvisionedProducts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise scanProvisionedProductsAsync(array $args = [])
 * @method \ILAB_Aws\Result searchProducts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise searchProductsAsync(array $args = [])
 * @method \ILAB_Aws\Result searchProductsAsAdmin(array $args = [])
 * @method \GuzzleHttp\Promise\Promise searchProductsAsAdminAsync(array $args = [])
 * @method \ILAB_Aws\Result terminateProvisionedProduct(array $args = [])
 * @method \GuzzleHttp\Promise\Promise terminateProvisionedProductAsync(array $args = [])
 * @method \ILAB_Aws\Result updateConstraint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateConstraintAsync(array $args = [])
 * @method \ILAB_Aws\Result updatePortfolio(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updatePortfolioAsync(array $args = [])
 * @method \ILAB_Aws\Result updateProduct(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateProductAsync(array $args = [])
 * @method \ILAB_Aws\Result updateProvisionedProduct(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateProvisionedProductAsync(array $args = [])
 * @method \ILAB_Aws\Result updateProvisioningArtifact(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateProvisioningArtifactAsync(array $args = [])
 */
class ServiceCatalogClient extends AwsClient {}
