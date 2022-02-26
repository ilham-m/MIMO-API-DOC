# Admin

```php
$adminController = $client->getAdminController();
```

## Class Name

`AdminController`

## Methods

* [Index Package](/doc/controllers/admin.md#index-package)
* [Filter Package](/doc/controllers/admin.md#filter-package)
* [Detail Package](/doc/controllers/admin.md#detail-package)
* [Delete Package](/doc/controllers/admin.md#delete-package)
* [Restore Package](/doc/controllers/admin.md#restore-package)
* [Approve Package](/doc/controllers/admin.md#approve-package)
* [Approve Payment](/doc/controllers/admin.md#approve-payment)
* [Send Package](/doc/controllers/admin.md#send-package)
* [Send Invoice](/doc/controllers/admin.md#send-invoice)
* [Send Revised Invice](/doc/controllers/admin.md#send-revised-invice)


# Index Package

```php
function indexPackage(string $accept)
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

$result = $adminController->indexPackage($accept);
```


# Filter Package

```php
function filterPackage(string $token, string $accept)
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

$result = $adminController->filterPackage($token, $accept);
```


# Detail Package

```php
function detailPackage(string $accept)
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

$result = $adminController->detailPackage($accept);
```


# Delete Package

```php
function deletePackage(
    string $accept,
    int $customerId,
    string $statusApproval,
    string $statusPayment,
    string $statusChecking
)
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `accept` | `string` | Header, Required | - |
| `customerId` | `int` | Form, Required | - |
| `statusApproval` | `string` | Form, Required | - |
| `statusPayment` | `string` | Form, Required | - |
| `statusChecking` | `string` | Form, Required | - |

## Response Type

`mixed`

## Example Usage

```php
$accept = '*/*';
$customerId = 1;
$statusApproval = 'pending';
$statusPayment = 'pending';
$statusChecking = 'pending';

$result = $adminController->deletePackage($accept, $customerId, $statusApproval, $statusPayment, $statusChecking);
```


# Restore Package

```php
function restorePackage(
    string $accept,
    int $customerId,
    string $statusApproval,
    string $statusPayment,
    string $statusChecking
)
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `accept` | `string` | Header, Required | - |
| `customerId` | `int` | Form, Required | - |
| `statusApproval` | `string` | Form, Required | - |
| `statusPayment` | `string` | Form, Required | - |
| `statusChecking` | `string` | Form, Required | - |

## Response Type

`mixed`

## Example Usage

```php
$accept = '*/*';
$customerId = 1;
$statusApproval = 'pending';
$statusPayment = 'pending';
$statusChecking = 'pending';

$result = $adminController->restorePackage($accept, $customerId, $statusApproval, $statusPayment, $statusChecking);
```


# Approve Package

```php
function approvePackage(string $accept, int $packageId, string $action)
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `accept` | `string` | Header, Required | - |
| `packageId` | `int` | Form, Required | - |
| `action` | `string` | Form, Required | - |

## Response Type

`mixed`

## Example Usage

```php
$accept = '*/*';
$packageId = 3;
$action = 'approve';

$result = $adminController->approvePackage($accept, $packageId, $action);
```


# Approve Payment

```php
function approvePayment(string $token, string $accept, int $packageId, string $action, string $warehouseAddress)
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `token` | `string` | Header, Required | - |
| `accept` | `string` | Header, Required | - |
| `packageId` | `int` | Form, Required | - |
| `action` | `string` | Form, Required | - |
| `warehouseAddress` | `string` | Form, Required | - |

## Response Type

`mixed`

## Example Usage

```php
$token = '67aa2d18c557cdc59af52ace7ec12c4aeeee164cc371c5c2b58d9a5099f9dfc3117a1696b2a4b849';
$accept = '*/*';
$packageId = 1;
$action = 'approve-down-payment';
$warehouseAddress = 'jonggol sebrang london, patoka big ben tower';

$result = $adminController->approvePayment($token, $accept, $packageId, $action, $warehouseAddress);
```


# Send Package

```php
function sendPackage(string $token, string $accept, int $packageId)
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

$result = $adminController->sendPackage($token, $accept, $packageId);
```


# Send Invoice

```php
function sendInvoice(string $token, string $accept, int $packageId, int $isJakarta)
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `token` | `string` | Header, Required | - |
| `accept` | `string` | Header, Required | - |
| `packageId` | `int` | Form, Required | - |
| `isJakarta` | `int` | Form, Required | - |

## Response Type

`mixed`

## Example Usage

```php
$token = '67aa2d18c557cdc59af52ace7ec12c4aeeee164cc371c5c2b58d9a5099f9dfc3117a1696b2a4b849';
$accept = '*/*';
$packageId = 1;
$isJakarta = 0;

$result = $adminController->sendInvoice($token, $accept, $packageId, $isJakarta);
```


# Send Revised Invice

```php
function sendRevisedInvice(string $token, string $accept, int $packageId)
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

$result = $adminController->sendRevisedInvice($token, $accept, $packageId);
```

