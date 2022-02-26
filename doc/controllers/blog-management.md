# Blog Management

```php
$blogManagementController = $client->getBlogManagementController();
```

## Class Name

`BlogManagementController`

## Methods

* [Index Blogs](/doc/controllers/blog-management.md#index-blogs)
* [Detail Blog](/doc/controllers/blog-management.md#detail-blog)
* [Create Blog](/doc/controllers/blog-management.md#create-blog)
* [Restore Blog](/doc/controllers/blog-management.md#restore-blog)
* [Update Blog](/doc/controllers/blog-management.md#update-blog)
* [Delete Blog](/doc/controllers/blog-management.md#delete-blog)
* [Get Image Blog](/doc/controllers/blog-management.md#get-image-blog)


# Index Blogs

:information_source: **Note** This endpoint does not require authentication.

```php
function indexBlogs(string $token, string $accept)
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
$token = 'token10';
$accept = '*/*';

$result = $blogManagementController->indexBlogs($token, $accept);
```


# Detail Blog

:information_source: **Note** This endpoint does not require authentication.

```php
function detailBlog(string $accept)
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

$result = $blogManagementController->detailBlog($accept);
```


# Create Blog

```php
function createBlog(string $token, string $accept, string $title, string $body, int $status, string $images)
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `token` | `string` | Header, Required | - |
| `accept` | `string` | Header, Required | - |
| `title` | `string` | Form, Required | - |
| `body` | `string` | Form, Required | - |
| `status` | `int` | Form, Required | - |
| `images` | `string` | Form, Required | - |

## Response Type

`mixed`

## Example Usage

```php
$token = 'c78e1850d08e1898edf6e50856be0dd84ee93c6f2ab27beb1cdee9fa6b05e613a275d64702ce6279';
$accept = '*/*';
$title = 'go';
$body = 'ceritanya ada blog yang namanya go, isinya info terbaru tentang sesuatu';
$status = 1;
$images = 'images2';

$result = $blogManagementController->createBlog($token, $accept, $title, $body, $status, $images);
```


# Restore Blog

```php
function restoreBlog(string $token, string $accept)
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
$token = 'f447d64e2ab84708bace0e966c58dd5bda80e52cf55d1aff6272323e7d0acf7b5308324fe707cd5c';
$accept = '*/*';

$result = $blogManagementController->restoreBlog($token, $accept);
```


# Update Blog

```php
function updateBlog(
    string $xHttpMethodOverride,
    string $token,
    string $accept,
    string $title,
    string $body,
    int $status,
    string $images
)
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `xHttpMethodOverride` | `string` | Header, Required | - |
| `token` | `string` | Header, Required | - |
| `accept` | `string` | Header, Required | - |
| `title` | `string` | Form, Required | - |
| `body` | `string` | Form, Required | - |
| `status` | `int` | Form, Required | - |
| `images` | `string` | Form, Required | - |

## Response Type

`mixed`

## Example Usage

```php
$xHttpMethodOverride = 'patch';
$token = 'f447d64e2ab84708bace0e966c58dd5bda80e52cf55d1aff6272323e7d0acf7b5308324fe707cd5c';
$accept = '*/*';
$title = 'go blogs 2 edited';
$body = 'ceritanya ada blog yang namanya go, isinya info terbaru tentang sesuatu';
$status = 1;
$images = 'images2';

$result = $blogManagementController->updateBlog($xHttpMethodOverride, $token, $accept, $title, $body, $status, $images);
```


# Delete Blog

```php
function deleteBlog(string $accept)
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

$result = $blogManagementController->deleteBlog($accept);
```


# Get Image Blog

:information_source: **Note** This endpoint does not require authentication.

```php
function getImageBlog(string $token, string $accept)
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
$token = 'f447d64e2ab84708bace0e966c58dd5bda80e52cf55d1aff6272323e7d0acf7b5308324fe707cd5c';
$accept = '*/*';

$result = $blogManagementController->getImageBlog($token, $accept);
```

