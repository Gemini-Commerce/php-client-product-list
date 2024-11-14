# OpenAPI\Client\ProductListApi

All URIs are relative to https://product-list.api.gogemini.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
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
| [**productListBulkUpdateProductListAssociations()**](ProductListApi.md#productListBulkUpdateProductListAssociations) | **POST** /productlist.ProductList/BulkUpdateProductListAssociations |  |
| [**searchProductLists()**](ProductListApi.md#searchProductLists) | **POST** /productlist.ProductList/SearchProductLists | Search Collections |
| [**searchProductListsByIds()**](ProductListApi.md#searchProductListsByIds) | **POST** /productlist.ProductList/SearchProductListsByIds | Search Collections by Ids |
| [**setProductListAssociations()**](ProductListApi.md#setProductListAssociations) | **POST** /productlist.ProductList/SetProductListAssociations | Set Collection/Product Associations |
| [**updateProductList()**](ProductListApi.md#updateProductList) | **POST** /productlist.ProductList/UpdateProductList | Update Collection |


## `createProductList()`

```php
createProductList($body): \OpenAPI\Client\Model\ProductlistCreateProductListResponse
```

Create Collection

The CreateProductList endpoint is used to create a new collection of products within the system. This endpoint allows users to define the details and attributes of the collection.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProductListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\ProductlistCreateProductListRequest(); // \OpenAPI\Client\Model\ProductlistCreateProductListRequest

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
| **body** | [**\OpenAPI\Client\Model\ProductlistCreateProductListRequest**](../Model/ProductlistCreateProductListRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ProductlistCreateProductListResponse**](../Model/ProductlistCreateProductListResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createProductListAssociation()`

```php
createProductListAssociation($body): \OpenAPI\Client\Model\ProductlistCreateProductListAssociationResponse
```

Create Collection/Product Association

The CreateProductListAssociation endpoint is used to create an association between a collection and a product.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProductListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\ProductlistCreateProductListAssociationRequest(); // \OpenAPI\Client\Model\ProductlistCreateProductListAssociationRequest

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
| **body** | [**\OpenAPI\Client\Model\ProductlistCreateProductListAssociationRequest**](../Model/ProductlistCreateProductListAssociationRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ProductlistCreateProductListAssociationResponse**](../Model/ProductlistCreateProductListAssociationResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteProductList()`

```php
deleteProductList($body): \OpenAPI\Client\Model\ProductlistDeleteProductListResponse
```

Delete Collection

The DeleteProductList endpoint is used to delete an existing collection of products within the system.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProductListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\ProductlistDeleteProductListRequest(); // \OpenAPI\Client\Model\ProductlistDeleteProductListRequest

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
| **body** | [**\OpenAPI\Client\Model\ProductlistDeleteProductListRequest**](../Model/ProductlistDeleteProductListRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ProductlistDeleteProductListResponse**](../Model/ProductlistDeleteProductListResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteProductListAssociation()`

```php
deleteProductListAssociation($body): \OpenAPI\Client\Model\ProductlistDeleteProductListAssociationResponse
```

Delete Collection/Product Association

The DeleteProductListAssociation endpoint is used to delete an association between a collection and a product.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProductListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\ProductlistDeleteProductListAssociationRequest(); // \OpenAPI\Client\Model\ProductlistDeleteProductListAssociationRequest

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
| **body** | [**\OpenAPI\Client\Model\ProductlistDeleteProductListAssociationRequest**](../Model/ProductlistDeleteProductListAssociationRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ProductlistDeleteProductListAssociationResponse**](../Model/ProductlistDeleteProductListAssociationResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProductListAssociationsByProductGrn()`

```php
getProductListAssociationsByProductGrn($body): \OpenAPI\Client\Model\ProductlistGetProductListAssociationsByProductGrnResponse
```

Get Collection/Product Associations by Product GRN

The GetProductListAssociationsByProductGrn endpoint is used to get the associations between a collection and a list of products by product GRN.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProductListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\ProductlistGetProductListAssociationsByProductGrnRequest(); // \OpenAPI\Client\Model\ProductlistGetProductListAssociationsByProductGrnRequest

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
| **body** | [**\OpenAPI\Client\Model\ProductlistGetProductListAssociationsByProductGrnRequest**](../Model/ProductlistGetProductListAssociationsByProductGrnRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ProductlistGetProductListAssociationsByProductGrnResponse**](../Model/ProductlistGetProductListAssociationsByProductGrnResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProductListByCode()`

```php
getProductListByCode($body): \OpenAPI\Client\Model\ProductlistGetProductListByCodeResponse
```

Get Collection by Code

The GetProductListByCode endpoint is used to retrieve an existing collection of products within the system.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProductListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\ProductlistGetProductListByCodeRequest(); // \OpenAPI\Client\Model\ProductlistGetProductListByCodeRequest

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
| **body** | [**\OpenAPI\Client\Model\ProductlistGetProductListByCodeRequest**](../Model/ProductlistGetProductListByCodeRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ProductlistGetProductListByCodeResponse**](../Model/ProductlistGetProductListByCodeResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProductListById()`

```php
getProductListById($body): \OpenAPI\Client\Model\ProductlistGetProductListByIdResponse
```

Get Collection by Id

The GetProductListById endpoint is used to retrieve an existing collection of products within the system.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProductListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\ProductlistGetProductListByIdRequest(); // \OpenAPI\Client\Model\ProductlistGetProductListByIdRequest

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
| **body** | [**\OpenAPI\Client\Model\ProductlistGetProductListByIdRequest**](../Model/ProductlistGetProductListByIdRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ProductlistGetProductListByIdResponse**](../Model/ProductlistGetProductListByIdResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProductListByUrlKey()`

```php
getProductListByUrlKey($body): \OpenAPI\Client\Model\ProductlistGetProductListByUrlKeyResponse
```

Get Collection by Url Key

The GetProductListByUrlKey endpoint is used to retrieve an existing collection of products within the system.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProductListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\ProductlistGetProductListByUrlKeyRequest(); // \OpenAPI\Client\Model\ProductlistGetProductListByUrlKeyRequest

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
| **body** | [**\OpenAPI\Client\Model\ProductlistGetProductListByUrlKeyRequest**](../Model/ProductlistGetProductListByUrlKeyRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ProductlistGetProductListByUrlKeyResponse**](../Model/ProductlistGetProductListByUrlKeyResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProductListsCount()`

```php
getProductListsCount($body): \OpenAPI\Client\Model\ProductlistGetProductListsCountResponse
```

Get Collection Product Count

The GetProductListsCount endpoint is used to get the number of products associated with a collection.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProductListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\ProductlistGetProductListsCountRequest(); // \OpenAPI\Client\Model\ProductlistGetProductListsCountRequest

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
| **body** | [**\OpenAPI\Client\Model\ProductlistGetProductListsCountRequest**](../Model/ProductlistGetProductListsCountRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ProductlistGetProductListsCountResponse**](../Model/ProductlistGetProductListsCountResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listProductListAssociations()`

```php
listProductListAssociations($body): \OpenAPI\Client\Model\ProductlistListProductListAssociationsResponse
```

List Collection/Product Associations

The ListProductListAssociations endpoint is used to list the associations between a collection and a list of products.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProductListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\ProductlistListProductListAssociationsRequest(); // \OpenAPI\Client\Model\ProductlistListProductListAssociationsRequest

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
| **body** | [**\OpenAPI\Client\Model\ProductlistListProductListAssociationsRequest**](../Model/ProductlistListProductListAssociationsRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ProductlistListProductListAssociationsResponse**](../Model/ProductlistListProductListAssociationsResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listProductLists()`

```php
listProductLists($body): \OpenAPI\Client\Model\ProductlistListProductListsResponse
```

List Collections

The ListProductLists endpoint is used to retrieve a list of existing collections of products within the system.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProductListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\ProductlistListProductListsRequest(); // \OpenAPI\Client\Model\ProductlistListProductListsRequest

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
| **body** | [**\OpenAPI\Client\Model\ProductlistListProductListsRequest**](../Model/ProductlistListProductListsRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ProductlistListProductListsResponse**](../Model/ProductlistListProductListsResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productListBulkUpdateProductListAssociations()`

```php
productListBulkUpdateProductListAssociations($body): object
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProductListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\ProductlistBulkUpdateProductListAssociationsRequest(); // \OpenAPI\Client\Model\ProductlistBulkUpdateProductListAssociationsRequest

try {
    $result = $apiInstance->productListBulkUpdateProductListAssociations($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductListApi->productListBulkUpdateProductListAssociations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\ProductlistBulkUpdateProductListAssociationsRequest**](../Model/ProductlistBulkUpdateProductListAssociationsRequest.md)|  | |

### Return type

**object**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchProductLists()`

```php
searchProductLists($body): \OpenAPI\Client\Model\ProductlistSearchProductListsResponse
```

Search Collections

The SearchProductLists endpoint is used to retrieve a list of existing collections of products within the system.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProductListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\ProductlistSearchProductListsRequest(); // \OpenAPI\Client\Model\ProductlistSearchProductListsRequest

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
| **body** | [**\OpenAPI\Client\Model\ProductlistSearchProductListsRequest**](../Model/ProductlistSearchProductListsRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ProductlistSearchProductListsResponse**](../Model/ProductlistSearchProductListsResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchProductListsByIds()`

```php
searchProductListsByIds($body): \OpenAPI\Client\Model\ProductlistSearchProductListsByIdsResponse
```

Search Collections by Ids

The SearchProductListsByIds endpoint is used to retrieve a list of existing collections of products within the system.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProductListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\ProductlistSearchProductListsByIdsRequest(); // \OpenAPI\Client\Model\ProductlistSearchProductListsByIdsRequest

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
| **body** | [**\OpenAPI\Client\Model\ProductlistSearchProductListsByIdsRequest**](../Model/ProductlistSearchProductListsByIdsRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ProductlistSearchProductListsByIdsResponse**](../Model/ProductlistSearchProductListsByIdsResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setProductListAssociations()`

```php
setProductListAssociations($body): \OpenAPI\Client\Model\ProductlistSetProductListAssociationsResponse
```

Set Collection/Product Associations

The SetProductListAssociations endpoint is used to set the associations between a collection and a list of products.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProductListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\ProductlistSetProductListAssociationsRequest(); // \OpenAPI\Client\Model\ProductlistSetProductListAssociationsRequest

try {
    $result = $apiInstance->setProductListAssociations($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductListApi->setProductListAssociations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\ProductlistSetProductListAssociationsRequest**](../Model/ProductlistSetProductListAssociationsRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ProductlistSetProductListAssociationsResponse**](../Model/ProductlistSetProductListAssociationsResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateProductList()`

```php
updateProductList($body): \OpenAPI\Client\Model\ProductlistUpdateProductListResponse
```

Update Collection

The UpdateProductList endpoint is used to update an existing collection of products within the system.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProductListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\ProductlistUpdateProductListRequest(); // \OpenAPI\Client\Model\ProductlistUpdateProductListRequest

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
| **body** | [**\OpenAPI\Client\Model\ProductlistUpdateProductListRequest**](../Model/ProductlistUpdateProductListRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ProductlistUpdateProductListResponse**](../Model/ProductlistUpdateProductListResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
