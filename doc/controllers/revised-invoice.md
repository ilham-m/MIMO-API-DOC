# Revised Invoice

```php
$revisedInvoiceController = $client->getRevisedInvoiceController();
```

## Class Name

`RevisedInvoiceController`

## Methods

* [Index Invoice](/doc/controllers/revised-invoice.md#index-invoice)
* [Show Invoice](/doc/controllers/revised-invoice.md#show-invoice)
* [Store Invoice](/doc/controllers/revised-invoice.md#store-invoice)
* [Single Store Invoice](/doc/controllers/revised-invoice.md#single-store-invoice)
* [Bulk Edit Invoice](/doc/controllers/revised-invoice.md#bulk-edit-invoice)
* [Single Edit Invoice](/doc/controllers/revised-invoice.md#single-edit-invoice)
* [Single Delete Invoice](/doc/controllers/revised-invoice.md#single-delete-invoice)


# Index Invoice

```php
function indexInvoice(string $accept)
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

$result = $revisedInvoiceController->indexInvoice($accept);
```


# Show Invoice

```php
function showInvoice(string $token, string $accept)
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

$result = $revisedInvoiceController->showInvoice($token, $accept);
```


# Store Invoice

```php
function storeInvoice(string $accept, StoreInvoiceRequest2 $body)
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `accept` | `string` | Header, Required | - |
| `body` | [`StoreInvoiceRequest2`](/doc/models/store-invoice-request-2.md) | Body, Required | - |

## Response Type

`mixed`

## Example Usage

```php
$accept = '*/*';
$body_packageId = '1';
$body_invoice = [];

$body_invoice_0_description = 'test description 4';
$body_invoice_0_carton = 4;
$body_invoice_0_cbm = 3.5;
$body_invoice_0_pricePerCbm = 10000;
$body_invoice_0_total = 35000;
$body_invoice[0] = new Models\Invoice(
    $body_invoice_0_description,
    $body_invoice_0_carton,
    $body_invoice_0_cbm,
    $body_invoice_0_pricePerCbm,
    $body_invoice_0_total
);

$body_invoice_1_description = 'test description 5';
$body_invoice_1_carton = 4;
$body_invoice_1_cbm = 3.5;
$body_invoice_1_pricePerCbm = 10000;
$body_invoice_1_total = 35000;
$body_invoice[1] = new Models\Invoice(
    $body_invoice_1_description,
    $body_invoice_1_carton,
    $body_invoice_1_cbm,
    $body_invoice_1_pricePerCbm,
    $body_invoice_1_total
);

$body_invoice_2_description = 'test description 6';
$body_invoice_2_carton = 4;
$body_invoice_2_cbm = 3.5;
$body_invoice_2_pricePerCbm = 10000;
$body_invoice_2_total = 35000;
$body_invoice[2] = new Models\Invoice(
    $body_invoice_2_description,
    $body_invoice_2_carton,
    $body_invoice_2_cbm,
    $body_invoice_2_pricePerCbm,
    $body_invoice_2_total
);

$body = new Models\StoreInvoiceRequest2(
    $body_packageId,
    $body_invoice
);

$result = $revisedInvoiceController->storeInvoice($accept, $body);
```


# Single Store Invoice

```php
function singleStoreInvoice(
    string $accept,
    int $packageId,
    string $description,
    int $carton,
    int $cbm,
    int $pricePerCbm
)
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `accept` | `string` | Header, Required | - |
| `packageId` | `int` | Form, Required | - |
| `description` | `string` | Form, Required | - |
| `carton` | `int` | Form, Required | - |
| `cbm` | `int` | Form, Required | - |
| `pricePerCbm` | `int` | Form, Required | - |

## Response Type

`mixed`

## Example Usage

```php
$accept = '*/*';
$packageId = 1;
$description = 'a';
$carton = 1;
$cbm = 1;
$pricePerCbm = 1;

$result = $revisedInvoiceController->singleStoreInvoice($accept, $packageId, $description, $carton, $cbm, $pricePerCbm);
```


# Bulk Edit Invoice

```php
function bulkEditInvoice(string $accept, BulkEditInvoiceRequest $body)
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `accept` | `string` | Header, Required | - |
| `body` | [`BulkEditInvoiceRequest`](/doc/models/bulk-edit-invoice-request.md) | Body, Required | - |

## Response Type

`mixed`

## Example Usage

```php
$accept = '*/*';
$body_invoice = [];

$body_invoice_0_description = 'test description 1';
$body_invoice_0_carton = 4;
$body_invoice_0_cbm = 3.5;
$body_invoice_0_pricePerCbm = 10000;
$body_invoice_0_total = 35000;
$body_invoice[0] = new Models\Invoice(
    $body_invoice_0_description,
    $body_invoice_0_carton,
    $body_invoice_0_cbm,
    $body_invoice_0_pricePerCbm,
    $body_invoice_0_total
);

$body_invoice_1_description = 'test description 2';
$body_invoice_1_carton = 4;
$body_invoice_1_cbm = 3.5;
$body_invoice_1_pricePerCbm = 10000;
$body_invoice_1_total = 35000;
$body_invoice[1] = new Models\Invoice(
    $body_invoice_1_description,
    $body_invoice_1_carton,
    $body_invoice_1_cbm,
    $body_invoice_1_pricePerCbm,
    $body_invoice_1_total
);

$body_invoice_2_description = 'test description 3';
$body_invoice_2_carton = 4;
$body_invoice_2_cbm = 3.5;
$body_invoice_2_pricePerCbm = 10000;
$body_invoice_2_total = 35000;
$body_invoice[2] = new Models\Invoice(
    $body_invoice_2_description,
    $body_invoice_2_carton,
    $body_invoice_2_cbm,
    $body_invoice_2_pricePerCbm,
    $body_invoice_2_total
);

$body = new Models\BulkEditInvoiceRequest(
    $body_invoice
);

$result = $revisedInvoiceController->bulkEditInvoice($accept, $body);
```


# Single Edit Invoice

```php
function singleEditInvoice(string $accept, string $description, int $carton, float $cbm, int $pricePerCbm)
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `accept` | `string` | Header, Required | - |
| `description` | `string` | Form, Required | - |
| `carton` | `int` | Form, Required | - |
| `cbm` | `float` | Form, Required | - |
| `pricePerCbm` | `int` | Form, Required | - |

## Response Type

`mixed`

## Example Usage

```php
$accept = '*/*';
$description = 'description 1 edited';
$carton = 2;
$cbm = 4.5;
$pricePerCbm = 10000;

$result = $revisedInvoiceController->singleEditInvoice($accept, $description, $carton, $cbm, $pricePerCbm);
```


# Single Delete Invoice

```php
function singleDeleteInvoice(
    string $accept,
    string $description,
    int $carton,
    float $cbm,
    int $pricePerCbm,
    int $total
)
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `accept` | `string` | Header, Required | - |
| `description` | `string` | Form, Required | - |
| `carton` | `int` | Form, Required | - |
| `cbm` | `float` | Form, Required | - |
| `pricePerCbm` | `int` | Form, Required | - |
| `total` | `int` | Form, Required | - |

## Response Type

`mixed`

## Example Usage

```php
$accept = '*/*';
$description = 'description 1 edited';
$carton = 2;
$cbm = 4.5;
$pricePerCbm = 10000;
$total = 90000;

$result = $revisedInvoiceController->singleDeleteInvoice($accept, $description, $carton, $cbm, $pricePerCbm, $total);
```

