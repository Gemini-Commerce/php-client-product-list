# GeminiCommerce\ProductList\ProductListApi

All URIs are relative to https://product-list.api.gogemini.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**bulkUpdateProductListAssociations()**](ProductListApi.md#bulkUpdateProductListAssociations) | **POST** /productlist.ProductList/BulkUpdateProductListAssociations | Bulk update collection associations position |
| [**createProductList()**](ProductListApi.md#createProductList) | **POST** /productlist.ProductList/CreateProductList | Create Collection |
| [**createProductListAssociation()**](ProductListApi.md#createProductListAssociation) | **POST** /productlist.ProductList/CreateProductListAssociation | Create Collection/Product Association |
| [**deleteProductList()**](ProductListApi.md#deleteProductList) | **POST** /productlist.ProductList/DeleteProductList | Delete Collection |
| [**deleteProductListAssociation()**](ProductListApi.md#deleteProductListAssociation) | **POST** /productlist.ProductList/DeleteProductListAssociation | Delete Collection/Product Association |
| [**getProductListAssociationsByProductGrn()**](ProductListApi.md#getProductListAssociationsByProductGrn) | **POST** /productlist.ProductList/GetProductListAssociationsByProductGrn | Get Collection/Product Associations by Product GRN |
| [**getProductListByCode()**](ProductListApi.md#getProductListByCode) | **POST** /productlist.ProductList/GetProductListByCode | Get Collection by Code |
| [**getProductListById()**](ProductListApi.md#getProductListById) | **POST** /productlist.ProductList/GetProductListById | Get Collection by Id |
| [**getProductListByUrlKey()**](ProductListApi.md#getProductListByUrlKey) | **POST** /productlist.ProductList/GetProductListByUrlKey | Get Collection by Url Key |
| [**getProductListsCount()**](ProductListApi.md#getProductListsCount) | **POST** /productlist.ProductList/GetProductListsCount | Get Collection Product Count |
| [**listProductListAssociations()**](ProductListApi.md#listProductListAssociations) | **POST** /productlist.ProductList/ListProductListAssociations | List Collection/Product Associations |
| [**listProductLists()**](ProductListApi.md#listProductLists) | **POST** /productlist.ProductList/ListProductLists | List Collections |
| [**searchProductLists()**](ProductListApi.md#searchProductLists) | **POST** /productlist.ProductList/SearchProductLists | Search Collections |
| [**searchProductListsByIds()**](ProductListApi.md#searchProductListsByIds) | **POST** /productlist.ProductList/SearchProductListsByIds | Search Collections by Ids |
| [**updateProductList()**](ProductListApi.md#updateProductList) | **POST** /productlist.ProductList/UpdateProductList | Update Collection |


## `bulkUpdateProductListAssociations()`

```php
bulkUpdateProductListAssociations($body): \GeminiCommerce\ProductList\Model\RpcStatus
```

Bulk update collection associations position

The BulkUpdateProductListAssociations endpoint updates the positions of specified associations.

### Example

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

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\ProductList\Model\ProductlistBulkUpdateProductListAssociationsRequest**](../Model/ProductlistBulkUpdateProductListAssociationsRequest.md)|  | |

### Return type

[**\GeminiCommerce\ProductList\Model\RpcStatus**](../Model/RpcStatus.md)

### Authorization

[standardAuthorization](../../README.md#standardAuthorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createProductList()`

```php
createProductList($body): \GeminiCommerce\ProductList\Model\ProductlistCreateProductListResponse
```

Create Collection

The CreateProductList endpoint is used to create a new collection of products within the system. This endpoint allows users to define the details and attributes of the collection.

### Example

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
$body = new \GeminiCommerce\ProductList\Model\ProductlistCreateProductListRequest(); // \GeminiCommerce\ProductList\Model\ProductlistCreateProductListRequest

try {
    $result = $apiInstance->createProductList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductListApi->createProductList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\ProductList\Model\ProductlistCreateProductListRequest**](../Model/ProductlistCreateProductListRequest.md)|  | |

### Return type

[**\GeminiCommerce\ProductList\Model\ProductlistCreateProductListResponse**](../Model/ProductlistCreateProductListResponse.md)

### Authorization

[standardAuthorization](../../README.md#standardAuthorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createProductListAssociation()`

```php
createProductListAssociation($body): \GeminiCommerce\ProductList\Model\ProductlistCreateProductListAssociationResponse
```

Create Collection/Product Association

The CreateProductListAssociation endpoint is used to create an association between a collection and a product.

### Example

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
$body = new \GeminiCommerce\ProductList\Model\ProductlistCreateProductListAssociationRequest(); // \GeminiCommerce\ProductList\Model\ProductlistCreateProductListAssociationRequest

try {
    $result = $apiInstance->createProductListAssociation($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductListApi->createProductListAssociation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\ProductList\Model\ProductlistCreateProductListAssociationRequest**](../Model/ProductlistCreateProductListAssociationRequest.md)|  | |

### Return type

[**\GeminiCommerce\ProductList\Model\ProductlistCreateProductListAssociationResponse**](../Model/ProductlistCreateProductListAssociationResponse.md)

### Authorization

[standardAuthorization](../../README.md#standardAuthorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteProductList()`

```php
deleteProductList($body): \GeminiCommerce\ProductList\Model\ProductlistDeleteProductListResponse
```

Delete Collection

The DeleteProductList endpoint is used to delete an existing collection of products within the system.

### Example

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
$body = new \GeminiCommerce\ProductList\Model\ProductlistDeleteProductListRequest(); // \GeminiCommerce\ProductList\Model\ProductlistDeleteProductListRequest

try {
    $result = $apiInstance->deleteProductList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductListApi->deleteProductList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\ProductList\Model\ProductlistDeleteProductListRequest**](../Model/ProductlistDeleteProductListRequest.md)|  | |

### Return type

[**\GeminiCommerce\ProductList\Model\ProductlistDeleteProductListResponse**](../Model/ProductlistDeleteProductListResponse.md)

### Authorization

[standardAuthorization](../../README.md#standardAuthorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteProductListAssociation()`

```php
deleteProductListAssociation($body): \GeminiCommerce\ProductList\Model\ProductlistDeleteProductListAssociationResponse
```

Delete Collection/Product Association

The DeleteProductListAssociation endpoint is used to delete an association between a collection and a product.

### Example

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
$body = new \GeminiCommerce\ProductList\Model\ProductlistDeleteProductListAssociationRequest(); // \GeminiCommerce\ProductList\Model\ProductlistDeleteProductListAssociationRequest

try {
    $result = $apiInstance->deleteProductListAssociation($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductListApi->deleteProductListAssociation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\ProductList\Model\ProductlistDeleteProductListAssociationRequest**](../Model/ProductlistDeleteProductListAssociationRequest.md)|  | |

### Return type

[**\GeminiCommerce\ProductList\Model\ProductlistDeleteProductListAssociationResponse**](../Model/ProductlistDeleteProductListAssociationResponse.md)

### Authorization

[standardAuthorization](../../README.md#standardAuthorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProductListAssociationsByProductGrn()`

```php
getProductListAssociationsByProductGrn($body): \GeminiCommerce\ProductList\Model\ProductlistGetProductListAssociationsByProductGrnResponse
```

Get Collection/Product Associations by Product GRN

The GetProductListAssociationsByProductGrn endpoint is used to get the associations between a collection and a list of products by product GRN.

### Example

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
$body = new \GeminiCommerce\ProductList\Model\ProductlistGetProductListAssociationsByProductGrnRequest(); // \GeminiCommerce\ProductList\Model\ProductlistGetProductListAssociationsByProductGrnRequest

try {
    $result = $apiInstance->getProductListAssociationsByProductGrn($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductListApi->getProductListAssociationsByProductGrn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\ProductList\Model\ProductlistGetProductListAssociationsByProductGrnRequest**](../Model/ProductlistGetProductListAssociationsByProductGrnRequest.md)|  | |

### Return type

[**\GeminiCommerce\ProductList\Model\ProductlistGetProductListAssociationsByProductGrnResponse**](../Model/ProductlistGetProductListAssociationsByProductGrnResponse.md)

### Authorization

[standardAuthorization](../../README.md#standardAuthorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProductListByCode()`

```php
getProductListByCode($body): \GeminiCommerce\ProductList\Model\ProductlistGetProductListByCodeResponse
```

Get Collection by Code

The GetProductListByCode endpoint is used to retrieve an existing collection of products within the system.

### Example

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
$body = new \GeminiCommerce\ProductList\Model\ProductlistGetProductListByCodeRequest(); // \GeminiCommerce\ProductList\Model\ProductlistGetProductListByCodeRequest

try {
    $result = $apiInstance->getProductListByCode($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductListApi->getProductListByCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\ProductList\Model\ProductlistGetProductListByCodeRequest**](../Model/ProductlistGetProductListByCodeRequest.md)|  | |

### Return type

[**\GeminiCommerce\ProductList\Model\ProductlistGetProductListByCodeResponse**](../Model/ProductlistGetProductListByCodeResponse.md)

### Authorization

[standardAuthorization](../../README.md#standardAuthorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProductListById()`

```php
getProductListById($body): \GeminiCommerce\ProductList\Model\ProductlistGetProductListByIdResponse
```

Get Collection by Id

The GetProductListById endpoint is used to retrieve an existing collection of products within the system.

### Example

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
$body = new \GeminiCommerce\ProductList\Model\ProductlistGetProductListByIdRequest(); // \GeminiCommerce\ProductList\Model\ProductlistGetProductListByIdRequest

try {
    $result = $apiInstance->getProductListById($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductListApi->getProductListById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\ProductList\Model\ProductlistGetProductListByIdRequest**](../Model/ProductlistGetProductListByIdRequest.md)|  | |

### Return type

[**\GeminiCommerce\ProductList\Model\ProductlistGetProductListByIdResponse**](../Model/ProductlistGetProductListByIdResponse.md)

### Authorization

[standardAuthorization](../../README.md#standardAuthorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProductListByUrlKey()`

```php
getProductListByUrlKey($body): \GeminiCommerce\ProductList\Model\ProductlistGetProductListByUrlKeyResponse
```

Get Collection by Url Key

The GetProductListByUrlKey endpoint is used to retrieve an existing collection of products within the system.

### Example

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
$body = new \GeminiCommerce\ProductList\Model\ProductlistGetProductListByUrlKeyRequest(); // \GeminiCommerce\ProductList\Model\ProductlistGetProductListByUrlKeyRequest

try {
    $result = $apiInstance->getProductListByUrlKey($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductListApi->getProductListByUrlKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\ProductList\Model\ProductlistGetProductListByUrlKeyRequest**](../Model/ProductlistGetProductListByUrlKeyRequest.md)|  | |

### Return type

[**\GeminiCommerce\ProductList\Model\ProductlistGetProductListByUrlKeyResponse**](../Model/ProductlistGetProductListByUrlKeyResponse.md)

### Authorization

[standardAuthorization](../../README.md#standardAuthorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProductListsCount()`

```php
getProductListsCount($body): \GeminiCommerce\ProductList\Model\ProductlistGetProductListsCountResponse
```

Get Collection Product Count

The GetProductListsCount endpoint is used to get the number of products associated with a collection.

### Example

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
$body = new \GeminiCommerce\ProductList\Model\ProductlistGetProductListsCountRequest(); // \GeminiCommerce\ProductList\Model\ProductlistGetProductListsCountRequest

try {
    $result = $apiInstance->getProductListsCount($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductListApi->getProductListsCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\ProductList\Model\ProductlistGetProductListsCountRequest**](../Model/ProductlistGetProductListsCountRequest.md)|  | |

### Return type

[**\GeminiCommerce\ProductList\Model\ProductlistGetProductListsCountResponse**](../Model/ProductlistGetProductListsCountResponse.md)

### Authorization

[standardAuthorization](../../README.md#standardAuthorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listProductListAssociations()`

```php
listProductListAssociations($body): \GeminiCommerce\ProductList\Model\ProductlistListProductListAssociationsResponse
```

List Collection/Product Associations

The ListProductListAssociations endpoint is used to list the associations between a collection and a list of products.

### Example

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
$body = new \GeminiCommerce\ProductList\Model\ProductlistListProductListAssociationsRequest(); // \GeminiCommerce\ProductList\Model\ProductlistListProductListAssociationsRequest

try {
    $result = $apiInstance->listProductListAssociations($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductListApi->listProductListAssociations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\ProductList\Model\ProductlistListProductListAssociationsRequest**](../Model/ProductlistListProductListAssociationsRequest.md)|  | |

### Return type

[**\GeminiCommerce\ProductList\Model\ProductlistListProductListAssociationsResponse**](../Model/ProductlistListProductListAssociationsResponse.md)

### Authorization

[standardAuthorization](../../README.md#standardAuthorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listProductLists()`

```php
listProductLists($body): \GeminiCommerce\ProductList\Model\ProductlistListProductListsResponse
```

List Collections

The ListProductLists endpoint is used to retrieve a list of existing collections of products within the system.

### Example

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
$body = new \GeminiCommerce\ProductList\Model\ProductlistListProductListsRequest(); // \GeminiCommerce\ProductList\Model\ProductlistListProductListsRequest

try {
    $result = $apiInstance->listProductLists($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductListApi->listProductLists: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\ProductList\Model\ProductlistListProductListsRequest**](../Model/ProductlistListProductListsRequest.md)|  | |

### Return type

[**\GeminiCommerce\ProductList\Model\ProductlistListProductListsResponse**](../Model/ProductlistListProductListsResponse.md)

### Authorization

[standardAuthorization](../../README.md#standardAuthorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchProductLists()`

```php
searchProductLists($body): \GeminiCommerce\ProductList\Model\ProductlistSearchProductListsResponse
```

Search Collections

The SearchProductLists endpoint is used to retrieve a list of existing collections of products within the system.

### Example

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
$body = new \GeminiCommerce\ProductList\Model\ProductlistSearchProductListsRequest(); // \GeminiCommerce\ProductList\Model\ProductlistSearchProductListsRequest

try {
    $result = $apiInstance->searchProductLists($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductListApi->searchProductLists: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\ProductList\Model\ProductlistSearchProductListsRequest**](../Model/ProductlistSearchProductListsRequest.md)|  | |

### Return type

[**\GeminiCommerce\ProductList\Model\ProductlistSearchProductListsResponse**](../Model/ProductlistSearchProductListsResponse.md)

### Authorization

[standardAuthorization](../../README.md#standardAuthorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchProductListsByIds()`

```php
searchProductListsByIds($body): \GeminiCommerce\ProductList\Model\ProductlistSearchProductListsByIdsResponse
```

Search Collections by Ids

The SearchProductListsByIds endpoint is used to retrieve a list of existing collections of products within the system.

### Example

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
$body = new \GeminiCommerce\ProductList\Model\ProductlistSearchProductListsByIdsRequest(); // \GeminiCommerce\ProductList\Model\ProductlistSearchProductListsByIdsRequest

try {
    $result = $apiInstance->searchProductListsByIds($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductListApi->searchProductListsByIds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\ProductList\Model\ProductlistSearchProductListsByIdsRequest**](../Model/ProductlistSearchProductListsByIdsRequest.md)|  | |

### Return type

[**\GeminiCommerce\ProductList\Model\ProductlistSearchProductListsByIdsResponse**](../Model/ProductlistSearchProductListsByIdsResponse.md)

### Authorization

[standardAuthorization](../../README.md#standardAuthorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateProductList()`

```php
updateProductList($body): \GeminiCommerce\ProductList\Model\ProductlistUpdateProductListResponse
```

Update Collection

The UpdateProductList endpoint is used to update an existing collection of products within the system.

### Example

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
$body = new \GeminiCommerce\ProductList\Model\ProductlistUpdateProductListRequest(); // \GeminiCommerce\ProductList\Model\ProductlistUpdateProductListRequest

try {
    $result = $apiInstance->updateProductList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductListApi->updateProductList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\ProductList\Model\ProductlistUpdateProductListRequest**](../Model/ProductlistUpdateProductListRequest.md)|  | |

### Return type

[**\GeminiCommerce\ProductList\Model\ProductlistUpdateProductListResponse**](../Model/ProductlistUpdateProductListResponse.md)

### Authorization

[standardAuthorization](../../README.md#standardAuthorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
