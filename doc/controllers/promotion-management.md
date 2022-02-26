# Promotion Management

```php
$promotionManagementController = $client->getPromotionManagementController();
```

## Class Name

`PromotionManagementController`

## Methods

* [Index Promotion](/doc/controllers/promotion-management.md#index-promotion)
* [Detail Promotion](/doc/controllers/promotion-management.md#detail-promotion)
* [Image Promotion](/doc/controllers/promotion-management.md#image-promotion)
* [Create Promotion](/doc/controllers/promotion-management.md#create-promotion)
* [Update Promotion](/doc/controllers/promotion-management.md#update-promotion)
* [Restore Promotion](/doc/controllers/promotion-management.md#restore-promotion)
* [Delete Promotion](/doc/controllers/promotion-management.md#delete-promotion)


# Index Promotion

:information_source: **Note** This endpoint does not require authentication.

```php
function indexPromotion(string $accept)
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `accept` | `string` | Header, Required | - |

## Response Type

`mixed`

## Example Usage

```php
$accept = '*/*';

$result = $promotionManagementController->indexPromotion($accept);
```


# Detail Promotion

:information_source: **Note** This endpoint does not require authentication.

```php
function detailPromotion(string $token, string $accept)
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `token` | `string` | Header, Required | - |
| `accept` | `string` | Header, Required | - |

## Response Type

`mixed`

## Example Usage

```php
$token = 'f447d64e2ab84708bace0e966c58dd5bda80e52cf55d1aff6272323e7d0acf7b5308324fe707cd5c';
$accept = '*/*';

$result = $promotionManagementController->detailPromotion($token, $accept);
```


# Image Promotion

:information_source: **Note** This endpoint does not require authentication.

```php
function imagePromotion(string $token, string $accept)
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `token` | `string` | Header, Required | - |
| `accept` | `string` | Header, Required | - |

## Response Type

`mixed`

## Example Usage

```php
$token = 'f447d64e2ab84708bace0e966c58dd5bda80e52cf55d1aff6272323e7d0acf7b5308324fe707cd5c';
$accept = '*/*';

$result = $promotionManagementController->imagePromotion($token, $accept);
```


# Create Promotion

```php
function createPromotion(
    string $token,
    string $accept,
    string $code,
    float $discount,
    int $status,
    string $expiredAt,
    string $image,
    string $title,
    string $description
)
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `token` | `string` | Header, Required | - |
| `accept` | `string` | Header, Required | - |
| `code` | `string` | Form, Required | - |
| `discount` | `float` | Form, Required | - |
| `status` | `int` | Form, Required | - |
| `expiredAt` | `string` | Form, Required | - |
| `image` | `string` | Form, Required | - |
| `title` | `string` | Form, Required | - |
| `description` | `string` | Form, Required | - |

## Response Type

`mixed`

## Example Usage

```php
$token = 'af374e4826a538c24dec3ce1dbde6dda3e80d1220b66dff6fc649e04cf77b128a9f99a49e5c4c529';
$accept = '*/*';
$code = 'MIMO1212';
$discount = 0.25;
$status = 1;
$expiredAt = '2022-02-4';
$image = 'image6';
$title = 'Berkah Ramadan';
$description = 'Gratis ongkir selama ramadan';

$result = $promotionManagementController->createPromotion($token, $accept, $code, $discount, $status, $expiredAt, $image, $title, $description);
```


# Update Promotion

```php
function updatePromotion(
    string $xHttpMethodOverride,
    string $token,
    string $accept,
    string $code,
    float $discount,
    int $status,
    string $expiredAt,
    int $maxAmount,
    string $title,
    string $description,
    string $image
)
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `xHttpMethodOverride` | `string` | Header, Required | - |
| `token` | `string` | Header, Required | - |
| `accept` | `string` | Header, Required | - |
| `code` | `string` | Form, Required | - |
| `discount` | `float` | Form, Required | - |
| `status` | `int` | Form, Required | - |
| `expiredAt` | `string` | Form, Required | - |
| `maxAmount` | `int` | Form, Required | - |
| `title` | `string` | Form, Required | - |
| `description` | `string` | Form, Required | - |
| `image` | `string` | Form, Required | - |

## Response Type

`mixed`

## Example Usage

```php
$xHttpMethodOverride = 'patch';
$token = 'af374e4826a538c24dec3ce1dbde6dda3e80d1220b66dff6fc649e04cf77b128a9f99a49e5c4c529';
$accept = '*/*';
$code = 'MIMO1212';
$discount = 0.5;
$status = 1;
$expiredAt = '2021-12-22';
$maxAmount = 100000;
$title = 'Berkah Ramadan Edit';
$description = 'edit';
$image = 'image6';

$result = $promotionManagementController->updatePromotion($xHttpMethodOverride, $token, $accept, $code, $discount, $status, $expiredAt, $maxAmount, $title, $description, $image);
```


# Restore Promotion

```php
function restorePromotion(string $token, string $accept)
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `token` | `string` | Header, Required | - |
| `accept` | `string` | Header, Required | - |

## Response Type

`mixed`

## Example Usage

```php
$token = 'f447d64e2ab84708bace0e966c58dd5bda80e52cf55d1aff6272323e7d0acf7b5308324fe707cd5c';
$accept = '*/*';

$result = $promotionManagementController->restorePromotion($token, $accept);
```


# Delete Promotion

```php
function deletePromotion(string $xHttpMethodOverride, string $accept)
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `xHttpMethodOverride` | `string` | Header, Required | - |
| `accept` | `string` | Header, Required | - |

## Response Type

`mixed`

## Example Usage

```php
$xHttpMethodOverride = 'patch';
$accept = '*/*';

$result = $promotionManagementController->deletePromotion($xHttpMethodOverride, $accept);
```

