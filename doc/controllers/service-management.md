# Service Management

```php
$serviceManagementController = $client->getServiceManagementController();
```

## Class Name

`ServiceManagementController`

## Methods

* [Index Service](/doc/controllers/service-management.md#index-service)
* [Show Service](/doc/controllers/service-management.md#show-service)
* [Service With Detail](/doc/controllers/service-management.md#service-with-detail)
* [Service](/doc/controllers/service-management.md#service)
* [Edit Service](/doc/controllers/service-management.md#edit-service)
* [Delete Service](/doc/controllers/service-management.md#delete-service)
* [Get Image Service](/doc/controllers/service-management.md#get-image-service)


# Index Service

```php
function indexService(string $accept)
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

$result = $serviceManagementController->indexService($accept);
```


# Show Service

```php
function showService(string $accept)
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

$result = $serviceManagementController->showService($accept);
```


# Service With Detail

```php
function serviceWithDetail(string $accept)
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

$result = $serviceManagementController->serviceWithDetail($accept);
```


# Service

```php
function service(string $accept, string $title, string $subtitle, string $file, string $description)
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `accept` | `string` | Header, Required | - |
| `title` | `string` | Form, Required | - |
| `subtitle` | `string` | Form, Required | - |
| `file` | `string` | Form, Required | - |
| `description` | `string` | Form, Required | - |

## Response Type

`mixed`

## Example Usage

```php
$accept = '*/*';
$title = 'Jelajah Indonesia';
$subtitle = 'Jelajahi Dan Nikmati Keindahan Indonesia ';
$file = 'file0';
$description = '<h3>One Day Tour</h3>
 <p>Jalan Jalan Bersama Kami Bin Ilyas Pariwisata Selama Seharian Penuh</p>
<p>&nbsp;</p>
<h3>Paket Yang Kami Sediakan</h3>
<p>Pilihan Yang Tersedia :</p>
<ul>
	<li>Bandung | 400k/orang | plus konsumsi 500k/orang</li>
	<li>Bali | 400k/orang | plus konsumsi 500k/orang</li>
	<li>Raja Ampat | 400k/orang | plus konsumsi 500k/orang</li>
	<li>Labuan Bajo | 400k/orang | plus konsumsi 500k/orang</li>
</ul>';

$result = $serviceManagementController->service($accept, $title, $subtitle, $file, $description);
```


# Edit Service

```php
function editService(
    string $xHttpMethodOverride,
    string $accept,
    string $title,
    string $subtitle,
    string $file,
    string $action,
    string $description
)
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `xHttpMethodOverride` | `string` | Header, Required | - |
| `accept` | `string` | Header, Required | - |
| `title` | `string` | Form, Required | - |
| `subtitle` | `string` | Form, Required | - |
| `file` | `string` | Form, Required | - |
| `action` | `string` | Form, Required | - |
| `description` | `string` | Form, Required | - |

## Response Type

`mixed`

## Example Usage

```php
$xHttpMethodOverride = 'patch';
$accept = '*/*';
$title = 'service 1 edit';
$subtitle = 'pelayanan cuci';
$file = 'file0';
$action = 'asd';
$description = 'kami memberikan pelayanan cuci piring';

$result = $serviceManagementController->editService($xHttpMethodOverride, $accept, $title, $subtitle, $file, $action, $description);
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

$result = $serviceManagementController->deleteService($accept);
```


# Get Image Service

```php
function getImageService(string $slug, string $accept)
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `slug` | `string` | Template, Required | - |
| `accept` | `string` | Header, Required | - |

## Response Type

`mixed`

## Example Usage

```php
$slug = 'slug10';
$accept = '*/*';

$result = $serviceManagementController->getImageService($slug, $accept);
```

