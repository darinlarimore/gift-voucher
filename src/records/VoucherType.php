<?php
namespace verbb\giftvoucher\records;

use craft\db\ActiveQuery;
use craft\db\ActiveRecord;
use craft\records\FieldLayout;

class VoucherType extends ActiveRecord
{
    // Public Methods
    // =========================================================================

    public static function tableName(): string
    {
        return '{{%giftvoucher_vouchertypes}}';
    }

    public function getFieldLayout(): ActiveQuery
    {
        return $this->hasOne(FieldLayout::class, ['id' => 'fieldLayoutId']);
    }
}
