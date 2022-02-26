# Warehouse

```php
$warehouseController = $client->getWarehouseController();
```

## Class Name

`WarehouseController`

## Methods

* [Send Invoice](/doc/controllers/warehouse.md#send-invoice)
* [Warehouse Index Package](/doc/controllers/warehouse.md#warehouse-index-package)
* [Detail Package Warehouse](/doc/controllers/warehouse.md#detail-package-warehouse)
* [Approve Checking Status](/doc/controllers/warehouse.md#approve-checking-status)


# Send Invoice

```php
function sendInvoice(string $token, string $accept, int $packageId)
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `token` | `string` | Header, Required | - |
| `accept` | `string` | Header, Required | - |
| `packageId` | `int` | Form, Required | - |

## Response Type

`mixed`

## Example Usage

```php
$token = '67aa2d18c557cdc59af52ace7ec12c4aeeee164cc371c5c2b58d9a5099f9dfc3117a1696b2a4b849';
$accept = '*/*';
$packageId = 1;

$result = $warehouseController->sendInvoice($token, $accept, $packageId);
```


# Warehouse Index Package

```php
function warehouseIndexPackage(string $token, string $accept)
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

$result = $warehouseController->warehouseIndexPackage($token, $accept);
```


# Detail Package Warehouse

```php
function detailPackageWarehouse(string $accept)
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

$result = $warehouseController->detailPackageWarehouse($accept);
```


# Approve Checking Status

```php
function approveCheckingStatus(string $token, string $accept, int $packageId, string $action)
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `token` | `string` | Header, Required | - |
| `accept` | `string` | Header, Required | - |
| `packageId` | `int` | Form, Required | - |
| `action` | `string` | Form, Required | - |

## Response Type

`mixed`

## Example Usage

```php
$token = '67aa2d18c557cdc59af52ace7ec12c4aeeee164cc371c5c2b58d9a5099f9dfc3117a1696b2a4b849';
$accept = '*/*';
$packageId = 1;
$action = 'not-match';

$result = $warehouseController->approveCheckingStatus($token, $accept, $packageId, $action);
```

