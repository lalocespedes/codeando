SELECT `id`, `name`, `address`
  FROM `clients`
  JOIN `invoices`
    ON (`invoices.id` = `clients.id`)
  WHERE (`factura` = 3)
