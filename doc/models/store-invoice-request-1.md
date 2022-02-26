
# Store Invoice Request 1

## Structure

`StoreInvoiceRequest1`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `packageId` | `string` | Required | - | getPackageId(): string | setPackageId(string packageId): void |
| `invoice` | [`Invoice2[]`](/doc/models/invoice-2.md) | Required | - | getInvoice(): array | setInvoice(array invoice): void |

## Example (as JSON)

```json
{
  "package_id": "1",
  "invoice": [
    {
      "description": "test description 4",
      "carton": 4,
      "cbm": 3.5,
      "price_per_cbm": 10000
    },
    {
      "description": "test description 5",
      "carton": 4,
      "cbm": 3.5,
      "price_per_cbm": 10000
    },
    {
      "description": "test description 6",
      "carton": 4,
      "cbm": 3.5,
      "price_per_cbm": 10000
    }
  ]
}
```

