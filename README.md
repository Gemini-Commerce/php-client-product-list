# product-list

API for managing collection


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/Gemini-Commerce/php-client-product-list.git"
    }
  ],
  "require": {
    "Gemini-Commerce/php-client-product-list": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/product-list/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure OAuth2 access token for authorization: standardAuthorization
$config = GeminiCommerce\ProductList\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new GeminiCommerce\ProductList\Api\ProductListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\ProductList\Model\ProductlistBulkUpdateProductListAssociationsRequest(); // \GeminiCommerce\ProductList\Model\ProductlistBulkUpdateProductListAssociationsRequest

try {
    $result = $apiInstance->bulkUpdateProductListAssociations($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductListApi->bulkUpdateProductListAssociations: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://product-list.api.gogemini.io*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ProductListApi* | [**bulkUpdateProductListAssociations**](docs/Api/ProductListApi.md#bulkupdateproductlistassociations) | **POST** /productlist.ProductList/BulkUpdateProductListAssociations | Bulk update collection associations position
*ProductListApi* | [**createProductList**](docs/Api/ProductListApi.md#createproductlist) | **POST** /productlist.ProductList/CreateProductList | Create Collection
*ProductListApi* | [**createProductListAssociation**](docs/Api/ProductListApi.md#createproductlistassociation) | **POST** /productlist.ProductList/CreateProductListAssociation | Create Collection/Product Association
*ProductListApi* | [**deleteProductList**](docs/Api/ProductListApi.md#deleteproductlist) | **POST** /productlist.ProductList/DeleteProductList | Delete Collection
*ProductListApi* | [**deleteProductListAssociation**](docs/Api/ProductListApi.md#deleteproductlistassociation) | **POST** /productlist.ProductList/DeleteProductListAssociation | Delete Collection/Product Association
*ProductListApi* | [**getProductListAssociationsByProductGrn**](docs/Api/ProductListApi.md#getproductlistassociationsbyproductgrn) | **POST** /productlist.ProductList/GetProductListAssociationsByProductGrn | Get Collection/Product Associations by Product GRN
*ProductListApi* | [**getProductListByCode**](docs/Api/ProductListApi.md#getproductlistbycode) | **POST** /productlist.ProductList/GetProductListByCode | Get Collection by Code
*ProductListApi* | [**getProductListById**](docs/Api/ProductListApi.md#getproductlistbyid) | **POST** /productlist.ProductList/GetProductListById | Get Collection by Id
*ProductListApi* | [**getProductListByUrlKey**](docs/Api/ProductListApi.md#getproductlistbyurlkey) | **POST** /productlist.ProductList/GetProductListByUrlKey | Get Collection by Url Key
*ProductListApi* | [**getProductListsCount**](docs/Api/ProductListApi.md#getproductlistscount) | **POST** /productlist.ProductList/GetProductListsCount | Get Collection Product Count
*ProductListApi* | [**listProductListAssociations**](docs/Api/ProductListApi.md#listproductlistassociations) | **POST** /productlist.ProductList/ListProductListAssociations | List Collection/Product Associations
*ProductListApi* | [**listProductLists**](docs/Api/ProductListApi.md#listproductlists) | **POST** /productlist.ProductList/ListProductLists | List Collections
*ProductListApi* | [**searchProductLists**](docs/Api/ProductListApi.md#searchproductlists) | **POST** /productlist.ProductList/SearchProductLists | Search Collections
*ProductListApi* | [**searchProductListsByIds**](docs/Api/ProductListApi.md#searchproductlistsbyids) | **POST** /productlist.ProductList/SearchProductListsByIds | Search Collections by Ids
*ProductListApi* | [**updateProductList**](docs/Api/ProductListApi.md#updateproductlist) | **POST** /productlist.ProductList/UpdateProductList | Update Collection

## Models

- [OrderByDirection](docs/Model/OrderByDirection.md)
- [ProductlistBulkUpdateProductListAssociationsRequest](docs/Model/ProductlistBulkUpdateProductListAssociationsRequest.md)
- [ProductlistBulkUpdateProductListAssociationsRequestProductListAssociation](docs/Model/ProductlistBulkUpdateProductListAssociationsRequestProductListAssociation.md)
- [ProductlistCreateProductListAssociationRequest](docs/Model/ProductlistCreateProductListAssociationRequest.md)
- [ProductlistCreateProductListAssociationResponse](docs/Model/ProductlistCreateProductListAssociationResponse.md)
- [ProductlistCreateProductListRequest](docs/Model/ProductlistCreateProductListRequest.md)
- [ProductlistCreateProductListResponse](docs/Model/ProductlistCreateProductListResponse.md)
- [ProductlistDeleteProductListAssociationRequest](docs/Model/ProductlistDeleteProductListAssociationRequest.md)
- [ProductlistDeleteProductListAssociationResponse](docs/Model/ProductlistDeleteProductListAssociationResponse.md)
- [ProductlistDeleteProductListRequest](docs/Model/ProductlistDeleteProductListRequest.md)
- [ProductlistDeleteProductListResponse](docs/Model/ProductlistDeleteProductListResponse.md)
- [ProductlistGetProductListAssociationsByProductGrnRequest](docs/Model/ProductlistGetProductListAssociationsByProductGrnRequest.md)
- [ProductlistGetProductListAssociationsByProductGrnResponse](docs/Model/ProductlistGetProductListAssociationsByProductGrnResponse.md)
- [ProductlistGetProductListByCodeRequest](docs/Model/ProductlistGetProductListByCodeRequest.md)
- [ProductlistGetProductListByCodeResponse](docs/Model/ProductlistGetProductListByCodeResponse.md)
- [ProductlistGetProductListByIdRequest](docs/Model/ProductlistGetProductListByIdRequest.md)
- [ProductlistGetProductListByIdResponse](docs/Model/ProductlistGetProductListByIdResponse.md)
- [ProductlistGetProductListByUrlKeyRequest](docs/Model/ProductlistGetProductListByUrlKeyRequest.md)
- [ProductlistGetProductListByUrlKeyResponse](docs/Model/ProductlistGetProductListByUrlKeyResponse.md)
- [ProductlistGetProductListsCountRequest](docs/Model/ProductlistGetProductListsCountRequest.md)
- [ProductlistGetProductListsCountResponse](docs/Model/ProductlistGetProductListsCountResponse.md)
- [ProductlistListProductListAssociationsRequest](docs/Model/ProductlistListProductListAssociationsRequest.md)
- [ProductlistListProductListAssociationsResponse](docs/Model/ProductlistListProductListAssociationsResponse.md)
- [ProductlistListProductListsRequest](docs/Model/ProductlistListProductListsRequest.md)
- [ProductlistListProductListsResponse](docs/Model/ProductlistListProductListsResponse.md)
- [ProductlistLocalizedText](docs/Model/ProductlistLocalizedText.md)
- [ProductlistOrderBy](docs/Model/ProductlistOrderBy.md)
- [ProductlistProductListAssociation](docs/Model/ProductlistProductListAssociation.md)
- [ProductlistProductListAssociationError](docs/Model/ProductlistProductListAssociationError.md)
- [ProductlistProductListEntity](docs/Model/ProductlistProductListEntity.md)
- [ProductlistProductListError](docs/Model/ProductlistProductListError.md)
- [ProductlistSearchProductListsByIdsRequest](docs/Model/ProductlistSearchProductListsByIdsRequest.md)
- [ProductlistSearchProductListsByIdsResponse](docs/Model/ProductlistSearchProductListsByIdsResponse.md)
- [ProductlistSearchProductListsRequest](docs/Model/ProductlistSearchProductListsRequest.md)
- [ProductlistSearchProductListsResponse](docs/Model/ProductlistSearchProductListsResponse.md)
- [ProductlistUpdateProductListRequest](docs/Model/ProductlistUpdateProductListRequest.md)
- [ProductlistUpdateProductListResponse](docs/Model/ProductlistUpdateProductListResponse.md)
- [ProtobufAny](docs/Model/ProtobufAny.md)
- [RpcStatus](docs/Model/RpcStatus.md)
- [SearchProductListsRequestQuery](docs/Model/SearchProductListsRequestQuery.md)

## Authorization

Authentication schemes defined for the API:
### standardAuthorization

- **Type**: `OAuth`
- **Flow**: `implicit`
- **Authorization URL**: ``
- **Scopes**: N/A

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

info@gemini-commerce.com

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `v1`
    - Package version: `1.1.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
