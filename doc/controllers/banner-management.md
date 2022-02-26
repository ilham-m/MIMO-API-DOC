# Banner Management

```php
$bannerManagementController = $client->getBannerManagementController();
```

## Class Name

`BannerManagementController`

## Methods

* [Index Banner](/doc/controllers/banner-management.md#index-banner)
* [Create Banner](/doc/controllers/banner-management.md#create-banner)
* [Update Banner](/doc/controllers/banner-management.md#update-banner)
* [Restore Banner](/doc/controllers/banner-management.md#restore-banner)
* [Delete Banner](/doc/controllers/banner-management.md#delete-banner)
* [Image Banner](/doc/controllers/banner-management.md#image-banner)


# Index Banner

:information_source: **Note** This endpoint does not require authentication.

```php
function indexBanner(string $accept)
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

$result = $bannerManagementController->indexBanner($accept);
```


# Create Banner

```php
function createBanner(string $accept, string $token, string $title, string $subtitle, string $image)
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `accept` | `string` | Header, Required | - |
| `token` | `string` | Header, Required | - |
| `title` | `string` | Form, Required | - |
| `subtitle` | `string` | Form, Required | - |
| `image` | `string` | Form, Required | - |

## Response Type

`mixed`

## Example Usage

```php
$accept = 'application/json';
$token = '8c303dbdca6fea482c31faef051ff5591a77579d02315c6b3046d72984c25a21ab781c75ef9dce66';
$title = 'contoh banner';
$subtitle = 'ini contoh banner';
$image = 'image6';

$result = $bannerManagementController->createBanner($accept, $token, $title, $subtitle, $image);
```


# Update Banner

```php
function updateBanner(
    string $accept,
    string $xHttpMethodOverride,
    string $token,
    string $title,
    string $subtitle,
    string $image
)
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `accept` | `string` | Header, Required | - |
| `xHttpMethodOverride` | `string` | Header, Required | - |
| `token` | `string` | Header, Required | - |
| `title` | `string` | Form, Required | - |
| `subtitle` | `string` | Form, Required | - |
| `image` | `string` | Form, Required | - |

## Response Type

`mixed`

## Example Usage

```php
$accept = 'application/json';
$xHttpMethodOverride = 'patch';
$token = 'f447d64e2ab84708bace0e966c58dd5bda80e52cf55d1aff6272323e7d0acf7b5308324fe707cd5c';
$title = 'contoh banner update lagi euy';
$subtitle = 'ini contoh banner';
$image = 'image6';

$result = $bannerManagementController->updateBanner($accept, $xHttpMethodOverride, $token, $title, $subtitle, $image);
```


# Restore Banner

```php
function restoreBanner(string $xHttpMethodOverride, string $token, string $accept)
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `xHttpMethodOverride` | `string` | Header, Required | - |
| `token` | `string` | Header, Required | - |
| `accept` | `string` | Header, Required | - |

## Response Type

`mixed`

## Example Usage

```php
$xHttpMethodOverride = 'patch';
$token = 'f447d64e2ab84708bace0e966c58dd5bda80e52cf55d1aff6272323e7d0acf7b5308324fe707cd5c';
$accept = '*/*';

$result = $bannerManagementController->restoreBanner($xHttpMethodOverride, $token, $accept);
```


# Delete Banner

```php
function deleteBanner(string $accept, string $token)
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `accept` | `string` | Header, Required | - |
| `token` | `string` | Header, Required | - |

## Response Type

`mixed`

## Example Usage

```php
$accept = 'application/json';
$token = 'f447d64e2ab84708bace0e966c58dd5bda80e52cf55d1aff6272323e7d0acf7b5308324fe707cd5c';

$result = $bannerManagementController->deleteBanner($accept, $token);
```


# Image Banner

:information_source: **Note** This endpoint does not require authentication.

```php
function imageBanner(string $accept, string $token)
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `accept` | `string` | Header, Required | - |
| `token` | `string` | Header, Required | - |

## Response Type

`mixed`

## Example Usage

```php
$accept = 'application/json';
$token = 'f447d64e2ab84708bace0e966c58dd5bda80e52cf55d1aff6272323e7d0acf7b5308324fe707cd5c';

$result = $bannerManagementController->imageBanner($accept, $token);
```

