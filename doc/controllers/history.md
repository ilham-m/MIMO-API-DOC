# History

```php
$historyController = $client->getHistoryController();
```

## Class Name

`HistoryController`

## Methods

* [Package History](/doc/controllers/history.md#package-history)
* [Customer Notification](/doc/controllers/history.md#customer-notification)
* [Admin Notification](/doc/controllers/history.md#admin-notification)
* [Warehouse Notification](/doc/controllers/history.md#warehouse-notification)
* [Read Notif](/doc/controllers/history.md#read-notif)


# Package History

```php
function packageHistory(string $accept)
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

$result = $historyController->packageHistory($accept);
```


# Customer Notification

```php
function customerNotification(string $accept)
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

$result = $historyController->customerNotification($accept);
```


# Admin Notification

```php
function adminNotification(string $accept)
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

$result = $historyController->adminNotification($accept);
```


# Warehouse Notification

```php
function warehouseNotification(string $accept)
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

$result = $historyController->warehouseNotification($accept);
```


# Read Notif

```php
function readNotif(string $accept)
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

$result = $historyController->readNotif($accept);
```

