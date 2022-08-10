<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $fillable = 
    ['name', 
    'product_id',
    'name_urdu',
    'inv_display_name',
    'label_txt',
    'barcode',
    'manufacturing_date',
    'description',
    'l_purchase_price',
    'l_comission',
    'p_sale_price',
    'weight',
    'dimensions',
    'keywords',
    'supplier_id',
    'sub_category_id',
    'alternate_code',
    'publisher_id',
    'company_id',





];
    //`description`, `keywords`, `featured_image`, `gallery_images`, `publish_date`, `weight`, `dimensions`, `total_pages`, `inside_box`, `ISBN`, `l_sale_price`, `l_comission`, `l_purchase_price`, `retail_discount_policy`, `whole_sale_discount_policy`, `p_sale_price`, `p_comission`, `p_purchase_price`, `rental_discount_amt`, `lw_sale_discount`, `supplier_price`, `trade_percentage`, `purchase_price`, `p_retail_discount_amt`, `pw_sales_discount`, `type`, `unit_id`, `location_id`, `category_id`, `sub_category_id`, `supplier_id`, `publisher_id`, `author`, `topic_id`, `class_id`, `language_id`, `series_id`, `binding_id`, `is_avialable_online`, `delete_status`, `is_active`, `company_id`, `created_by`, `created_at`, `updated_at`
    public static $form_types = [
        'books',
        'noteBooks',
        'stationaries',
        'uniforms',
        'giftAndToys',
        'others'
    ];
    
}
