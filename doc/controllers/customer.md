# Customer

```php
$customerController = $client->getCustomerController();
```

## Class Name

`CustomerController`

## Methods

* [Customer Index Package](/doc/controllers/customer.md#customer-index-package)
* [Detail Package Customer](/doc/controllers/customer.md#detail-package-customer)
* [Store Package](/doc/controllers/customer.md#store-package)
* [Add Tracking Number Resi Number](/doc/controllers/customer.md#add-tracking-number-resi-number)
* [Update Package](/doc/controllers/customer.md#update-package)


# Customer Index Package

```php
function customerIndexPackage(string $token, string $accept)
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
$token = '12c9c8c057d06482184c1b75e3f74a823b15d9d09c653ba323fa0bf269489d0cac41b20dd2b1aa80';
$accept = '*/*';

$result = $customerController->customerIndexPackage($token, $accept);
```


# Detail Package Customer

```php
function detailPackageCustomer(string $accept)
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

$result = $customerController->detailPackageCustomer($accept);
```


# Store Package

```php
function storePackage(
    string $accept,
    string $shippingAddress,
    string $description,
    string $invoice,
    string $packageList
)
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `accept` | `string` | Header, Required | - |
| `shippingAddress` | `string` | Form, Required | - |
| `description` | `string` | Form, Required | - |
| `invoice` | `string` | Form, Required | - |
| `packageList` | `string` | Form, Required | - |

## Response Type

`mixed`

## Example Usage

```php
$accept = '*/*';
$shippingAddress = 'jakarta';
$description = 'paket 3';
$invoice = 'invoice6';
$packageList = 'package_list6';

$result = $customerController->storePackage($accept, $shippingAddress, $description, $invoice, $packageList);
```


# Add Tracking Number Resi Number

```php
function addTrackingNumberResiNumber(string $token, string $accept, int $packageId, string $trackingNumber)
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `token` | `string` | Header, Required | - |
| `accept` | `string` | Header, Required | - |
| `packageId` | `int` | Form, Required | - |
| `trackingNumber` | `string` | Form, Required | - |

## Response Type

`mixed`

## Example Usage

```php
$token = '67aa2d18c557cdc59af52ace7ec12c4aeeee164cc371c5c2b58d9a5099f9dfc3117a1696b2a4b849';
$accept = '*/*';
$packageId = 3;
$trackingNumber = 'RESI123';

$result = $customerController->addTrackingNumberResiNumber($token, $accept, $packageId, $trackingNumber);
```


# Update Package

```php
function updatePackage(
    string $xHttpMethodOverride,
    string $accept,
    string $shippingAddress,
    string $description,
    string $invoice,
    string $packageList
)
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `xHttpMethodOverride` | `string` | Header, Required | - |
| `accept` | `string` | Header, Required | - |
| `shippingAddress` | `string` | Form, Required | - |
| `description` | `string` | Form, Required | - |
| `invoice` | `string` | Form, Required | - |
| `packageList` | `string` | Form, Required | - |

## Response Type

`mixed`

## Example Usage

```php
$xHttpMethodOverride = 'patch';
$accept = '*/*';
$shippingAddress = 'ada';
$description = 'edited';
$invoice = 'invoice6';
$packageList = 'package_list6';

$result = $customerController->updatePackage($xHttpMethodOverride, $accept, $shippingAddress, $description, $invoice, $packageList);
```

