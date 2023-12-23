<?php

namespace Hrgweb\SalesAndInventory\Domain\Order\Data;

use Spatie\LaravelData\Data;
use Hrgweb\SalesAndInventory\Domain\Order\Enums\OrderStatus;
use Hrgweb\SalesAndInventory\Domain\Product\Data\ProductData;

class OrderData extends Data
{
    public function __construct(
        public ?int $id,
        public string $transaction_session_no,
        public ?ProductData $product,
        // public ?int $customer_id,
        // public int $product_id,
        // public ?string $product_name,
        // public ?string $product_description,
        public ?float $selling_price,
        public ?int $qty,
        public ?float $subtotal,
        public ?OrderStatus $status,
        public ?string $notes
    ) {
        // $this->customer_id ??= 1;
        $this->status ??= OrderStatus::PENDING;
        $this->selling_price ??= 0;
        $this->qty ??= 1;
        $this->subtotal = $this->selling_price * $this->qty;
    }
}
