# Report

```php
$reportController = $client->getReportController();
```

## Class Name

`ReportController`

## Methods

* [Package Report](/doc/controllers/report.md#package-report)
* [Customer List Report](/doc/controllers/report.md#customer-list-report)
* [Customer Ranking Report](/doc/controllers/report.md#customer-ranking-report)
* [Invoice Report](/doc/controllers/report.md#invoice-report)


# Package Report

```php
function packageReport(string $startDate, string $endDate, string $accept)
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `startDate` | `string` | Query, Required | - |
| `endDate` | `string` | Query, Required | - |
| `accept` | `string` | Header, Required | - |

## Response Type

`mixed`

## Example Usage

```php
$startDate = '2022-02-04';
$endDate = '2022-02-28';
$accept = '*/*';

$result = $reportController->packageReport($startDate, $endDate, $accept);
```


# Customer List Report

```php
function customerListReport(string $accept)
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

$result = $reportController->customerListReport($accept);
```


# Customer Ranking Report

```php
function customerRankingReport(string $accept)
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

$result = $reportController->customerRankingReport($accept);
```


# Invoice Report

```php
function invoiceReport(string $startDate, string $endDate, string $accept)
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `startDate` | `string` | Query, Required | - |
| `endDate` | `string` | Query, Required | - |
| `accept` | `string` | Header, Required | - |

## Response Type

`mixed`

## Example Usage

```php
$startDate = '2022-02-04';
$endDate = '2022-02-28';
$accept = '*/*';

$result = $reportController->invoiceReport($startDate, $endDate, $accept);
```

