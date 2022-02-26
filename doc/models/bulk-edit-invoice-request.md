
# Bulk Edit Invoice Request

## Structure

`BulkEditInvoiceRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `invoice` | [`Invoice[]`](/doc/models/invoice.md) | Required | - | getInvoice(): array | setInvoice(array invoice): void |

## Example (as JSON)

```json
{
  "invoice": [
    {
      "description": "test description 1",
      "carton": 4,
      "cbm": 3.5,
      "price_per_cbm": 10000,
      "total": 35000
    },
    {
      "description": "test description 2",
      "carton": 4,
      "cbm": 3.5,
      "price_per_cbm": 10000,
      "total": 35000
    },
    {
      "description": "test description 3",
      "carton": 4,
      "cbm": 3.5,
      "price_per_cbm": 10000,
      "total": 35000
    }
  ]
}
```

