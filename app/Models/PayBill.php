<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class PayBill
 * @package App\Models
 * @version June 16, 2018, 9:07 pm EAT
 *
 * @property \Illuminate\Database\Eloquent\Collection leases
 * @property \Illuminate\Database\Eloquent\Collection roleRoute
 * @property \Illuminate\Database\Eloquent\Collection roleUser
 * @property \Illuminate\Database\Eloquent\Collection roles
 * @property \Illuminate\Database\Eloquent\Collection users
 * @property string payment_mode
 * @property string house_number
 * @property bigInteger tenant_id
 * @property string ref_number
 * @property float amount
 * @property string paybill
 * @property string phone_number
 * @property string BillRefNumber
 * @property string TransID
 * @property string|\Carbon\Carbon TransTime
 * @property string FirstName
 * @property string middleName
 * @property string LastName
 * @property string|\Carbon\Carbon received_on
 * @property integer client_id
 * @property integer created_by
 * @property boolean status
 */
class PayBill extends Model
{
    use SoftDeletes;

    public $table = 'payments';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'payment_mode',
        'house_number',
        'tenant_id',
        'ref_number',
        'amount',
        'paybill',
        'phone_number',
        'BillRefNumber',
        'TransID',
        'TransTime',
        'FirstName',
        'middleName',
        'LastName',
        'received_on',
        'client_id',
        'created_by',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'payment_mode' => 'string',
        'house_number' => 'string',
        'ref_number' => 'string',
        'amount' => 'float',
        'paybill' => 'string',
        'phone_number' => 'string',
        'BillRefNumber' => 'string',
        'TransID' => 'string',
        'FirstName' => 'string',
        'middleName' => 'string',
        'LastName' => 'string',
        'client_id' => 'integer',
        'created_by' => 'integer',
        'status' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
