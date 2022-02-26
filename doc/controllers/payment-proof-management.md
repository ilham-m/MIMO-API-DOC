# Payment Proof Management

```php
$paymentProofManagementController = $client->getPaymentProofManagementController();
```

## Class Name

`PaymentProofManagementController`

## Methods

* [Index Payment Proof](/doc/controllers/payment-proof-management.md#index-payment-proof)
* [Detail Payment Proof](/doc/controllers/payment-proof-management.md#detail-payment-proof)
* [Payment Proof Image](/doc/controllers/payment-proof-management.md#payment-proof-image)
* [Store Payment Proof](/doc/controllers/payment-proof-management.md#store-payment-proof)
* [Update Payment Proof](/doc/controllers/payment-proof-management.md#update-payment-proof)
* [Delete Package](/doc/controllers/payment-proof-management.md#delete-package)
* [Restore Package](/doc/controllers/payment-proof-management.md#restore-package)


# Index Payment Proof

```php
function indexPaymentProof(string $token, string $accept)
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
$token = 'c78e1850d08e1898edf6e50856be0dd84ee93c6f2ab27beb1cdee9fa6b05e613a275d64702ce6279';
$accept = '*/*';

$result = $paymentProofManagementController->indexPaymentProof($token, $accept);
```


# Detail Payment Proof

```php
function detailPaymentProof(string $token, string $accept)
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
$token = '79163ba2c9e07e0ebc6897dc95ab1e18460190402e35218b44296495d8c073a02d0899a81637ecfc';
$accept = '*/*';

$result = $paymentProofManagementController->detailPaymentProof($token, $accept);
```


# Payment Proof Image

```php
function paymentProofImage(string $name, string $token, string $accept)
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `name` | `string` | Query, Required | - |
| `token` | `string` | Header, Required | - |
| `accept` | `string` | Header, Required | - |

## Response Type

`mixed`

## Example Usage

```php
$name = 'MIMO-000001.png';
$token = '67aa2d18c557cdc59af52ace7ec12c4aeeee164cc371c5c2b58d9a5099f9dfc3117a1696b2a4b849';
$accept = '*/*';

$result = $paymentProofManagementController->paymentProofImage($name, $token, $accept);
```


# Store Payment Proof

```php
function storePaymentProof(
    string $token,
    string $accept,
    int $packageId,
    string $description,
    string $image,
    string $type
)
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `token` | `string` | Header, Required | - |
| `accept` | `string` | Header, Required | - |
| `packageId` | `int` | Form, Required | - |
| `description` | `string` | Form, Required | - |
| `image` | `string` | Form, Required | - |
| `type` | `string` | Form, Required | - |

## Response Type

`mixed`

## Example Usage

```php
$token = '67aa2d18c557cdc59af52ace7ec12c4aeeee164cc371c5c2b58d9a5099f9dfc3117a1696b2a4b849';
$accept = '*/*';
$packageId = 1;
$description = 'Ini dp pertama paket mobil tesla';
$image = 'image6';
$type = 'down_payment';

$result = $paymentProofManagementController->storePaymentProof($token, $accept, $packageId, $description, $image, $type);
```


# Update Payment Proof

```php
function updatePaymentProof(
    string $xHttpMethodOverride,
    string $accept,
    int $packageId,
    string $description,
    string $type
)
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `xHttpMethodOverride` | `string` | Header, Required | - |
| `accept` | `string` | Header, Required | - |
| `packageId` | `int` | Form, Required | - |
| `description` | `string` | Form, Required | - |
| `type` | `string` | Form, Required | - |

## Response Type

`mixed`

## Example Usage

```php
$xHttpMethodOverride = 'patch';
$accept = '*/*';
$packageId = 1;
$description = 'Ini dp pertama paket mobil tesla edited';
$type = 'additional_payment';

$result = $paymentProofManagementController->updatePaymentProof($xHttpMethodOverride, $accept, $packageId, $description, $type);
```


# Delete Package

```php
function deletePackage(string $accept)
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

$result = $paymentProofManagementController->deletePackage($accept);
```


# Restore Package

```php
function restorePackage(string $accept)
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

$result = $paymentProofManagementController->restorePackage($accept);
```

