# Warehouse Address Management

```php
$warehouseAddressManagementController = $client->getWarehouseAddressManagementController();
```

## Class Name

`WarehouseAddressManagementController`

## Methods

* [Index Warehouse Address](/doc/controllers/warehouse-address-management.md#index-warehouse-address)
* [Show Warehouse](/doc/controllers/warehouse-address-management.md#show-warehouse)
* [Warehouse Address](/doc/controllers/warehouse-address-management.md#warehouse-address)
* [Edit Warehouse Address](/doc/controllers/warehouse-address-management.md#edit-warehouse-address)
* [Delete Service](/doc/controllers/warehouse-address-management.md#delete-service)


# Index Warehouse Address

```php
function indexWarehouseAddress(string $accept)
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

$result = $warehouseAddressManagementController->indexWarehouseAddress($accept);
```


# Show Warehouse

```php
function showWarehouse(string $accept)
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `accept` | `string` | Header, Required | - |

## Response Type

`mixed`

## Example Usage

```php
$accept = 'application/json';

$result = $warehouseAddressManagementController->showWarehouse($accept);
```


# Warehouse Address

```php
function warehouseAddress(string $accept, string $warehouseAddress)
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `accept` | `string` | Header, Required | - |
| `warehouseAddress` | `string` | Form, Required | - |

## Response Type

`mixed`

## Example Usage

```php
$accept = '*/*';
$warehouseAddress = 'contoh alamat 3';

$result = $warehouseAddressManagementController->warehouseAddress($accept, $warehouseAddress);
```


# Edit Warehouse Address

```php
function editWarehouseAddress(string $xHttpMethodOverride, string $accept, string $warehouseAddress)
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `xHttpMethodOverride` | `string` | Header, Required | - |
| `accept` | `string` | Header, Required | - |
| `warehouseAddress` | `string` | Form, Required | - |

## Response Type

`mixed`

## Example Usage

```php
$xHttpMethodOverride = 'patch';
$accept = '*/*';
$warehouseAddress = 'contoh address 3 edit';

$result = $warehouseAddressManagementController->editWarehouseAddress($xHttpMethodOverride, $accept, $warehouseAddress);
```


# Delete Service

```php
function deleteService(string $accept)
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `accept` | `string` | Header, Required | - |

## Response Type

`mixed`

## Example Usage

```php
$accept = 'application/json';

$result = $warehouseAddressManagementController->deleteService($accept);
```

