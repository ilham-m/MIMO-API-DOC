# Customer Package Management

```php
$customerPackageManagementController = $client->getCustomerPackageManagementController();
```

## Class Name

`CustomerPackageManagementController`

## Methods

* [Get Customer Package Invoice Pdf](/doc/controllers/customer-package-management.md#get-customer-package-invoice-pdf)
* [Get Customer Package Package List Pdf](/doc/controllers/customer-package-management.md#get-customer-package-package-list-pdf)


# Get Customer Package Invoice Pdf

:information_source: **Note** This endpoint does not require authentication.

```php
function getCustomerPackageInvoicePdf(string $accept)
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

$result = $customerPackageManagementController->getCustomerPackageInvoicePdf($accept);
```


# Get Customer Package Package List Pdf

:information_source: **Note** This endpoint does not require authentication.

```php
function getCustomerPackagePackageListPdf(string $accept)
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

$result = $customerPackageManagementController->getCustomerPackagePackageListPdf($accept);
```

