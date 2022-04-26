<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

/**
 * Request object for the [ListMerchant]($e/Merchants/ListMerchants) endpoint.
 */
class ListMerchantsRequest implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $cursor;

    /**
     * Returns Cursor.
     *
     * The cursor generated by the previous response.
     */
    public function getCursor(): ?int
    {
        return $this->cursor;
    }

    /**
     * Sets Cursor.
     *
     * The cursor generated by the previous response.
     *
     * @maps cursor
     */
    public function setCursor(?int $cursor): void
    {
        $this->cursor = $cursor;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        if (isset($this->cursor)) {
            $json['cursor'] = $this->cursor;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
